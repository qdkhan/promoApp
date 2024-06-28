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
                <li class="breadcrumb-item active">Add</li>
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
                        <form class="row g-3" method="post" action="{{route('supplier.store')}}">
                            @csrf
                            <div class="col-6">
                                <label for="name" class="form-label">Supplier name<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email<spans class="text-danger">*</spans></label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="tolerance" class="form-label">Tolerance for PO<spans class="text-danger">*
                                    </spans></label>
                                {{-- <input type="text" class="form-control" id="tolerance" name="tolerance"> --}}
                                <select class="form-control" name="tolerance">
                                    <option value=''>-- Select --</option>
                                    <option value='AllowOverrun' @if(old ('tolerance') =='AllowOverrun') selected @endif>AllowOverrun</option>
                                        <option value='AllowUnderrun' @if(old('tolerance') == 'AllowUnderrun') selected @endif>AllowUnderrun</option>
                                        <option value='AllowOverrunOrUnderrun' @if(old ('tolerance') == 'AllowOverrunOrUnderrun') selected @endif>AllowOverrunOrUnderrun</option>
                                        <option value='ExactOnly' @if(old ('tolerance') == 'ExactOnly') selected @endif>ExactOnly</option>
                                </select>
                                @error('tolerance')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="carrier" class="form-label">Carrier name<spans class="text-danger">*</spans>
                                </label>
                                <input type="carrier" class="form-control" id="carrier" name="carrier">
                                @error('carrier')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="service" class="form-label">Service name<spans class="text-danger">*</spans>
                                </label>
                                <input type="service" class="form-control" id="service" name="service">
                                @error('service')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="api_key" class="form-label">User Id<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="api_key" name="api_key">
                                @error('api_key')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="password" class="form-label">Password<spans class="text-danger">*</spans>
                                </label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="*********">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inventory_endpoint" class="form-label">Inventory Endpoint<spans
                                        class="text-danger">*</spans></label>
                                <input type="url" class="form-control" name="inventory_endpoint" id="inventory_endpoint"
                                    placeholder="">
                                @error('inventory_endpoint')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="po_endpoint" class="form-label">Po Endpoint<spans class="text-danger">*
                                    </spans></label>
                                <input type="url" class="form-control" name="po_endpoint" id="po_endpoint"
                                    placeholder="">
                                @error('po_endpoint')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="shipment_endpoint" class="form-label">Order Shipment Endpoint<spans
                                        class="text-danger">*</spans></label>
                                <input type="url" class="form-control" id="shipment_endpoint" name="shipment_endpoint" placeholder="">
                                @error('shipment_endpoint')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="order_status_endpoint" class="form-label">Order Status Endpoint<spans
                                        class="text-danger">*</spans></label>
                                <input type="url" class="form-control" id="order_status_endpoint" name="order_status_endpoint" placeholder="">
                                @error('order_status_endpoint')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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