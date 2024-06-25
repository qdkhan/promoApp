@extends('back-master')
@section('title', 'UC | Enterprises')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Layouts</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Supplier</li>
                <li class="breadcrumb-item active">Supplier</li>
            </ol>
            <a href="{{route('supplier.index')}}" class="btn btn-primary btn-sm"> Show List </a>
        </nav>
    </div>


    <section class="section">
        <cls="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Supplier Add</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="name" class="form-label">Supplier name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-6">
                                <label for="user_id" class="form-label">User Id<spans class="text-danger">*</spans></label>
                                <input type="text" class="form-control" id="user_id" name="user_id">
                            </div>
                            <div class="col-6">
                                <label for="password" class="form-label">Password<spans class="text-danger">*</spans></label>
                                <input type="password" class="form-control" id="password" placeholder="*********">
                            </div>
                            <div class="col-6">
                                <label for="invantory_endpoint" class="form-label">Inventory Endpoint<spans class="text-danger">*</spans></label>
                                <input type="url" class="form-control" name="inventory_endpoint" id="inventory_endpoint" placeholder="">
                            </div>
                            <div class="col-6">
                                <label for="po_endpoint" class="form-label">Po Endpoint<spans class="text-danger">*</spans></label>
                                <input type="url" class="form-control" name="po_endpoint" id="po_endpoint" placeholder="">
                            </div>
                            <div class="col-6">
                                <label for="order_shipment_endpoint" class="form-label">Order Shipment Endpoint<spans class="text-danger">*</spans></label>
                                <input type="url" class="form-control" id="order_shipment_endpoint" placeholder="">
                            </div>
                            <div class="col-6">
                                <label for="order_status_endpoint" class="form-label">Order Status Endpoint<spans class="text-danger">*</spans></label>
                                <input type="url" class="form-control" id="order_status_endpoint" placeholder="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
    </section>

    </div>
</main>

@endsection