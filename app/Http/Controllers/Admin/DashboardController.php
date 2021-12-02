<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Statistics\BookingService;
use App\Services\Statistics\RegistrationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Gate::denies('View_Admin')) {
            abort(403);
        }
        $year = $request->input('year', date('Y'));
        $month = $request->input('month', date('m'));

        $registration = new RegistrationService($year, $month);
        $payment = new BookingService($year, $month);

        $total_data_monthly = [
            'new_users_current_month' => $registration->getNewUsersCurrentMonth(),
            'new_users_past_month' => $registration->getNewUsersPastMonth(),
            'new_subscribers_current_month' => $registration->getNewSubscribersCurrentMonth(),
            'new_subscribers_past_month' => $registration->getNewSubscribersPastMonth(),
            'income_current_month' => $payment->getTotalPaymentsCurrentMonth(),
            'income_past_month' => $payment->getTotalPaymentsPastMonth(),
        ];

        $total_data_yearly = [
            'total_new_users' => $registration->getNewUsersCurrentYear(),
            'total_new_subscribers' => $registration->getNewSubscribersCurrentYear(),
            'total_income' => $payment->getTotalPaymentsCurrentYear(),
        ];

        $chart_data['total_new_users'] = json_encode($registration->getAllUsers());
        $chart_data['monthly_new_users'] = json_encode($registration->getRegisteredUsers());
        
        return view('/admin/dashboard/index', compact('total_data_monthly', 'total_data_yearly', 'chart_data'));
    }
}
