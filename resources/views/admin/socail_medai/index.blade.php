
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
                <li class="breadcrumb-item"><a href="javascript: void(0)">Social Media</a></li>
                <li class="breadcrumb-item" aria-current="page">Social Media List</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Social Media </h2>
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
                                <th>Facebook</th>
                                <th>Instargram</th>
                                <th>Linkin</th>
                                <th>Youtube</th>
                                <th>Line</th>
                                <th>Twiter</th>
                                <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($socials as $socials)
                                    <tr>
                                        <td>{{$socials->id}}</td>
                                        <td>{{$socials->facebook}}</td>
                                        <td>{{$socials->instargram}}</td>
                                        <td>{{$socials->linkin}}</td>
                                        <td>{{$socials->youtube}}</td>
                                        <td>{{$socials->line}}</td>
                                        <td>{{$socials->twiter}}</td>
                                        <td class="text-center">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                                    <a href="#" class="avtar avtar-xs btn-link-secondary btn-pc-default" data-bs-toggle="modal"
                                                    data-bs-target="#customer-modal">
                                                    <i class='bx bx-low-vision f-18' ></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                                    <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default" data-bs-toggle="modal"
                                                    data-bs-target="#customer-edit_add-modal">
                                                    <i class="bx bx-edit f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                                    <a href="{{ url('/delete-social/'.$socials->id) }}" class="avtar avtar-xs btn-link-danger btn-pc-default">
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
                        <div class="dataTable-info">Showing 1 to 5 of 9 entries</div>
                        <nav class="dataTable-pagination">
                            <ul class="dataTable-pagination-list">
                                <li class="active">
                                    <a href="#" data-page="1">1</a>
                                </li>
                                <li class="">
                                    <a href="#" data-page="2">2</a>
                                </li>
                                <li class="pager">
                                    <a href="#" data-page="2"><i class='bx bx-chevron-right' ></i></a>
                                </li>
                            </ul>
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

  <div class="modal fade" id="customer-modal" data-bs-keyboard="false" tabindex="-1" 
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <h5 class="mb-0">Customer Details</h5>
          <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
            <i class="ti ti-x f-20"></i>
          </a>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body position-relative">
                  <div class="position-absolute end-0 top-0 p-3">
                    <span class="badge bg-primary">Single</span>
                  </div>
                  <div class="text-center mt-3">
                    <div class="chat-avtar d-inline-flex mx-auto">
                      <img class="rounded-circle img-fluid wid-60" src="../assets/images/user/avatar-5.jpg"
                        alt="User image">
                    </div>
                    <h5 class="mb-0">Aaron Poole</h5>
                    <p class="text-muted text-sm">Manufacturing Director</p>
                    <hr class="my-3 border border-secondary-subtle">
                    <div class="row g-3">
                      <div class="col-4">
                        <h5 class="mb-0">45</h5>
                        <small class="text-muted">Age</small>
                      </div>
                      <div class="col-4 border border-top-0 border-bottom-0">
                        <h5 class="mb-0">86%</h5>
                        <small class="text-muted">Progress</small>
                      </div>
                      <div class="col-4">
                        <h5 class="mb-0">7634</h5>
                        <small class="text-muted">Visits</small>
                      </div>
                    </div>
                    <hr class="my-3 border border-secondary-subtle">
                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                      <i class="ti ti-mail"></i>
                      <p class="mb-0">bo@gmail.com</p>
                    </div>
                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                      <i class="ti ti-phone"></i>
                      <p class="mb-0">+1 (247) 849-6968</p>
                    </div>
                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                      <i class="ti ti-map-pin"></i>
                      <p class="mb-0">Lesotho</p>
                    </div>
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                      <i class="ti ti-link"></i>
                      <a href="#" class="link-primary">
                        <p class="mb-0">https://anshan.dh.url</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h5>Personal Details</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0 pt-0">
                      <div class="row">
                        <div class="col-md-6">
                          <p class="mb-1 text-muted">Full Name</p>
                          <h6 class="mb-0">Aaron Poole</h6>
                        </div>
                        <div class="col-md-6">
                          <p class="mb-1 text-muted">Father Name</p>
                          <h6 class="mb-0">Mr. Ralph Sabatini</h6>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="row">
                        <div class="col-md-6">
                          <p class="mb-1 text-muted">Country</p>
                          <h6 class="mb-0">Lesotho</h6>
                        </div>
                        <div class="col-md-6">
                          <p class="mb-1 text-muted">Zip Code</p>
                          <h6 class="mb-0">247 849</h6>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0 pb-0">
                      <p class="mb-1 text-muted">Address</p>
                      <h6 class="mb-0">507 Sulnek Grove, Tudzovgeh, United States - 37173</h6>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>About me</h5>
                </div>
                <div class="card-body">
                  <p class="mb-0">Hello, I’m Aaron Poole Manufacturing Director based in international company, Void
                    jiidki me na fep juih ced gihhiwi launke cu mig tujum peodpo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="customer-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="mb-0">Add Social</h5>
          <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
            <i class="bx bx-x f-20"></i>
          </a>
        </div>
        <form action="{{ route('insert.social') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <label class="form-label">Facebook</label>
                      <input type="text" class="form-control" placeholder="Facebook" name="name">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Instargram</label>
                      <input type="text" class="form-control" placeholder="Instargram" name="instargram">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Youtube</label>
                      <input type="text" class="form-control" placeholder="Youtube" name="youtube">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Twiter</label>
                      <input type="text" class="form-control" placeholder="Twiter" name="twiter">
                  </div>
                  <div class="form-group">
                      <label class="form-label">LinkIn</label>
                      <input type="text" class="form-control" placeholder="Linkin" name="linkin">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Line</label>
                      <input type="text" class="form-control" placeholder="Line" name="line">
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