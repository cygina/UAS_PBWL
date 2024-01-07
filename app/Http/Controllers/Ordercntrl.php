<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Produk;

class Ordercntrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Order::all();
        return view('order.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = Customer::all();
        $produk = Produk::all();
        return view ('order.create' , compact('customer','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create([
            'id_order'  => $request->id_order,
            'id_customer'  => $request->id_customer,
            'id_produk'  => $request->id_produk,
            'quantity'  => $request->quantity,
            'orderdate'  => $request->orderdate,
        ]);

        return redirect('order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = order::find($id);
        $customer = Customer::all();
        $produk = Produk::all();
        return view('order.edit', compact('row', 'customer','produk')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Order::findOrFail($id);

        $row->update([
            'id_order'  => $request->id_order,
            'id_customer'  => $request->id_customer,
            'id_produk'  => $request->id_produk,
            'quantity'  => $request->quantity,
            'orderdate'  => $request->orderdate,
        ]);

        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Order::findOrFail($id);

        $row->delete();

        return redirect('order');
    }
}
