<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    public function UserOrder()
    {
        $orders = Order::latest()->get();
        return view('pages.order.index',[
            'orders'            =>$orders,
            'form_type'        =>'create'
        ]);
    }

    public function UserDelivered($id)
    {
        $order = Order::find($id);
        $order->delivery_status='Delivered';
        $order->payment_status='Paid';
        $order->save();

        return redirect() ->back();
    }

    public function UserPrintPdf($id)
    {
        $order=Order::find($id);
        $pdf=Pdf::loadView('pages.pdf.index',compact('order'));
        return $pdf->download('Order_details.pdf');


    }

    public function UserDelete($id)
    {
        $order=Order::find($id);
        $order->delete();
        return back() ->with('success', 'Order data delete successfully');
    }

    public function SendEmail($id)
    {
        $order=Order::find($id);
        return view('pages.orderemail.index', compact('order'));
    }

    public function SendUserEmail(Request $request,$id)
    {
        $order=Order::find($id);
        
        $details = [
            'uname'=>$request->uname,
            'message'=>$request->message,
            'pnane'=>$request->pnane,
            'pid'=>$request->pid,
            'pquantity'=>$request->pquantity,
            'pprice'=>$request->pprice,
            'dcharge'=>$request->dcharge,
            'tprice'=>$request->tprice,
            'pnote'=>$request->pnote,
        ];

        Notification::send($order, new OrderNotification($details));
        return back() ->with('success', 'Order data send successfully');

    }

    public function OrderCount()
    {
        $ordercount = Order::where('user_id', Auth::guard('Customer') ->user()->id)->count();
        return response() ->json(['count' => $ordercount]);
    }



}
