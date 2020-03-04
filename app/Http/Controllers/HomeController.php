<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliveryorder;
use App\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('clientChild');
    }

    public function download_file()
    {

        $deliveryorders = Deliveryorder::join('order','deliveryorder.order_id','=','order.order_id')
            ->select('deliveryorder.*', 'order.ran_order_id')
            ->orderBy('order_id','DESC')
            ->paginate(15);

        // $deliveryorders = Deliveryorder::paginate(5);
        return view ('downloadFile',compact('deliveryorders'));
    }


    public function error()
    {
        return view('pages.error');
    }

    
}
