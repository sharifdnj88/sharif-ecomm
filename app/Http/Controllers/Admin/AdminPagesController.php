<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    // Login Page Show
    public function ShowLoginPage()
    {
        return view('pages.login');
    }

    // Dashboard Page Show
    public function ShowDashboard()
    {
        $total_product=Post::all()->count();
        $total_order=Order::all()->count();
        $total_custom=Customer::all()->count();

        $order=Order::all();
        $total_revenue=0;
        foreach($order as $order)
        {
            $total_revenue=$total_revenue+$order->sprice;
        }

        $total_delivered=Order::where('delivery_status', 'Delivered') ->get() ->count();
        $total_processing=Order::where('delivery_status', 'processing') ->get() ->count();

        return view('pages.dashboard', compact('total_product', 'total_order', 'total_custom', 'total_revenue', 'total_delivered', 'total_processing'));
    }

    public function ShowOtpPage()
    {
        return view('pages.otp');
    }

   
}
