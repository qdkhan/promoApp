<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'                      => 'required',
            'email'                     => 'required',
            'tolerance'                 => 'required',
            'carrier'                   => 'required',
            'service'                   => 'required',
            'api_key'                   => 'required',
            'password'                  => 'required',
            'inventory_endpoint'        => 'required|url',
            'po_endpoint'               => 'required|url',
            'shipment_endpoint'         => 'required|url',
            'order_status_endpoint'     => 'required|url',
        ]);

        if($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        $data = $request->all();
        Supplier::create($data);

        return redirect()->route('supplier.index')->with('success', 'Supplier Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    { 
        $data = Supplier::find($id);
        return view('supplier.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Supplier::find($id);
        return view('supplier.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $validate = Validator::make($request->all(), [
            'name'                      => 'required',
            'email'                     => 'required',
            'tolerance'                 => 'required',
            'carrier'                   => 'required',
            'service'                   => 'required',
            'api_key'                   => 'required',
            'password'                  => 'required',
            'inventory_endpoint'        => 'required|url',
            'po_endpoint'               => 'required|url',
            'shipment_endpoint'         => 'required|url',
            'order_status_endpoint'     => 'required|url',
        ]);

        if($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        $data = $request->all();
        $supplier->update($data);
        return redirect()->route('supplier.index')->with('success', 'Supplier updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success', 'Supplier deleted successfully.');
    }
}
