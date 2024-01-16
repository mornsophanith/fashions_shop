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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Slide Banner</a></li>
                  <li class="breadcrumb-item" aria-current="page">Banner Form</li>
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
                <h5>Create Slide Banner</h5>
              </div>
              <div class="card-body">
                <form method ="post" class="form-group" action="data-insert-slide-banner" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group">
                        <label class="form-label"><Title></Title>:</label>
                        <input type="text" class="form-control" placeholder="Title Banner" name="title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Widget:</label>
                        <input type="text" class="form-control" placeholder="Widget" name="widget">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price:</label>
                        <input type="file" class="form-control" name="image">
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