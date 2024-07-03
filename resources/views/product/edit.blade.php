@extends('back-master')
@section('title', 'UC | Enterprises')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Layouts</h1>
        <nav class="d-flex align-items-center justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active">Update</li>
            </ol>
            <a href="{{route('product.index')}}" class="btn btn-primary btn-sm"> Show List </a>
        </nav>
    </div>

    <section class="section">
        <cls="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Update</h5>

                        <form class="row g-3" method="post" action="{{route('product.update', $product->id)}}">
                            @csrf
                            @Method('PUT')
                            <div class="col-12">
                                <label for="name" class="form-label">Product name<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="supplier_id" class="form-label">Supplier<spans class="text-danger">*
                                    </spans></label>
                                <select class="form-control" name="supplier_id" id="supplier_id" required>
                                    <option value=''>-- Select --</option>
                                    @foreach($suppliers as $supplier)
                                        <option value="{{$supplier->id}}" @if($supplier->id == $product->supplier_id) selected @endif>{{$supplier->name}}</option>
                                    @endforeach
                                </select>
                                @error('supplier_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="product_sku" class="form-label">Product Sku<spans class="text-danger">*</spans></label>
                                <input type="text" class="form-control" id="product_sku" name="product_sku" value="{{$product->product_sku}}" required>
                                @error('product_sku')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    </div>
</main>
@endsection