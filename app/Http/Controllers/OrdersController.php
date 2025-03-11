<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Service;
use App\Models\Status;

class OrdersController extends Controller
{
    public function index() {
        $orders = Orders::with("status")->orderBy("created_at","desc")->paginate(10);
        return view('orders.index',["orders"=>$orders]);
    } 
    
    public function view($id) {
        $order = Orders::with('status')->findOrFail($id);
        return view('orders.view',["order"=>$order]);
    }
    
    public function create() {
        $services = Service::all();
        $statuses = Status::all();
        return view('orders.create',['services'=>$services,'statuses'=>$statuses]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'string|max:255',
            'status_id' => 'required|exists:statuses,id',
            'service_id' => 'required|exists:services,id',
            'viewed' => '',
        ]);
        
        Orders::create($data);
        return redirect()->route('orders.index')->with('success','Order Created');    
    }

    public function delete(orders $order) {
        $order->delete();
        return redirect()->route('orders.index')->with('success','Order Deleted'); 
    }
}
