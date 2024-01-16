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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Sub Category</a></li>
                  <li class="breadcrumb-item" aria-current="page">Sub Category Form</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Form Create Sub Category</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Create New Sub Category</h5>
              </div>
              <div class="card-body">
                <form method ="post" class="form-group" action="dataInsertSubCategory" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group">
                        <label class="form-label">Main Category:</label>
                        <select name="main_category" id="main_category" class="form-control" required>
                        <option value="">Select Main Category</option>
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Sub Category:</label>
                        <input type="text" class="form-control" placeholder="Sub Category" name="sub_category">
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