@extends('layouts.master-login')
@section('master')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form form-n-child" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title p-b-43">
                    Please Signup Your Account
                </span>

                <div class="d-flex">
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" style="margin-right: 12px">
                        <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Name</span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="father_name" type="text" class="input100 @error('father_name') is-invalid @enderror" name="father_name" value="{{ old('father_name') }}" required autocomplete="father_name" autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Father Name</span>
                        @error('father_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex">
                    <div class="wrap-input100 validate-input" style="margin-right: 12px">
                        <select name="country" class="form-register form-control input100" id="country">
                            <option class="input100" value="0" label="Select a country" selected="selected">Select a country</option>
                            <optgroup id="country-optgroup-Asia" label="Asia">
                                <option class="input100" value="AF" label="Afghanistan">Afghanistan</option>
                                <option class="input100" value="AM" label="Armenia" >Armenia</option>
                                <option class="input100" value="AZ" label="Azerbaijan" >Azerbaijan</option>
                                <option class="input100" value="BH" label="Bahrain" >Bahrain</option>
                                <option class="input100" value="BD" label="Bangladesh" >Bangladesh</option>
                                <option class="input100" value="BT" label="Bhutan" >Bhutan</option>
                                <option class="input100" value="BN" label="Brunei" >Brunei</option>
                                <option class="input100" value="KH" label="Cambodia" >Cambodia</option>
                                <option class="input100" value="CN" label="China" >China</option>
                                <option class="input100" value="GE" label="Georgia" >Georgia</option>
                                <option class="input100" value="HK" label="Hong Kong SAR China" >Hong Kong SAR China</option>
                                <option class="input100" value="IN" label="India" >India</option>
                                <option class="input100" value="ID" label="Indonesia" >Indonesia</option>
                                <option class="input100" value="IR" label="Iran" >Iran</option>
                                <option class="input100" value="IQ" label="Iraq" >Iraq</option>
                                <option class="input100" value="IL" label="Israel" >Israel</option>
                                <option class="input100" value="JP" label="Japan" >Japan</option>
                                <option class="input100" value="JO" label="Jordan" >Jordan</option>
                                <option class="input100" value="KZ" label="Kazakhstan" >Kazakhstan</option>
                                <option class="input100" value="KW" label="Kuwait" >Kuwait</option>
                                <option class="input100" value="KG" label="Kyrgyzstan" >Kyrgyzstan</option>
                                <option class="input100" value="LA" label="Laos" >Laos</option>
                                <option class="input100" value="LB" label="Lebanon" >Lebanon</option>
                                <option class="input100" value="MO" label="Macau SAR China" >Macau SAR China</option>
                                <option class="input100" value="MY" label="Malaysia" >Malaysia</option>
                                <option class="input100" value="MV" label="Maldives" >Maldives</option>
                                <option class="input100" value="MN" label="Mongolia" >Mongolia</option>
                                <option class="input100" value="MM" label="Myanmar [Burma]" >Myanmar [Burma]</option>
                                <option class="input100" value="NP" label="Nepal" >Nepal</option>
                                <option class="input100" value="NT" label="Neutral Zone" >Neutral Zone</option>
                                <option class="input100" value="KP" label="North Korea" >North Korea</option>
                                <option class="input100" value="OM" label="Oman" >Oman</option>
                                <option class="input100" value="PK" label="Pakistan" >Pakistan</option>
                                <option class="input100" value="PS" label="Palestinian Territories" >Palestinian Territories</option>
                                <option class="input100" value="YD" label="People's Democratic Republic of Yemen" >People's Democratic Republic of Yemen</option>
                                <option class="input100" value="PH" label="Philippines" >Philippines</option>
                                <option class="input100" value="QA" label="Qatar" >Qatar</option>
                                <option class="input100" value="SA" label="Saudi Arabia" >Saudi Arabia</option>
                                <option class="input100" value="SG" label="Singapore" >Singapore</option>
                                <option class="input100" value="KR" label="South Korea" >South Korea</option>
                                <option class="input100" value="LK" label="Sri Lanka" >Sri Lanka</option>
                                <option class="input100" value="SY" label="Syria" >Syria</option>
                                <option class="input100" value="TW" label="Taiwan" >Taiwan</option>
                                <option class="input100" value="TJ" label="Tajikistan" >Tajikistan</option>
                                <option class="input100" value="TH" label="Thailand" >Thailand</option>
                                <option class="input100" value="TL" label="Timor-Leste" >Timor-Leste</option>
                                <option class="input100" value="TR" label="Turkey" >Turkey</option>
                                <option class="input100" value="TM" label="Turkmenistan" >Turkmenistan</option>
                                <option class="input100" value="AE" label="United Arab Emirates" >United Arab Emirates</option>
                                <option class="input100" value="UZ" label="Uzbekistan" >Uzbekistan</option>
                                <option class="input100" value="VN" label="Vietnam" >Vietnam</option>
                                <option class="input100" value="YE" label="Yemen" >Yemen</option>
                            </optgroup>
                        </select>
                        <span class="focus-input100"></span>
                        <!-- <span class="label-input100">Country</span> -->
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="wrap-input100 validate-input" data-validate="Password is required" style="margin-right: 12px">
                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Confirm Password</span>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="wrap-input100 validate-input" style="margin-right: 12px">
                        <input id="age" type="text" class="input100 @error('age') is-invalid @enderror" name="age">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Age</span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input id="link" type="text" class="input100" name="link">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Link</span>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="wrap-input100 validate-input" style="margin-right: 12px">
                        <input id="address" type="address" class="input100 @error('address') is-invalid @enderror" name="address">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Address</span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input id="description" type="text" class="input100" name="description">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Description</span>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="wrap-input100 validate-input" style="margin-right: 12px">
                        <input id="phone" type="phone" class="input100 @error('phone') is-invalid @enderror" name="phone">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Phone</span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input id="id_card" type="text" class="input100" name="id_card">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Id Card</span>
                    </div>
                </div>
                

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>
                <div class="text-center p-t-46 p-b-20">
                    <span class="txt2">
                        or signin here <a href="{{ route('login') }}">{{ ('Sign in') }}</a>
                    </span>
                </div>
            </form>

            <div class="login100-more login100-more-child" style="background-image: url('../assets_login/login_images/bg-01.jpg');"></div>
        </div>
    </div>
</div>
@endsection
