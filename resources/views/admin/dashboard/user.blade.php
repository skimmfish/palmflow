@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')


		  <!--Every page starts here-->
         
		 <div class="row">
			
			<!--navigation row-->
			
		 <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                  <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url({{ asset('img/1920x1080/img15.jpg') }} );"></div>
                    <!--/.bg-holder-->
                    <input class="d-none" id="upload-cover-image" type="file" /><label class="cover-image-file-input" for="upload-cover-image"><span class="fas fa-camera me-2"></span><span style="font-family:'Spartan','Brandon Grotesque';color:#fff">Change cover photo</span></label>
                  </div>
                  <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img src="{{ asset('img/'.Auth::user()->profile_img)}}" width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" /><input class="d-none" id="profile-image" type="file" /><label class="mb-0 overlay-icon d-flex flex-center" for="profile-image"><span class="bg-holder overlay overlay-0"></span><span class="z-index-1 text-white dark__text-white text-center fs--1"><span class="fas fa-camera"></span><span class="d-block" style="font-family:'Spartan','Brandon Grotesque';">Update</span></span></label></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="row g-0">
            <div class="col-lg-8 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Profile Settings</h5>
                </div>
                <div class="card-body bg-light">
                  <form class="row g-3" method="POST" action="{{ route('users.update') }}">
				  {{ csrf_field() }}
                    @foreach($profile as $p)
					<div class="col-lg-6"> 
					<label class="form-label" for="first-name">First Name</label>
					<input class="form-control" id="first-name" type="text" value="{{ $p->first_name }}" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="last-name">Last Name</label><input class="form-control" id="last-name" type="text" value="{{ $p->last_name }}" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email1">Email</label><input class="form-control" id="email1" type="email" value="{{ Auth::user()->email }}" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2">Phone</label><input class="form-control" id="email2" type="text" value="{{ $p->telephone }}" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2">Address</label><textarea class="form-control" id="address">{{$p->address}}</textarea></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2">City</label><input class="form-control" id="city" type="text" value="{{$p->city}}" /></div>
					<div class="col-lg-6"> <label class="form-label" for="email2">Province/State</label><input class="form-control" id="state" type="text" value="{{$p->state}}" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2">Country</label>
					<select class="form-control" id="country">
					@if($p->country===NULL) <option>Select your country</option> 

					<option>England</option>					
					<option>Nigeria</option>
					<option>Scotland</option>
					<option>Wales</option>
					<option>United States of America</option>
					@else
						<option selected value="{{$p->country}}">{{ucfirst($p->country)}}</option>
					@endif
					</select>
					</div>
                    <div class="col-12 d-flex justify-content-end"><button class="btn btn-primary" type="submit">Update </button></div>
                  
				  @endforeach
				  </form>
                </div>
              </div>
 
			  
			  
            </div>
            <div class="col-lg-4 ps-lg-2">
              <div class="sticky-sidebar">
                
                <div class="card mb-3">
                  <div class="card-header">
                    <h6 class="mb-0">Account Security Settings</h6>
                  </div>
                  <div class="card-body bg-light">
                    <h6>2-FA Authentication Setting</h6>
                    <form></form><a class="btn btn-falcon-default btn-sm" href="#!">Set your 2-Fa Token</a>
                  </div>
                  <div class="card-body bg-light border-top">
                    <h6>Wallet</h6>
                    <p class="fs-0"><small>You have not added any withdrawal wallet!</small></p><a class="btn btn-falcon-default btn-sm" href="#!">Add Wallet </a>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="mb-0">Change Password</h5>
                  </div>
                  <div class="card-body bg-light">
                    <form method="POST" action="">
                      <div class="mb-3"><label class="form-label" for="new-password">New Password</label><input class="form-control" id="new-password" type="password" /></div>
                      <div class="mb-3"><label class="form-label" for="confirm-password">Confirm Password</label><input class="form-control" id="confirm-password" type="password" /></div><button class="btn btn-primary d-block w-100" type="submit">Update Password </button>
                    </form>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h6 class="mb-0">Danger Zone</h6>
                  </div>
                  <div class="card-body bg-light">
                    <h5 class="fs-0">Delete this account</h5>
                    <p class="fs--1">Once you delete a account, there is no going back. Please be certain.</p><a class="btn btn-falcon-danger d-block" href="#!">Deactivate Account</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

		

@endsection