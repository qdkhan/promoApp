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
        <h1>General Tables</h1>
        <nav class="d-flex align-items-center justify-content-between">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
            </ol>
            <a href="{{route('supplier.create')}}" class="btn btn-sm btn-primary"><i class="ri-add-circle-line"></i> Add Supplier</a>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Supplier List</h5>
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Inventory Endpoint</th>
                                    <th scope="col">Po Endpoint</th>
                                    <th scope="col">Order Shipment Endpoint</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($suppliers as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->inventory_endpoint}}</td>
                                    <td>{{$data->po_endpoint}}</td>
                                    <td>{{$data->shipment_endpoint}}</td>
                                    <td>
                                        <a href="{{route('supplier.edit', $data->id)}}" class="btn btn-sm btn-primary">Edit </a>
                                        <form action="{{ route('supplier.destroy', $data->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                        <a href="{{route('supplier.show', $data->id)}}" class="btn btn-sm btn-success">View</a>
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