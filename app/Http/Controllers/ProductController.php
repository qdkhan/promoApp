<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('supplier')->get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('product.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $validate = Validator::make($request->all(), [
            'name'              => 'required',
            'supplier_id'       => 'required|numeric',
            'product_sku'       => 'required|'
        ]);

        if($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        $data = $request->all();
        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with('supplier')->find($id);
        return view('product.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        $suppliers = Supplier::all();
        $product = Product::find($id);
        return view('product.edit', compact('product', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validate = Validator::make($request->all(), [
            'name'              => 'required',
            'supplier_id'       => 'required|numeric',
            'product_sku'       => 'required'
        ]);

        if($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
        
        $data = $request->all();
        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('supplier.index')->with('success', 'Product deleted successfully.');
    }
}
