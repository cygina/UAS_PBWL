<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Customercntrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Customer::all();
        return view ('customer.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create([
            'id_customer'  => $request->id_customer,
            'nama'  => $request->nama,
            'alamat'  => $request->alamat,
        ]);
        return redirect('customer');
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
        $row = customer::find($id);
        return view('customer.edit', compact('row')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Customer::findOrFail($id);

        $row->update([
            'id_customer'  => $request->id_customer,
            'nama'  => $request->nama,
            'alamat'  => $request->alamat,
        ]);

        return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Customer::findOrFail($id);

        $row->delete();

        return redirect('customer');
    }
}
