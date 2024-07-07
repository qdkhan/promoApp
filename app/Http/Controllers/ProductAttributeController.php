<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productAttributes = ProductAttribute::with('product')->get();
        return view('product-attribute.index', compact('productAttributes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::select('id', 'name')->get();
        return view('product-attribute.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'product_id'    => 'required',
            'part_id'       => 'required',
            'size'          => 'required',
            'color'         => 'required',
            'quantity'      => 'required',
        ]);

        if($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();

        $supplier_id = Product::find($request->product_id)->value('supplier_id');
        $data = $request->all();
        $data['supplier_id'] = $supplier_id;

        ProductAttribute::create($data);
        return redirect()->route('product_attribute.index')->with('success', 'Product attribute added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productAttribute = ProductAttribute::with('product', 'supplier')->find($id);
        return view('product-attribute.view', compact('productAttribute')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::select('id', 'name')->get();
        $productAttribute = ProductAttribute::with('product', 'supplier')->find($id);
        return view('product-attribute.edit', compact('products', 'productAttribute')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductAttribute $productAttribute)
    {
        $validate = Validator::make($request->all(), [
            'product_id'    => 'required',
            'part_id'       => 'required',
            'size'          => 'required',
            'color'         => 'required',
            'quantity'      => 'required',
        ]);

        if($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();

        $supplier_id = Product::find($request->product_id)->value('supplier_id');
        $data = $request->all();
        $data['supplier_id'] = $supplier_id;

        $productAttribute->update($data);
        return redirect()->route('product_attribute.index')->with('success', 'Product attribute updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductAttribute $productAttribute)
    {
        $productAttribute->delete();
        return redirect()->route('product_attribute.index')->with('success', 'Product attribute deletedsuccessfully.');
    }
}
