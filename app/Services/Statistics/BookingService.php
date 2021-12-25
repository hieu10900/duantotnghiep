<?php

namespace App\Services\Statistics;

use App\Models\Booking;
use App\Models\BookingDiscount;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingService
{
    private $year;
    private $month;

    public function __construct(int $year, int $month)
    {
        $this->year = $year;
        $this->month = $month;
    }
    private function getAllMoeny($allMoeny){
        $moneyOfMonth = "0";
        foreach ($allMoeny as $data) {
            $now = Carbon::now();
            $check_in = Carbon::create($data->check_in);
            $check_out = Carbon::create($data->check_out);
            $days = $check_out->diff($check_in)->format("%a") + 1;
            $service_price = 0;
            $discount_rate = null;
            foreach ($data->service as $service) {
                $service_price += $service->price;
            }
            foreach ($data->discount as $discount) {
                $discount_rate = $discount->discount_rate;
            }
            $moneyOfMonth  +=  (($data->room->price * $days) + ($service_price*$data->amount_of_people))  - $discount_rate ;
        }
        return  $moneyOfMonth ;
        
    }
    public function getTotalCostForTextCurrentMonth()
    {
        $data = DB::table('bookings')
            ->join('rooms', 'results.vendor_id', '=', 'vendors.vendor_id')
            ->whereMonth('results.created_at', $this->month)
            ->select(DB::raw('sum(results.characters * vendors.cost) as data'))
            ->get();

        $cost = get_object_vars($data[0]);

        return $cost['data'];
    }

    public function service()
    {
        $data = DB::table('booking_service')
            ->select('booking_service.id')
            ->whereMonth('booking_service.start_date', $this->month)
            ->count();

        return $data;
    }

    public function getServiceCurrentYear()
    {
        $data = DB::table('booking_service')
            ->select('booking_service.id')
            ->count();
        return $data;
    }

    public function getServicePastMonth()
    {
        $date = \Carbon\Carbon::now();
        $pastMonth = $date->subMonth()->format('m');

        $data = DB::table('booking_service')
            ->select('booking_service.id')
            ->whereMonth('booking_service.start_date', $pastMonth)
            ->count();

        return $data;
    }

    public function discount()
    {
        // $payments = DB::table('booking_discount')->select(DB::raw("sum(phone) as data"))
        // ->join('discounts', 'booking_discount.discount_id', '=', 'discountsdiscounts.id')
        // ->whereMonth('created_at', $this->month)
        // ->get();
        // dd($payments);
        $data = DB::table('booking_discount')
            ->select('booking_discount.id', 'bookings.created_at', 'bookings.id')
            ->join('bookings', 'booking_discount.booking_id', 'bookings.id')
            ->whereMonth('bookings.created_at', $this->month)
            ->count();
        return $data;
    }

    public function getDiscountPastMonth()
    {
        $date = \Carbon\Carbon::now();
        $pastMonth = $date->subMonth()->format('m');

        $data = DB::table('booking_discount')
            ->select('booking_discount.id', 'bookings.created_at', 'bookings.id')
            ->join('bookings', 'booking_discount.booking_id', 'bookings.id')
            ->whereMonth('booking_discount.created_at', $pastMonth)
            ->count();

        return $data;
    }

    public function getDiscountCurrentYear()
    {
        $data = DB::table('booking_discount')
            ->select('booking_discount.id', 'bookings.created_at', 'bookings.id')
            ->join('bookings', 'booking_discount.booking_id', 'bookings.id')
            // ->whereMonth('booking_discount.created_at', $this->year)
            ->count();

        return $data;
    }

    public function totalMon(){
        $service = DB::table('booking_service')
        ->select('booking_service.id')
        ->join('services', 'booking_service.service_id', '=', 'services.id')
        ->whereMonth('booking_service.start_date', $this->month)
        ->sum('services.price');

        $discount = DB::table('booking_discount')
        ->select('booking_discount.discount_id',)
        ->join('discounts', 'booking_discount.discount_id', '=', 'discounts.id')
        ->sum('discounts.discount_rate');

        $booking = DB::table('bookings')
        ->select('bookings.id')
        ->join('rooms', 'bookings.room_id', '=', 'rooms.id')
        ->whereMonth('bookings.created_at', $this->month)
        ->sum('rooms.price');
        
        $total = $service + $discount + $booking;
       
        return $total;

    }

    public function totalPassMon(){
        $date = \Carbon\Carbon::now();
        $pastMonth = $date->subMonth()->format('m');

        // $service = DB::table('booking_service')
        // ->select('booking_service.id')
        // ->join('services', 'booking_service.service_id', '=', 'services.id')
        // ->whereMonth('booking_service.start_date', $pastMonth)
        // ->sum('services.price');

        // $discount = DB::table('booking_discount')
        // ->select('booking_discount.discount_id',)
        // ->join('discounts', 'booking_discount.discount_id', '=', 'discounts.id')
        // ->sum('discounts.discount_rate');

        // $booking = DB::table('bookings')
        // ->select('bookings.id')
        // ->join('rooms', 'bookings.room_id', '=', 'rooms.id')
        // ->whereMonth('bookings.created_at', $pastMonth)
        // ->sum('rooms.price');
        
        // $total = $service + $discount + $booking;
      
        $allMoeny = Booking::whereYear('created_at', $this->year)
        ->whereMonth('check_out', $pastMonth)->where('status','3')
    ->with('service')->with('discount')
        ->with('room')->get();
        $total =  $this->getAllMoeny($allMoeny);
       
    
        return $total;
    }

    public function totalYear(){
        $allMoeny = Booking::whereYear('created_at', $this->year)
        ->whereYear('check_out', Carbon::now()->year)->where('status','3')
    ->with('service')->with('discount')
        ->with('room')->get();
        $total =  $this->getAllMoeny($allMoeny);
       
        return $total;
    }
}
