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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Product</a></li>
                  <li class="breadcrumb-item" aria-current="page">Products Form</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Form Create Products</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Create New Product</h5>
              </div>
              <div class="card-body">
                <form method ="post" class="form-group" action="insert-product" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group">
                        <label class="form-label">Name Product:</label>
                        <input type="text" class="form-control" placeholder="Name Product" name="name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Picture:</label>
                        <input type="file" class="form-control" placeholder="Picture" name="image">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price:</label>
                        <input type="number" class="form-control" placeholder="Price" name="price" step="any">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category:</label>
                        <select name="category" id="category" class="form-control" required>
                        <option value="">Select Category</option>
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Type Product:</label>
                      <select name="type" id="type" class="form-control" required>
                        <option value="">Select Type</option>
                        <option value="item">Item</option>
                        <option value="offer">Offer</option>
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