@extends('back-master')
@section('title', 'UC | Enterprises')
@section('content')
<main id="main" class="main">
    @if(session()->has("success"))
        <div class="alert alert-success alert-dismissible fade show fw-bold mt-2" role="alert">
            {{session("success")}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
        </div>
    @endif

    @if(session()->has("deleted"))
        <div class="alert alert-danger alert-dismissible fade show fw-bold mt-2" role="alert">
            {{session("deleted")}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
        </div>
    @endif

    <div class="pagetitle">
        <nav class="d-flex align-items-center justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
            </ol>
            <a href="{{route('product.create')}}" class="btn btn-sm btn-primary"><i class="ri-add-circle-line"></i> Add Product</a>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <!-- Primary Color Bordered Table -->
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Product SKU</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->supplier->name}}</td>
                                        <td>{{$product->product_sku}}</td>
                                        <td>
                                            <a href="{{route('product.edit', $product->id)}}"
                                                class="btn btn-sm btn-primary">Edit </a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                            <a href="{{route('product.show', $product->id)}}"
                                                class="btn btn-sm btn-success">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection