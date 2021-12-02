<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\BookingRequesr;

use App\Models\Booking;
use App\Models\Comment;
use App\Models\Discount;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index(BookingRequesr $bookingRequesr)
    {
        $request = request()->except('_token');

        if (empty($request['discount']) == false) {
            $check_discount = Discount::firstWhere('code', $request['discount']);
            if ($check_discount != null) {
                $discount_id = $check_discount->id;
            } else {
//              dd("ma giam gia sai");
                return;
            }
        }

        $now = Carbon::now();
        $check_in = Carbon::create($request['check_in']);
        $check_out = Carbon::create($request['check_out']);

        if ($check_in->lt($now) == true || $check_out->lt($check_in) == true) {
            return response()->json([
                'status' => '100',
            ]);
        }
        if(!isset($request['user_id'])){
            $request['user_id'] = '1';
        }
        $data_booking = [
            'user_id' => $request['user_id'],
            'room_id' => $request['room_id'],
            'guest_email'=>$request['email'],
            'guest_name' =>$request['name'],
            'phone' => $request['phone'],
            'check_in' => $request['check_in'],
            'check_out' => $request['check_out'],
            'amount_of_people' => $request['amount_of_people'],
            'status' => '0',
        ];
// dd($data_booking);
        $booking = Booking::create($data_booking);
        if (isset($discount_id)) {
            DB::table('booking_discount')->insert(
                [
                    'booking_id' => $booking->id,
                    'discount_id' => $discount_id,
                ]
            );
        }
        if (empty($request['services']) == false) {
            foreach ($request['services'] as $service) {
                $data_service = [
                    'booking_id' => $booking->id,
                    'service_id' => $service,
                    'start_date' => $request['check_in'],
                    'end_date' => $request['check_out']
                ];
                DB::table('booking_service')->insert($data_service);
            }
        }

        return response()->json([
            'status' => '200',

        ]);


    }
}

