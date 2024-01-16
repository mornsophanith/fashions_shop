@extends('layouts.app')
@section('content')
    <section class="pc-container">
      <div class="pc-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb mb-3">
                  <li class="breadcrumb-item"><a href="../navigation/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Feature</a></li>
                  <li class="breadcrumb-item" aria-current="page">Feature Size Form</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Form Update Feature Size</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Update Feature Size</h5>
              </div>
              <div class="card-body">
                <form method ="post" class="form-group" action="{{ url('/data-update-feature/'. $feature_size->id)}}" enctype="multipart/form-data">
                    @csrf  
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label">Size:</label>
                        <input type="number" class="form-control" placeholder="Size" value="{{$feature_size->size}}" name="size">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Product ID:</label>
                        <select name="product_id" id="product_id" class="form-control">
                          <option value="">Select Product</option>
                          @foreach($products as $product)
                            <option value="{{$product->id}}" {{$feature_size->product_id == $product->id ? 'selected' : '' }}>{{$product->name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <button type="submit" value = "Add student" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection