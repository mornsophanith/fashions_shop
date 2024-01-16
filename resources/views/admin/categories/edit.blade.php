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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Category</a></li>
                  <li class="breadcrumb-item" aria-current="page">Update Form</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Form Update Category</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Update Category</h5>
              </div>
              <div class="card-body">
                <form method="post" class="form-group" action="{{ url('data-update-category/'. $category->id)}}" enctype="multipart/form-data">
                    @csrf  
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label">Main Category:</label>
                        <input type="text" class="form-control" placeholder="Name Category" value="{{$category->name}}" name="name">
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