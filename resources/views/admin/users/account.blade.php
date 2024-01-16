@extends('layouts.app')
@section('content')

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    @if(Session::has('success'))
        <div class="alert alert-success" id="timeoutMessage">
            {{ Session::get('success') }}
        </div>

        <script>
          setTimeout(function() {
            timeoutMessage = document.getElementById('timeoutMessage');
            timeoutMessage.style.display = 'none';
            timeoutMessage.style.position = 'absolute';
            timeoutMessage.style.width = '100%';
            timeoutMessage.style.transition = '1s';
          }, 3000); 
      </script>
    @endif
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="../navigation/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Users</a></li>
                <li class="breadcrumb-item" aria-current="page">Account Profile</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Account Profile</h2>
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
          <div class="card">
            <div class="card-body py-0">
              <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a style="border: none" class="nav-link active" id="profile-tab-1" data-bs-toggle="tab" href="#profile-1" role="tab"
                    aria-selected="true">
                    <i class="bx bxs-user me-2"></i>Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-2" data-bs-toggle="tab" href="#profile-2" role="tab"
                    aria-selected="true">
                    <i class="bx bx-file me-2"></i>Personal Details
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-3" data-bs-toggle="tab" href="#profile-3" role="tab"
                    aria-selected="true">
                    <i class="bx bxs-user-account me-2"></i>My Account
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-4" data-bs-toggle="tab" href="#profile-4" role="tab"
                    aria-selected="true">
                    <i class="bx bx-lock-alt me-2"></i>Change Password
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-5" data-bs-toggle="tab" href="#profile-5" role="tab"
                    aria-selected="true">
                    <i class="bx bx-user-plus me-2"></i>Role
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div class="tab-pane show active" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
              <div class="row">
                <div class="col-lg-4 col-xxl-3">
                  <div class="card">
                    <div class="card-body position-relative">
                      <div class="text-center mt-3">
                        <div class="chat-avtar d-inline-flex mx-auto">
                          <img class="rounded-circle img-fluid wid-70" src="{{Auth::user()->image}}"
                            alt="User image">
                        </div>
                        <h5 class="mb-0">{{Auth::user()->name}}</h5>
                        <p class="text-muted text-sm">{{Auth::user()->description}}</p>
                        <hr class="my-3 border border-secondary-subtle">
                        <div class="row g-3">
                          <div class="col-4">
                            <h5 class="mb-0">{{Auth::user()->age}}</h5>
                            <small class="text-muted">Age</small>
                          </div>
                          <div class="col-4 border border-top-0 border-bottom-0">
                            <h5 class="mb-0">40</h5>
                            <small class="text-muted">Project</small>
                          </div>
                          <div class="col-4">
                            <h5 class="mb-0">4.5K</h5>
                            <small class="text-muted">Members</small>
                          </div>
                        </div>
                        <hr class="my-3 border border-secondary-subtle">
                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3">
                          <i class="bx bx-envelope me-2"></i>
                          <p class="mb-0">{{Auth::user()->email}}</p>
                        </div>
                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3">
                          <i class="bx bx-phone me-2"></i>
                          <p class="mb-0">(+855) {{Auth::user()->phone}}</p>
                        </div>
                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3">
                          <i class="bx bxs-map me-2"></i>
                          <p class="mb-0">{{Auth::user()->country}}</p>
                        </div>
                        <div class="d-inline-flex align-items-center justify-content-start w-100">
                          <i class="bx bx-link-alt me-2"></i>
                          <a href="#" class="link-primary">
                            <p class="mb-0">{{Auth::user()->link}}</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-xxl-9">
                  <div class="card">
                    <div class="card-header">
                      <h5>About me</h5>
                    </div>
                    <div class="card-body">
                      <p class="mb-0">{{Auth::user()->description}}</p>
                    </div>
                  </div>
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
                              <p class="mb-0">{{Auth::user()->name}}</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Father Name</p>
                              <p class="mb-0">Mr. {{Auth::user()->father_name}}</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Phone</p>
                              <p class="mb-0">(+855) {{Auth::user()->phone}}</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Country</p>
                              <p class="mb-0">{{Auth::user()->country}}</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Email</p>
                              <p class="mb-0">{{Auth::user()->email}}</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Id Code</p>
                              <p class="mb-0">{{Auth::user()->id_card}}</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <p class="mb-1 text-muted">Address</p>
                          <p class="mb-0">{{Auth::user()->address}}</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
              <form action="{{ url('/update-data-personal/'. Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h5>Personal Information</h5>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-12 text-center mb-3">
                            <div class="user-upload wid-75">
                              <img src="{{Auth::user()->image}}" alt="img" class="img-fluid">
                              <label for="uplfile" class="img-avtar-upload">
                                <i class="bx bx-camera f-24 mb-1"></i>
                                <span>Upload</span>
                              </label>
                              <input type="file" id="uplfile" class="d-none" name="image">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-label">Full Name</label>
                              <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-label">Age</label>
                              <input type="text" class="form-control" value="{{Auth::user()->age}}" name="age">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-label">Country</label>
                              <input type="text" class="form-control" value="{{Auth::user()->country}}" name="country">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-label">Zip code</label>
                              <input type="text" class="form-control" value="{{Auth::user()->id_card}}" name="id_card">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label class="form-label">Bio</label>
                              <textarea class="form-control" name="description">{{Auth::user()->description}}</textarea>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h5>Contact Information</h5>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-label">Contact Phone</label>
                              <input type="text" class="form-control" value="{{Auth::user()->phone}}" name="phone">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-label">Email <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" value="{{Auth::user()->email}}" name="email">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label class="form-label">Portfolio Url</label>
                              <input type="text" class="form-control" value="{{Auth::user()->link}}" name="link">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label class="form-label">Address</label>
                              <textarea class="form-control" name="address">{{Auth::user()->address}}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 text-end btn-page">
                    <button class="btn btn-outline-secondary">Cancel</button>
                    <button class="btn btn-primary" type="submit">Update Profile</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>General Settings</h5>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{Auth::user()->name}}">
                            <small class="form-text text-muted">Your Profile URL:{{Auth::user()->link}}</small>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Account Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{Auth::user()->email}}">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Language</label>
                            <select class="form-control">
                              <option {{Auth::user()->link == 'kh'? 'selected' : ''}}>Cambodia</option>
                              <option>Washington</option>
                              <option>India</option>
                              <option>Africa</option>
                              <option>New York</option>
                              <option>Malaysia</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Sign in Using</label>
                            <select class="form-control">
                              <option>Password</option>
                              <option>Face Recognition</option>
                              <option>Thumb Impression</option>
                              <option>Key</option>
                              <option>Pin</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Advance Settings</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Secure Browsing</p>
                              <p class="text-muted text-sm mb-0">Browsing Securely ( https ) when it's necessary</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Login Notifications</p>
                              <p class="text-muted text-sm mb-0">Notify when login attempted from other place</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Login Approvals</p>
                              <p class="text-muted text-sm mb-0">Approvals is not required when login from
                                unrecognized devices.</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Recognized Devices</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Celt Desktop</p>
                              <p class="mb-0 text-muted">4351 Deans Lane</p>
                            </div>
                            <div class="">
                              <div class="text-success d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Current Active
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Imco Tablet</p>
                              <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                            </div>
                            <div class="">
                              <div class="text-muted d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Active 5 days ago
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Albs Mobile</p>
                              <p class="mb-0 text-muted">3462 Fairfax Drive</p>
                            </div>
                            <div class="">
                              <div class="text-muted d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Active 1 month ago
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Active Sessions</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Celt Desktop</p>
                              <p class="mb-0 text-muted">4351 Deans Lane</p>
                            </div>
                            <button class="btn btn-link-danger">Logout</button>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Moon Tablet</p>
                              <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                            </div>
                            <button class="btn btn-link-danger">Logout</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-end">
                  <button class="btn btn-outline-dark ms-2">Clear</button>
                  <button class="btn btn-primary">Update Profile</button>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
              <div class="card">
                <div class="card-header">
                  <h5>Change Password</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">Old Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <h5>New password must contain:</h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bx bx-check-circle f-16 me-2"></i> At least 8
                          characters</li>
                        <li class="list-group-item"><i class="bx bx-check-circle f-16 me-2"></i> At least 1
                          lower letter (a-z)</li>
                        <li class="list-group-item"><i class="bx bx-check-circle f-16 me-2"></i> At least 1
                          uppercase letter(A-Z)</li>
                        <li class="list-group-item"><i class="bx bx-check-circle f-16 me-2"></i> At least 1
                          number (0-9)</li>
                        <li class="list-group-item"><i class="bx bx-check-circle f-16 me-2"></i> At least 1
                          special characters</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end btn-page">
                  <div class="btn btn-outline-secondary">Cancel</div>
                  <div class="btn btn-primary">Update Profile</div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile-5" role="tabpanel" aria-labelledby="profile-tab-5">
              <div class="card">
                <div class="card-header">
                  <h5>Team Members</h5>
                </div>
                <div class="card-body">
                  <h4>{{$count_member}} <small>members available in your plan.</small></h4>
                  <hr class="my-3">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="row">
                          <div class="col">
                            <input type="email" class="form-control">
                          </div>
                          <div class="col-auto">
                            <button class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-card">
                  <div class="table-responsive">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th>MEMBER</th>
                          <th>ROLE</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user) 
                          <tr>
                            <td>
                              <div class="row">
                                <div class="col-auto pe-0">
                                  <img src="{{$user->image}}" alt="user-image"
                                    class="wid-40 hei-40 rounded-circle">
                                </div>
                                <div class="col">
                                  <h5 class="mb-0">{{$user->name}}</h5>
                                  <p class="text-muted f-12 mb-0">{{$user->email}}</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              @if ($user->is_admin == 1) 
                                <span class="badge bg-primary">Admin</span> 
                              @else
                                <span class="badge bg-light-warning">Staff</span>
                              @endif
                            </td>
                            <td class="text-end">
                              <a href="#" class="avtar avtar-s btn-link-secondary"><i class='bx bx-dots-vertical-rounded f-18'></i></a>
                            </td>
                          </tr>
                        @endforeach
                        <!-- <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="../assets/images/user/avatar-4.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-info">Manager</span></td>
                          <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a> <span
                              class="badge bg-light-success">Invited</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="../assets/images/user/avatar-5.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-warning">Staff</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Addie Bass</h5>
                                <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-primary">Owner</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="../assets/images/user/avatar-4.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-info">Manager</span></td>
                          <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a> <span
                              class="badge bg-light-success">Invited</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="../assets/images/user/avatar-5.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-warning">Staff</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Addie Bass</h5>
                                <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-primary">Owner</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="../assets/images/user/avatar-4.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-info">Manager</span></td>
                          <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a> <span
                              class="badge bg-light-success">Invited</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="../assets/images/user/avatar-5.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-warning">Staff</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer text-end btn-page">
                  <div class="btn btn-link-danger">Cancel</div>
                  <div class="btn btn-primary">Update Profile</div>
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
  <!-- [ Main Content ] end -->
@endsection