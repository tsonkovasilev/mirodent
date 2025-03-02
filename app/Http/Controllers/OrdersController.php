<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function index() {
        $orders = Orders::orderBy("created_at","desc")->get();
        return view('orders.index',["orders"=>$orders]);
    } 
    
    public function view($id) {
        $order = Orders::findOrFail($id);
        return view('orders.view',["order"=>$order]);
    }
    
    public function create() {
        return view('orders.create');
    }


}
