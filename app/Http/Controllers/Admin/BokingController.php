<?php

namespace App\Http\Controllers\Admin;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\storeBooking;
use App\Models\Booking;
use App\Models\Discount;
use App\Models\Room;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class BokingController extends Controller
{
    public function cancelBooking($id)
    {
        $data = Booking::find($id);
        $data->cancelBooking();
    
        return redirect()->back();
    }

    public function approveBooking($id)
    {
        $data = Booking::find($id);
        $data->approveBooking();

        return redirect()->back();
    }

    public function create()
    {
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $service = Service::all();
        $room = Room::all();
        return view('admin/booking/form', compact('service', 'room'));
    }

    public function store(storeBooking $storeBooking)
    {
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $request = request()->except('_token');

        $request['user_id'] = '1';
        if (empty($request['discount']) == false) {
            $check_discount = Discount::firstWhere('code', $request['discount']);
            if ($check_discount != null && $check_discount->quantity != 0) {
                $discount_id = $check_discount->id;
            } else {
                return response()->json([
                    'status' => 'ma giam gia khong dung hoac het han',
                ]);
            }
        }

        $now = Carbon::now();
        $check_in = Carbon::create($request['check_in']);
        $check_out = Carbon::create($request['check_out']);

        if ($check_in->lt($now) == true || $check_out->lt($check_in) == true) {
//            $err_time='Đã Tạo Mới  Thanh Công!';
//            return redirect()->back()->with('err_time',$err_time);
        };
        $data_booking = [
            'user_id' => $request['user_id'],
            'room_id' => $request['room_id'],
            'guest_email' => $request['guest_email'],
            'guest_name' => $request['guest_name'],
            'phone' => $request['phone'],
            'check_in' => $request['check_in'],
            'check_out' => $request['check_out'],
            'amount_of_people' => $request['amount_of_people'],
            'status' => '0',
        ];

        $booking = Booking::create($data_booking);
        
        if (isset($discount_id)) {
            DB::table('booking_discount')->insert(
                [
                    'booking_id' => $booking->id,
                    'discount_id' => $discount_id,
                ]
            );
            Discount::find($discount_id)->quantity();
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

        $request['title'] =  'Cám ơn bạn đã đạt phòng. Vui lòng chờ xác nhận!';
        $request['name'] = $request['guest_name'];
        $request['email'] = $request['guest_email'];
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


        $alert = 'Đã Tạo Mới  Thanh Công!';

        return redirect()->back()->with('alert', $alert);


    }

    public function show($id)
    {
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $show_booking = Booking::find($id);
        $show_booking->load('service')->load('discount')->load('room')->get();
        $now = Carbon::now();
        $check_in = Carbon::create($show_booking->check_in);
        $check_out = Carbon::create($show_booking->check_out);
        $days = $check_out->diff($check_in)->format("%a") + 1;
        $service_price = 0;
        $discount_rate = null;
        foreach ($show_booking->service as $service) {
            $service_price += $service->price;
        }
        foreach ($show_booking->discount as $discount) {
            $discount_rate = $discount->discount_rate;
        }
        return view('admin/booking/show', compact('show_booking', 'service_price', 'discount_rate', 'days'));
    }

    public function edit($id)
    {
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $booking_data = Booking::find($id);
        $service = Service::all();
        $room = Room::all();
        return view('admin/booking/form', compact('service', 'room', 'booking_data'));
    }

    public function update(storeBooking $storeBooking)
    {
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $request = request()->except('_token');
        
        if (empty($request['discount']) == false) {
            $check_discount = Discount::firstWhere('code', $request['discount']);
            if ($check_discount != null && $check_discount->quantity != 0) {
                $discount_id = $check_discount->id;
            } else {
                return response()->json([
                    'status' => 'ma giam gia khong dung hoac het han',
                ]);
            }
        }

        $now = Carbon::now();
        $check_in = Carbon::create($request['check_in']);
        $check_out = Carbon::create($request['check_out']);

        // if ($check_in->lt($now) == true || $check_out->lt($check_in) == true) {
        //     return response()->json([
        //         'status' => 'Loi thoi gian',
        //     ]);
        // };
        $data_booking = [
            'user_id' => $request['user_id'],
            'room_id' => $request['room_id'],
            'guest_email' => $request['guest_email'],
            'guest_name' => $request['guest_name'],
            'phone' => $request['phone'],
            'check_in' => $request['check_in'],
            'check_out' => $request['check_out'],
            'amount_of_people' => $request['amount_of_people'],
            'status' => $request['status'],
        ];

        $booking = Booking::find($request['id']);
        $booking->update($data_booking);
        if (isset($discount_id)) {
            $booking->discount()->sync($discount_id);
        }
        if (empty($request['services']) == false) {
            $booking->service()->sync($request['services']);
        }else{
            $booking->service()->detach();
        }

        if($request['status'] == 2){
            $request['title'] = "Chúc mừng bạn. Đơn phòng đã được xác nhận. Hẹn gặp bạn ở Homestay Ba Vì!";
        }elseif ($request['status'] == 3){
            $request['title'] = "Cám ơn bạn đã tin tưởng lựa chọn Homestay Ba Vì. Hy vọng có thể phục vụ các bạn trong những dịp tiếp theo!";
        }elseif ($request['status'] == 4){
            $request['title'] = "Đã Hủy";
        }
        
        if($request['status'] == 3){
        $request['name'] = $request['guest_name'];
        $request['email'] = $request['guest_email'];
        $request['name_room'] = Room::where('id', $request['room_id'])->pluck('name')->first();
        $priceOfRoom = Room::find($request['room_id']);
        $request['price_room'] = $priceOfRoom->price * ($check_out->diff($check_in)->format("%a") + 1);
        $booking = Booking::find($request['id']);
        $booking->update($data_booking);
        if (isset($discount_id)) {
            $booking->discount()->sync($discount_id);
        }
        if (empty($request['services']) == false) {
            $booking->service()->sync($request['services']);
        }

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
    }

        $alert = 'Đã Cập Nhật Thanh Công!';
        return redirect()->back()->with('alert', $alert);
    }

    public function delete()
    {
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $id = request()->id;
        $booking = Booking::find($id);
        $booking->delete();
        $booking->discount()->detach();
        $booking->service()->detach();

        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }

    public function index($status)
    {
        if (Gate::denies('View_Admin', 'CRUD_Booking')) {
            abort(403);
        }
        // 0 : chưa duuyet
        // 1 : đã duyệt nhưng chưa cọc
        // 2 : đã cọc
        // 3 : đã hoàn thành
        // 4 : đơn đã hủy
        if ($status == "chua_duyet") {
            $booking_data = Booking::where("status", "0")->orderBy('check_in', 'desc')->get();
        } else if ($status == "da_duyet") {
            $booking_data = Booking::wherein("status", ["1", "2"])->orderBy('check_in', 'desc')->get();
        } else if ($status == "hoan_thanh") {
            $booking_data = Booking::where("status", "3")->orderBy('check_in', 'desc')->get();
        } else if ($status == "huy") {
            $booking_data = Booking::where("status", "4")->orderBy('check_in', 'desc')->get();
        }

        return view('admin/booking/index', compact('booking_data'));
    }
}
