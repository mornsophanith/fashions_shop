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
                  <li class="breadcrumb-item" aria-current="page">Feature Image Form</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Form Update Feature Image</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Update Feature Image</h5>
              </div>
              <div class="card-body">
                <form method ="post" class="form-group" action="{{ url('/data-update-feature-img/'. $feature_img->id)}}" enctype="multipart/form-data">
                    @csrf  
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label">Image:</label>
                        <input type="file" class="form-control" placeholder="Image" value="{{$feature_img->image}}" name="image">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Product ID:</label>
                        <select name="product_id" id="product_id" class="form-control">
                          <option value="">Select Product</option>
                          @foreach($products as $product)
                            <option value="{{$product->id}}" {{$feature_img->product_id == $product->id ? 'selected' : '' }}>{{$product->name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection