@extends('back-master')
@section('title', 'UC | Enterprises')
@section('content')
    <main id="main" class="main">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show fw-bold mt-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" title="Close"></button>
            </div>
        @endif

        @if (session()->has('deleted'))
            <div class="alert alert-danger alert-dismissible fade show fw-bold mt-2" role="alert">
                {{ session('deleted') }}
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
                <button id="collectAttrId" class="btn btn-sm btn-warning"><i class="ri-add-circle-line"></i>Check
                    Availability</button>
                <a href="{{ route('product_attribute.create') }}" class="btn btn-sm btn-primary"><i
                        class="ri-add-circle-line"></i> Add Attribute</a>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Product Attribute List</h5>
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Supplier Name</th>
                                        <th scope="col">Part Id</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productAttributes as $data)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input attr-detail" type="checkbox"
                                                        data-part_id="{{ $data->part_id }}"
                                                        data-product_id="{{ $data->product->id }}"
                                                        data-supplier_id="{{ $data->supplier->id }}">
                                                </div>
                                            </td>
                                            <td>{{ $data->product->name }}</td>
                                            <td>{{ $data->supplier->name }}</td>
                                            <td>{{ $data->part_id }}</td>
                                            <td>{{ $data->size }}</td>
                                            <td>{{ $data->color }}</td>
                                            <td>{{ $data->quantity }}</td>
                                            <td>
                                                <a href="{{ route('product_attribute.edit', $data->id) }}"
                                                    class="btn btn-sm btn-primary">Edit </a>
                                                <form action="{{ route('product_attribute.destroy', $data->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                                <a href="{{ route('product_attribute.show', $data->id) }}"
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

    <script>
        // $(document).ready(function () {
        //     $('#collectAttrId').click(function () {
        //         var partId = [];
        //         var productId = '';
        //         var supplierId = '';
        //         var csrfToken = $('meta[name="csrf-token"]').attr('content');

        //         $('.attr-detail').each(function () {
        //             productId = $(this).attr('data-product_id');
        //             supplierId = $(this).attr('data-supplier_id');
        //             partId.push($(this).attr('data-part_id'));
        //         });

        //         $.ajax({
        //             url : "{{ route('inventoryAvailability') }}",
        //             method: 'POST',
        //             headers: {
        //                 'X-CSRF-TOKEN': csrfToken
        //             },
        //             data: { partId: JSON.stringify(partId), supplierId: supplierId, productId: productId},
        //             success: function(data) {
        //                 console.log(data)
        //             },
        //             error: function(xhr) {
        //                 console.error(xhr.responseText);
        //             }

        //         })
        //     })
        // });

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('collectAttrId').addEventListener('click', function() {
                var partId = [];
                var productId = '';
                var supplierId = '';
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                document.querySelectorAll('.attr-detail').forEach(function(element) {
                    productId = element.getAttribute('data-product_id');
                    supplierId = element.getAttribute('data-supplier_id');
                    partId.push(element.getAttribute('data-part_id'));
                });

                fetch('{{ route('inventoryAvailability') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            partId: partId,
                            supplierId: supplierId,
                            productId: productId
                        })
                    })
                    .then(response => response.json())
                    .then(data => console.log(data))
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
@endsection
