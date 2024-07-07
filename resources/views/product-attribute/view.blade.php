@extends('back-master')
@section('title', 'UC | Enterprises')
@section('content')
<main id="main" class="main">
    
    <div class="pagetitle">
        <h1>Form Layouts</h1>
        <nav class="d-flex align-items-center justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Product Attribute</li>
                <li class="breadcrumb-item active">View</li>
            </ol>
            <a href="{{route('product_attribute.index')}}" class="btn btn-primary btn-sm"> Show List </a>
        </nav>
    </div>


    <section class="section">
        <cls="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Attribute view</h5>
                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="{{route('product_attribute.update', $productAttribute->id)}}">
                            @csrf
                            @Method('PUT')
                            <div class="col-6">
                                <label for="product_name" class="form-label">Product name<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="product_name" name="product_name" value="{{$productAttribute->product->name}}" disabled>
                                
                            </div>
                            <div class="col-6">
                                <label for="supplier_name" class="form-label">Supplier name<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="{{$productAttribute->supplier->name}}" disabled>
                               
                            </div>
                            <div class="col-6">
                                <label for="part_id" class="form-label">Part Id<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="part_id" name="part_id" value="{{$productAttribute->part_id}}" disabled>
                                
                            </div>
                            <div class="col-6">
                                <label for="size" class="form-label">Size<spans class="text-danger">*</spans></label>
                                <input type="text" class="form-control" id="size" name="size" value="{{$productAttribute->size}}" disabled>
                                
                            </div>
                            <div class="col-6">
                                <label for="color" class="form-label">Color<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="color" name="color" value="{{$productAttribute->color}}" disabled>
                                
                            </div>
                            <div class="col-6">
                                <label for="quantity" class="form-label">Quantity<spans class="text-danger">*</spans>
                                </label>
                                <input type="number" min="0" step="1.0" class="form-control" id="quantity" name="quantity" value="{{$productAttribute->quantity}}" disabled>
                                
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>
    </section>

    </div>
</main>

@endsection