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
                <li class="breadcrumb-item"><a href="javascript: void(0)">User Detail</a></li>
                <li class="breadcrumb-item" aria-current="page">View</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title header-bar">
                <a href="{{ route('admin.user')}}" class="btn btn-success"><i class='bx bx-left-arrow-alt'></i>Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body position-relative">
                        <div class="text-center mt-3">
                            <div class="chat-avtar d-inline-flex mx-auto">
                                <img class="rounded-circle img-fluid wid-60" src="{{ asset($user->image) }}"
                                alt="User image">
                            </div>
                            <h5 class="mb-0">{{$user->name}}</h5>
                            <p class="text-muted text-sm">{{$user->description}}</p>
                            <hr class="my-3 border border-secondary-subtle">
                            <div class="row g-3">
                                <div class="col-4">
                                    <h5 class="mb-0">{{$user->age}}</h5>
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
                                <i class='bx bx-envelope' style="margin-right: 5px;"></i>
                                <p class="mb-0">{{$user->email}}</p>
                            </div>
                            <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                <i class="bx bxs-phone" style="margin-right: 5px;"></i>
                                <p class="mb-0">+855 {{$user->phone}}</p>
                            </div>
                            <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                <i class="bx bxs-map" style="margin-right: 5px;"></i>
                                <p class="mb-0">{{$user->address}}</p>
                            </div>
                            <div class="d-inline-flex align-items-center justify-content-between w-100">
                                <i class="bx bx-link" style="margin-right: 5px;"></i>
                                <a href="#" class="link-primary">
                                    <p class="mb-0">{{$user->link}}</p>
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
                                    <h6 class="mb-0">{{$user->name}}</h6>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted">Father Name</p>
                                    <h6 class="mb-0">Mr. {{$user->father_name}}</h6>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted">Country</p>
                                    <h6 class="mb-0">{{$user->country}}</h6>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 text-muted">Zip Code</p>
                                    <h6 class="mb-0">{{$user->id_card}}</h6>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0 pb-0">
                                <p class="mb-1 text-muted">Address</p>
                                <h6 class="mb-0">{{$user->address}}</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>About me</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">{{$user->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection