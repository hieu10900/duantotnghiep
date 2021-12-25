<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Evaluate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $user_id = auth()->id();
        $booking_data = Booking::where('user_id',$user_id)->with('room')->get();

        // $booking_data = Booking::where('user_id', $user_id)->get();
        return view('user/booking/index', compact('booking_data'));
    }
    public function delete($id){
      $evaluate =  Evaluate::find($id);
      $evaluate->delete();
      return redirect()->back();

    }
    public function show($id)
    {
        
        $show_booking = Booking::find($id);   
        if( $show_booking == null){
            abort(403);
        }
        $show_booking->load('service')->load('discount')->load('room')->load('evaluate')->get();
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
}
