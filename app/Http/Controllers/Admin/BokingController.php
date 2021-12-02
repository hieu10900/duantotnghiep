<?php

namespace App\Http\Controllers\Admin;

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
    public function index(){
        if (Gate::denies('View_Admin','CRUD_Booking')) {
            abort(403);
        }
        $booking_data = Booking::all();
        return view('admin/booking/index', compact('booking_data'));
    }
    public function create(){
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $service = Service::all();
        $room = Room::all();
        return view('admin/booking/form', compact('service','room'));
    }
    public function store( storeBooking $storeBooking){
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
            'guest_email'=>$request['guest_email'],
            'guest_name' =>$request['guest_name'],
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

        $alert='Đã Tạo Mới  Thanh Công!';

        return redirect()->back()->with('alert',$alert);


    }
    public function show($id){
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $show_booking = Booking::find($id);
        $service_price = 0;
        $discount_rate =null;
        foreach($show_booking->service as $service){
         $service_price += $service->price;
        }
        foreach($show_booking->discount as $discount){
            $discount_rate = $discount->discount_rate;
        }



        return view('admin/booking/show',compact('show_booking','service_price','discount_rate'));
    }
    public function edit($id){
        if (Gate::denies('CRUD_Booking')) {
            abort(403);
        }
        $booking_data = Booking::find($id);
        $service = Service::all();
        $room = Room::all();
        return view('admin/booking/form', compact('service','room','booking_data'));
    }

    public function update(storeBooking $storeBooking){
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

        if ($check_in->lt($now) == true || $check_out->lt($check_in) == true) {
            return response()->json([
                'status' => 'Loi thoi gian',
            ]);
        };
        $data_booking = [
            'user_id' => $request['user_id'],
            'room_id' => $request['room_id'],
            'guest_email'=>$request['guest_email'],
            'guest_name' =>$request['guest_name'],
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
        }

        $alert='Đã Cập Nhật Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function delete(){
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
}
