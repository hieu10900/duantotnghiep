<?php

namespace App\Services\Statistics;

use App\Models\Booking;
use App\Models\User;
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

    public function getTotalPaymentsCurrentMonth()
    {
        $payments = Booking::select(DB::raw("sum(phone) as data"))
            ->whereMonth('created_at', $this->month)
            ->get();

        return $payments;
    }

    public function getTotalPaymentsPastMonth()
    {
        $date = \Carbon\Carbon::now();
        $pastMonth = $date->subMonth()->format('m');

        $payments = Booking::select(DB::raw("sum(phone) as data"))
            ->whereMonth('created_at', $pastMonth)
            ->get();

        return $payments;
    }
    public function getTotalPaymentsCurrentYear()
    {
        $payments = Booking::select(DB::raw("sum(phone) as data"))
            ->whereYear('created_at', $this->year)
            ->get();

        return $payments;
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
}
