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
                <li class="breadcrumb-item active">View</li>
            </ol>
            <a href="{{route('product.index')}}" class="btn btn-primary btn-sm"> Show List </a>
        </nav>
    </div>


    <section class="section">
        <cls="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Detail</h5>

                        <!-- Vertical Form -->
                        <span class="row g-3">
                            <div class="col-12">
                                <label for="name" class="form-label">Product name
                                </label>
                                <input type="text" class="form-control" value={{$product->name}} disabled>

                            </div>
                            <div class="col-12">
                                <label for="text" class="form-label">Supplier</label>
                                <input type="text" class="form-control" value={{$product->supplier->name}} disabled>

                            </div>
                            <div class="col-12">
                                <label for="tolerance" class="form-label">Product SKU</label>
                                <input type="text" class="form-control" value={{$product->product_sku}} disabled>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
    </section>
    </div>
</main>

@endsection