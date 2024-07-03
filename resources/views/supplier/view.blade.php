@extends('back-master')
@section('title', 'UC | Enterprises')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Layouts</h1>
        <nav class="d-flex align-items-center justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Supplier</li>
                <li class="breadcrumb-item active">View</li>
            </ol>
            <a href="{{route('supplier.index')}}" class="btn btn-primary btn-sm"> Show List </a>
        </nav>
    </div>


    <section class="section">
        <cls="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Supplier Detail</h5>

                        <!-- Vertical Form -->
                        <span class="row g-3">
                            @csrf
                            <div class="col-6">
                                <label for="name" class="form-label">Supplier name
                                </label>
                                <input type="text" class="form-control" value={{$data->name}} disabled>

                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" value={{$data->email}} disabled>

                            </div>
                            <div class="col-6">
                                <label for="tolerance" class="form-label">Tolerance for PO</label>
                                <input type="text" class="form-control" value={{$data->tolerance}} disabled>
                            </div>
                            <div class="col-6">
                                <label for="carrier" class="form-label">Carrier name
                                </label>
                                <input type="carrier" class="form-control" value={{$data->carrier}} disabled>

                            </div>
                            <div class="col-6">
                                <label for="service" class="form-label">Service name
                                </label>
                                <input type="service" class="form-control" value={{$data->service}} disabled>

                            </div>
                            <div class="col-6">
                                <label for="api_key" class="form-label">User Id
                                </label>
                                <input type="text" class="form-control" value={{$data->api_key}} disabled>
                                
                            </div>
                            <div class="col-6">
                                <label for="password" class="form-label">Password
                                </label>
                                <input type="text" class="form-control" value={{$data->password}} disabled>
                                
                            </div>
                            
                            <div class="col-6">
                                <label for="inventory_endpoint" class="form-label">Inventory Endpoint</label>
                                <input type="url" class="form-control" value={{$data->inventory_endpoint}} disabled>
                            </div>
                            <div class="col-6">
                                <label for="po_endpoint" class="form-label">Po Endpoint</label>
                                <input type="url" class="form-control" value={{$data->po_endpoint}} disabled>
                            </div>
                            <div class="col-6">
                                <label for="shipment_endpoint" class="form-label">Order Shipment Endpoint</label>
                                <input type="url" class="form-control" value={{$data->shipment_endpoint}} disabled>
                            </div>
                            <div class="col-6">
                                <label for="order_status_endpoint" class="form-label">Order Status Endpoint</label>
                                <input type="url" class="form-control" value={{$data->order_status_endpoint}} disabled>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
    </section>
    </div>
</main>

@endsection