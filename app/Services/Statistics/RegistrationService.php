<?php

namespace App\Services\Statistics;

use App\Models\Booking;
use App\Models\Discount;
use App\Models\Room;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RegistrationService
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
    public function getAllMoenyOfMonth()
    {
        $allMoeny = Booking::whereYear('created_at', $this->year)
            ->whereMonth('check_out', Carbon::now()->month)->where('status','3')
        ->with('service')->with('discount')
            ->with('room')->get();
            $moneyOfMonth =  $this->getAllMoeny($allMoeny);
        return $moneyOfMonth;
    }

    public function getAllUsers()
    {
        $users = User::select(DB::raw("count(id) as data"), DB::raw("MONTH(created_at) month"))
            ->whereYear('created_at', $this->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get()->toArray();

        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $data[$i] = 0;
        }

        foreach ($users as $row) {
            $month = $row['month'];
            $data[$month] = intval($row['data']);
        }

        return $data;
    }


    public function getNewUsersCurrentMonth()
    {
        $total_users = User::select(DB::raw("count(id) as data"))
            ->whereMonth('created_at', $this->month)
            ->get();
        return $total_users;
    }


    public function getNewUsersPastMonth()
    {
        $date = \Carbon\Carbon::now();
        $pastMonth = $date->subMonth()->format('m');

        $total_users = User::select(DB::raw("count(id) as data"))
            ->whereMonth('created_at', $pastMonth)
            ->get();

        return $total_users;
    }


    public function getNewUsersCurrentYear()
    {
        $total_users = User::select(DB::raw("count(id) as data"))
            ->whereYear('created_at', $this->year)
            ->get();
        return $total_users;
    }


    public function getNewSubscribersCurrentMonth()
    {
        $total_users = Booking::select(DB::raw("count(id) as data"))
            ->whereMonth('created_at', $this->month)
            ->get();

        return $total_users;
    }


    public function getNewSubscribersPastMonth()
    {
        $date = \Carbon\Carbon::now();
        $pastMonth = $date->subMonth()->format('m');

        $total_users = Booking::select(DB::raw("count(id) as data"))
            ->whereMonth('created_at', $pastMonth)
            ->get();

        return $total_users;
    }

    public function getNewSubscribersCurrentYear()
    {
        $total_users = Booking::select(DB::raw("count(id) as data"))
            ->whereYear('created_at', $this->year)
            ->get();

        return $total_users;
    }

    public function getRegisteredUsers()
    {
        $users = User::select(DB::raw("count(id) as data"), DB::raw("DAY(created_at) day"))
            ->whereMonth('created_at', $this->month)
            ->groupBy('day')
            ->orderBy('day')
            ->get()->toArray();

        $data = [];

        for ($i = 1; $i <= 31; $i++) {
            $data[$i] = 0;
        }

        foreach ($users as $row) {
            $month = $row['day'];
            $data[$month] = intval($row['data']);
        }

        return $data;
    }
}
