@extends('layouts.app')
@section('content')
  <section class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="../navigation/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Category</a></li>
                <li class="breadcrumb-item" aria-current="page">Sub Table</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <a href="{{ route('admin.insert.sub_category')}}" class="btn btn-success">Add New</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ basic-table ] start -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Sub Category Table</h5>
            </div>
            <div class="card-body table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Sub Category Name</th>
                      <th>Main Category Name</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sub_categories as $sub_category)
                      <tr>
                        <td>{{$sub_category->id}}</td>
                        <td>{{$sub_category->name}}</td>
                        <td>{{$sub_category->main_category}}</td>
                        <td>
                          <div class="ms-auto">
                            <ul class="list-unstyled" style="margin: 0;font-size: 22px;">
                                <li class="dropdown pc-h-item">
                                    <a
                                        class="pc-head-link dropdown-toggle arrow-none me-0"
                                        data-bs-toggle="dropdown"
                                        href="#"
                                        role="button"
                                        aria-haspopup="false"
                                        aria-expanded="false"
                                    >
                                        <svg class="pc-icon">
                                          <i class='bx bx-dots-horizontal-rounded'></i>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                                        <a href="{{ url('/form-edit-sub-category/'.$sub_category->id) }}" class="dropdown-item n-child-item" onclick="#">
                                          <svg class="pc-icon">
                                            <i class='bx bx-edit-alt' ></i>
                                          </svg>
                                          <span>Edit</span>
                                        </a>
                                        <a href="{{ url('/form-edit-sub-category/'.$sub_category->id) }}" class="dropdown-item n-child-item">
                                          <svg class="pc-icon">
                                            <i class='bx bx-trash'></i>
                                          </svg>
                                          <span>Delete</span>
                                        </a>
                                        
                                    </div>
                                </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- [ basic-table ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </section>
  <!-- [ Main Content ] end -->
@endsection