<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Status;
use App\Models\User;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $orders = Order::get();
        return view('orders.index',['orders'=>$orders]);
    }

    public function create()
    {
        $users = User::all();
        $statuses = Status::all();
        return view('orders.create', ['users'=>$users, 'statuses'=>$statuses]);

    }

    public function store(Request $request)
    {

        $orders = Order::create([
            'name' => $request->name,
            'price' => $request->price,
            'user_id'=> $request->user_id,
             'date' => $request-> date,
            'status_id' => $request-> status_id,
        ]);
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $order = Order::find($order->id);
        return view ('orders.edit', ['order'=>$order]);
    }

    public function update(Request $request, Order $order)
    {

        $order = Order::find($order->id);
        $order->name = $request->name;
        $order->price = $request->price;
        $order->user_id = $request->user_id;
        $order->date = $request->date;
        $order->status_id = $request->status_id;


        $order->save();

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order = Order::find($order->id);
        $order->delete();
        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        $order = Order::find($order->id);
        return view('orders.show', ['order'=>$order]);
    }


}
