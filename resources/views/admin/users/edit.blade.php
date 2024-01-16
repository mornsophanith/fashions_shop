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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">User</a></li>
                  <li class="breadcrumb-item" aria-current="page">User Form</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Form Update User</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5>Update User</h5>
              </div>
              <div class="card-body">
                <form action="{{ url('/dataUpdateUser/'. $user->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" placeholder="Name" defaultValue="{{$user->image}}" name="image">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" value="{{$user->name}}" name="name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Father Name</label>
                            <input type="text" class="form-control" placeholder="Father Name" value="{{$user->father}}" name="father_name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" placeholder="Age" value="{{$user->age}}" name="age">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Email" value="{{$user->email}}" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" value="{{$user->password}}" name="password">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Id Card</label>
                            <input type="text" class="form-control" placeholder="Id Card" value="{{$user->id_card}}" name="id_card">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control" placeholder="Link" value="{{$user->link}}" name="link">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" id="status">
                              <option>Select Status</option>
                              <option value="1" {{$user->is_admin == '1' ? 'selected' : ''}}>Admin</option>
                              <option value="0" {{$user->is_admin == '0' ? 'selected' : ''}}>Web Front</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" rows="3" placeholder="Address" name="address">{{$user->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Description" name="description">{{$user->description}}</textarea>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Phone</label>
                          <input type="text" class="form-control" placeholder="Phone" value="{{$user->phone}}" name="phone">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Country</label>
                          <select name="country" class="form-control" id="country">
                            <option value="0" label="Select a country" selected="selected">Select a country</option>
                            <optgroup id="country-optgroup-Asia" label="Asia">
                                <option value="AF" label="Afghanistan" {{$user->country == 'AF' ? 'selected' : ''}}>Afghanistan</option>
                                <option value="AM" label="Armenia" {{$user->country == 'AM' ? 'selected' : ''}}>Armenia</option>
                                <option value="AZ" label="Azerbaijan" {{$user->country == 'AZ' ? 'selected' : ''}}>Azerbaijan</option>
                                <option value="BH" label="Bahrain" {{$user->country == 'BH' ? 'selected' : ''}}>Bahrain</option>
                                <option value="BD" label="Bangladesh" {{$user->country == 'BD' ? 'selected' : ''}}>Bangladesh</option>
                                <option value="BT" label="Bhutan" {{$user->country == 'BT' ? 'selected' : ''}}>Bhutan</option>
                                <option value="BN" label="Brunei" {{$user->country == 'BN' ? 'selected' : ''}}>Brunei</option>
                                <option value="KH" label="Cambodia" {{$user->country == 'KH' ? 'selected' : ''}}>Cambodia</option>
                                <option value="CN" label="China" {{$user->country == 'CN' ? 'selected' : ''}}>China</option>
                                <option value="GE" label="Georgia" {{$user->country == 'GE' ? 'selected' : ''}}>Georgia</option>
                                <option value="HK" label="Hong Kong SAR China" {{$user->country == 'HK' ? 'selected' : ''}}>Hong Kong SAR China</option>
                                <option value="IN" label="India" {{$user->country == 'IN' ? 'selected' : ''}}>India</option>
                                <option value="ID" label="Indonesia" {{$user->country == 'ID' ? 'selected' : ''}}>Indonesia</option>
                                <option value="IR" label="Iran" {{$user->country == 'IR' ? 'selected' : ''}}>Iran</option>
                                <option value="IQ" label="Iraq" {{$user->country == 'IQ' ? 'selected' : ''}}>Iraq</option>
                                <option value="IL" label="Israel" {{$user->country == 'IL' ? 'selected' : ''}}>Israel</option>
                                <option value="JP" label="Japan" {{$user->country == 'JP' ? 'selected' : ''}}>Japan</option>
                                <option value="JO" label="Jordan" {{$user->country == 'JO' ? 'selected' : ''}}>Jordan</option>
                                <option value="KZ" label="Kazakhstan" {{$user->country == 'KZ' ? 'selected' : ''}}>Kazakhstan</option>
                                <option value="KW" label="Kuwait" {{$user->country == 'KW' ? 'selected' : ''}}>Kuwait</option>
                                <option value="KG" label="Kyrgyzstan" {{$user->country == 'KG' ? 'selected' : ''}}>Kyrgyzstan</option>
                                <option value="LA" label="Laos" {{$user->country == 'LA' ? 'selected' : ''}}>Laos</option>
                                <option value="LB" label="Lebanon" {{$user->country == 'LB' ? 'selected' : ''}}>Lebanon</option>
                                <option value="MO" label="Macau SAR China" {{$user->country == 'MO' ? 'selected' : ''}}>Macau SAR China</option>
                                <option value="MY" label="Malaysia" {{$user->country == 'MY' ? 'selected' : ''}}>Malaysia</option>
                                <option value="MV" label="Maldives" {{$user->country == 'MV' ? 'selected' : ''}}>Maldives</option>
                                <option value="MN" label="Mongolia" {{$user->country == 'MN' ? 'selected' : ''}}>Mongolia</option>
                                <option value="MM" label="Myanmar [Burma]" {{$user->country == 'MM' ? 'selected' : ''}}>Myanmar [Burma]</option>
                                <option value="NP" label="Nepal" {{$user->country == 'NP' ? 'selected' : ''}}>Nepal</option>
                                <option value="NT" label="Neutral Zone" {{$user->country == 'NT' ? 'selected' : ''}}>Neutral Zone</option>
                                <option value="KP" label="North Korea" {{$user->country == 'KP' ? 'selected' : ''}}>North Korea</option>
                                <option value="OM" label="Oman" {{$user->country == 'OM' ? 'selected' : ''}}>Oman</option>
                                <option value="PK" label="Pakistan" {{$user->country == 'PK' ? 'selected' : ''}}>Pakistan</option>
                                <option value="PS" label="Palestinian Territories" {{$user->country == 'PS' ? 'selected' : ''}}>Palestinian Territories</option>
                                <option value="YD" label="People's Democratic Republic of Yemen" {{$user->country == 'YD' ? 'selected' : ''}}>People's Democratic Republic of Yemen</option>
                                <option value="PH" label="Philippines" {{$user->country == 'PH' ? 'selected' : ''}}>Philippines</option>
                                <option value="QA" label="Qatar" {{$user->country == 'QA' ? 'selected' : ''}}>Qatar</option>
                                <option value="SA" label="Saudi Arabia" {{$user->country == 'SA' ? 'selected' : ''}}>Saudi Arabia</option>
                                <option value="SG" label="Singapore" {{$user->country == 'SG' ? 'selected' : ''}}>Singapore</option>
                                <option value="KR" label="South Korea" {{$user->country == 'KR' ? 'selected' : ''}}>South Korea</option>
                                <option value="LK" label="Sri Lanka" {{$user->country == 'LK' ? 'selected' : ''}}>Sri Lanka</option>
                                <option value="SY" label="Syria" {{$user->country == 'SY' ? 'selected' : ''}}>Syria</option>
                                <option value="TW" label="Taiwan" {{$user->country == 'TW' ? 'selected' : ''}}>Taiwan</option>
                                <option value="TJ" label="Tajikistan" {{$user->country == 'TJ' ? 'selected' : ''}}>Tajikistan</option>
                                <option value="TH" label="Thailand" {{$user->country == 'TH' ? 'selected' : ''}}>Thailand</option>
                                <option value="TL" label="Timor-Leste" {{$user->country == 'TL' ? 'selected' : ''}}>Timor-Leste</option>
                                <option value="TR" label="Turkey" {{$user->country == 'TR' ? 'selected' : ''}}>Turkey</option>
                                <option value="TM" label="Turkmenistan" {{$user->country == 'TM' ? 'selected' : ''}}>Turkmenistan</option>
                                <option value="AE" label="United Arab Emirates" {{$user->country == 'AE' ? 'selected' : ''}}>United Arab Emirates</option>
                                <option value="UZ" label="Uzbekistan" {{$user->country == 'UZ' ? 'selected' : ''}}>Uzbekistan</option>
                                <option value="VN" label="Vietnam" {{$user->country == 'VN' ? 'selected' : ''}}>Vietnam</option>
                                <option value="YE" label="Yemen" {{$user->country == 'YE' ? 'selected' : ''}}>Yemen</option>
                            </optgroup>
                          </select>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between" style="padding: 0 20px 20px;">
                    <div class="flex-grow-1 text-end">
                      <button type="button" class="btn btn-link-danger btn-pc-default" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection