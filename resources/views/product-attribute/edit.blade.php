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
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <a href="{{route('product_attribute.index')}}" class="btn btn-primary btn-sm"> Show List </a>
        </nav>
    </div>


    <section class="section">
        <cls="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Attribute update</h5>
                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="{{route('product_attribute.update', $productAttribute->id)}}">
                            @csrf
                            @Method('PUT')
                            <div class="col-6">
                                <label for="product_id" class="form-label">Choose Product<spans class="text-danger">*
                                    </spans></label>
                                <select class="form-control" name="product_id" required>
                                    <option value=''>-- Select Product--</option>
                                    @foreach($products as $product)
                                        <option value={{$product->id}} @if($productAttribute->product_id == $product->id) selected @endif>{{$product->name}}</option>
                                    @endforeach   
                                </select>
                                @error('product_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="part_id" class="form-label">Part Id<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="part_id" name="part_id" value="{{$productAttribute->part_id}}" required>
                                @error('part_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="size" class="form-label">Size<spans class="text-danger">*</spans></label>
                                <input type="text" class="form-control" id="size" name="size" value="{{$productAttribute->size}}" required>
                                @error('size')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="color" class="form-label">Color<spans class="text-danger">*</spans>
                                </label>
                                <input type="text" class="form-control" id="color" name="color" value="{{$productAttribute->color}}" required>
                                @error('color')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="quantity" class="form-label">Quantity<spans class="text-danger">*</spans>
                                </label>
                                <input type="number" min="0" step="1.0" class="form-control" id="quantity" name="quantity" value="{{$productAttribute->quantity}}" required>
                                @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
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