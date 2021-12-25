<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\BookingRequesr;
use App\Mail\SendMail;
use App\Models\Booking;
use App\Models\Comment;
use App\Models\Discount;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index(BookingRequesr $bookingRequesr)
    {
        $request = request()->except('_token');
        // kiểm tra mã giảm giá
        if (empty($request['discount']) == false) {
            $check_discount = Discount::firstWhere('code', $request['discount']);
            if ($check_discount != null || $check_discount->quantity > 0) {
                $discount_id = $check_discount->id;
            } else {
                return response()->json([
                    'status' => '300',
                ]);
            }
        }
        // end

        // kiểm tra ngày đến ngày đi
        $now = Carbon::now();
        $check_in = Carbon::create($request['check_in']);
        $check_out = Carbon::create($request['check_out']);
        if ($check_in->lt($now) == true || $check_out->lt($check_in) == true) {
            return response()->json([
                'status' => '100',
            ]);
        }
        // end

        // lưu booking
        if (!isset($request['user_id'])) {
            $request['user_id'] = '1';
        }
        $data_booking = [
            'user_id' => $request['user_id'],
            'room_id' => $request['room_id'],
            'guest_email' => $request['email'],
            'guest_name' => $request['name'],
            'phone' => $request['phone'],
            'check_in' => $check_in,
            'check_out' =>  $check_out,
            'amount_of_people' => $request['amount_of_people'],
            'status' => '0',
        ];
      
        $booking = Booking::create($data_booking);
        //end

        // lưu khuyến mại
        if (isset($discount_id)) {
            $booking->discount()->sync($discount_id);
            Discount::find($discount_id)->quantity();
        }
//        end


        //lưu dịch vụ

        if (empty($request['services']) == false) {
            foreach ($request['services'] as $service) {
                $data_service = [
                    'booking_id' => $booking->id,
                    'service_id' => $service,
                    'start_date' =>  $check_in,
                    'end_date' => $check_out,
                ];
                DB::table('booking_service')->insert($data_service);
            }
        }
        //end

        $request['title'] =  'Cám ơn bạn đã đạt phòng. Vui lòng chờ xác nhận!';
        $request['name_room'] = Room::where('id', $request['room_id'])->pluck('name')->first();
        $priceOfRoom = Room::find($request['room_id']);
        $request['price_room'] = $priceOfRoom->price * ($check_out->diff($check_in)->format("%a") + 1);

        $serviceOfBooking = "";
        $request['service_id'] = "0";
        if (!empty($request['services'])) {
            $se = Service::whereIn('id', $request['services'])->get();
            foreach ($se as $ses) {
                $serviceOfBooking =  $serviceOfBooking . "
            " .  $ses->name . " Giá : " . $ses->price . " VND X " . $request['amount_of_people'] . " = " . $request['amount_of_people'] * $ses->price;

                $request['service_id'] += $request['amount_of_people'] * $ses->price;
            }
        }
        if (isset($discount_id)) {
            $discount = Discount::find($discount_id);
            $request['discount_id'] = $discount->discount_rate;
            $request['total'] = $request['price_room'] + $request['service_id'] - $discount->discount_rate;
        } else {
            $request['total'] = $request['price_room'] + $request['service_id'];
        }

        $moreUser = 'duongmanh.lee@gmail.com';
        Mail::to($booking->guest_email)->cc($moreUser)->send(new SendMail($request));



        return response()->json([
            'status' => '200',
        ]);


    }

    public function detail(BookingRequesr $bookingRequesr)
    {
        $request = request()->except('_token');
        // kiểm tra mã giảm giá
        if (empty($request['discount']) == false) {
            $check_discount = Discount::firstWhere('code', $request['discount']);
            if ($check_discount != null || $check_discount->quantity > 0) {
                $discount_id = $check_discount->id;
            } else {
                return response()->json([
                    'status' => '300',
                ]);
            }
        }
        // end

        // kiểm tra ngày đến ngày đi
        $now = Carbon::now();
        $check_in = Carbon::create($request['check_in']);
        $check_out = Carbon::create($request['check_out']);
        if ($check_in->lt($now) == true || $check_out->lt($check_in) == true) {
            return response()->json([
                'status' => '100',
            ]);
        }
        // end


        $priceOfRoom = Room::find($request['room_id']);
        $priceOfBooking = $priceOfRoom->price * ($check_out->diff($check_in)->format("%a") + 1);
        $room = "Phòng :" . $priceOfRoom->name . "  Giá :" . number_format((float)$priceOfRoom->price) . "x"
            . ($check_out->diff($check_in)->format("%a") + 1)
            . " ngày = " . number_format((float)$priceOfBooking) . " VND.";
        $serviceOfBooking = "";
        $moneyOfService = "0";
        if (empty($request['services']) == false) {
            $se = Service::whereIn('id', $request['services'])->get();
            foreach ($se as $ses) {
                $serviceOfBooking =  $serviceOfBooking . "
            " .  $ses->name . " Giá : " . number_format((float)$ses->price) . " VND X " . $request['amount_of_people'] . " = " . number_format((float)$request['amount_of_people'] * $ses->price) ." VND";

                $moneyOfService += $request['amount_of_people'] * $ses->price;
            }
        }
        if (isset($discount_id)) {
            $discount = Discount::find($discount_id);
            $discounts = " Khuyến mại được dùng : " . $discount->full_name . " , được giảm giá :" . number_format((float)$discount->discount_rate) . " VND";
            $netMoeny = $priceOfBooking + $moneyOfService - $discount->discount_rate;
            $message = $room . "" . $serviceOfBooking . "
         " . $discounts . "
         Tổng Tiền :" . number_format((float)$netMoeny) . " VND";
        } else {
            $netMoeny = $priceOfBooking + $moneyOfService;
            $message = $room . "" . $serviceOfBooking . "
         " .
                "Tổng Tiền :" . number_format((float)$netMoeny) . " VND";
        }

        return response()->json([
            'status' => '200',
            'message' => $message,
        ]);
    }
}

