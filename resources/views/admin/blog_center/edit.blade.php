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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Blog Center</a></li>
                  <li class="breadcrumb-item" aria-current="page">Blog Center Form</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Form Update Blog Center</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Update Blog Center</h5>
              </div>
              <div class="card-body">
                <form method ="post" class="form-group" action="{{ url('/data-update-blog_center/'. $blog_center->id)}}" enctype="multipart/form-data">
                    @csrf  
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label">Title:</label>
                        <input type="text" class="form-control" placeholder="Title" value="{{$blog_center->name}}" name="name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Sub Title</label>
                        <input type="text" class="form-control" placeholder="Sub Title" value="{{$blog_center->sub_title}}" name="sub_title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Picture:</label>
                        <input type="file" class="form-control" placeholder="Picture" value="{{$blog_center->image}}" name="image">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price:</label>
                        <input type="number" class="form-control" placeholder="Price" value="{{$blog_center->price}}" name="price">
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