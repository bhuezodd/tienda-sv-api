<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    public function getOrders(Request $request){
            $id = auth()->user()->id; 
            $orders = Order::where('user_id',$id)->orderBy('created_at')->get();
            return response();
    }
}
