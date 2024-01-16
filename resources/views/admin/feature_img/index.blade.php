
@extends('layouts.app')
@section('content')
  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="../navigation/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Feature Image</a></li>
                <li class="breadcrumb-item" aria-current="page">Feature Image List</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Feature Image</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="card-body">
              <div class="text-end p-4 pb-0">
                <a href="#" class="btn btn-primary d-inline-flex align-item-center" data-bs-toggle="modal" data-bs-target="#customer-edit_add-modal">
                  <i class="bx bx-plus f-18"></i> Add New
                </a>
              </div>
              <div class="table-responsive">
                <div class="dataTable-wrapper dataTable-loading no-footer searchable fixed-columns">
                    <div class="dataTable-top">
                        <div class="dataTable-dropdown">
                            <label>
                                <select class="dataTable-selector">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select>
                                entries per page
                            </label>
                        </div>
                        <div class="dataTable-search">
                            <input class="dataTable-input" placeholder="Search..." type="text"/>
                        </div>
                    </div>
                    <div class="dataTable-container">
                        <table class="table table-hover dataTable-table" id="pc-dt-simple">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Product Id</th>
                                <th>Image</th>
                                <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($features_image as $feature_image)
                                  <tr>
                                    <td>{{$feature_image->id}}</td>
                                    <td>{{$feature_image->product_id}}</td>
                                    <td><img src="{{ asset($feature_image->image) }}" alt="blog center" style="width: 30px;height: auto;"></td>
                                    <td class="text-center">
                                        <ul class="list-inline me-auto mb-0">
                                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                                <a href="{{ url('/form-update-feature-img/'.$feature_image->id) }}" class="avtar avtar-xs btn-link-success btn-pc-default">
                                                <i class="bx bx-edit f-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                                <a href="{{ url('/delete-feature-img/'.$feature_image->id) }}" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                <i class="bx bxs-trash f-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                  </tr>
                              @endforeach
                            </tbody>
                            </table>
                    </div>
                    <div class="dataTable-bottom">
                        <div class="dataTable-info">Showing 1 to 10 entries</div>
                        <nav class="dataTable-pagination">
                            {{$feature_image->links()}}
                        </nav>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>

  <div class="modal fade" id="customer-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="mb-0">Add Feature Size</h5>
          <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
            <i class="bx bx-x f-20"></i>
          </a>
        </div>
        <form action="{{ route('insert.feature.img') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                      <label class="form-label">Product ID:</label>
                      <select name="product_id" id="product_id" class="form-control">
                        <option value="">Select Product</option>
                        @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                      </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Picture:</label>
                    <input type="file" class="form-control" placeholder="Picture" name="image">
                </div>
                
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <div class="flex-grow-1 text-end">
              <button type="button" class="btn btn-link-danger btn-pc-default" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
 @endsection