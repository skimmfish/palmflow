@extends('layouts.login_layout')
@section('content')

 <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="flex-grow-1">
    <!-- Form -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-dark" 
		style="background-image: url({{asset('svg/components/card-17.svg')}});">
          <div class="flex-grow-1 p-5">
            <!-- Blockquote -->
            <figure class="text-center">
              <div class="mb-4">
                <img class="avatar avatar-xl avatar-4x3" src="{{ asset('img/floxpool_white_logo.png') }}" alt="Logo">
              </div>

              <blockquote class="blockquote blockquote-light">“ Contribute to humanity even in small measures”</blockquote>

              <figcaption class="blockquote-footer blockquote-light">
                <div class="mb-3">
                  <a href=""><img class="avatar avatar-circle" src="{{ asset('img/160x160/img9.jpg')}}" alt="CEO"></a>
                </div>

                Emmanuel Olabiyi
                <span class="blockquote-footer-source">CEO | BalmFlow</span>
              </figcaption>        
            </figure>
            <!-- End Blockquote -->

            <!-- Clients -->
            <div class="position-absolute start-0 end-0 bottom-0 text-center p-5">
              <div class="row justify-content-center">
                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{ asset('svg/brands/fitbit-white.svg') }}" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{ asset('svg/brands/business-insider-white.svg') }}" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{ asset('svg/brands/capsule-white.svg') }}" alt="Logo">
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Clients -->
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-7 col-xl-8 d-flex justify-content-center align-items-center min-vh-lg-100">
          <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
            <!-- Heading -->
            <div class="text-center mb-5 mb-md-7">
              <h1 class="h2">Welcome back</h1>
              <p>Login to access your account</p>
			  <br/>
              <p><!--flash message comes here-->
			  
			    <div class="container"> @if (session('message'))   <div class="alert alert-info">  {{ session('message') }}</div>@endif</div>
         
			  </p>
            </div>
            <!-- End Heading -->

            <!-- Form -->
            <form class="" method="POST" action="{{ route('login') }}" >
			{{ csrf_field() }}

              <!-- Form -->
              <div class="mb-4 form-group{{ $errors->has('username') ? ' has-error' : '' }}"">
                <label class="form-label" for="signupModalFormLoginUsername">Your username</label>
                <input type="text" class="form-control form-control-lg" name="username" id="signupModalFormLoginUsername" placeholder="Username" value="{{ old('username') }}" aria-label="Username" required />
                <span class="invalid-feedback">Please enter your username <br/>
				
				
						@if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
				
				</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                  <a class="form-label-link" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                  <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="Enter your password" aria-label="" required minlength="8"
                        data-hs-toggle-password-options='{
                         "target": "#changePassTarget",
                         "defaultClass": "bi-eye-slash",
                         "showClass": "bi-eye",
                         "classChangeTarget": "#changePassIcon"
                       }'>
                  <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
                    <i id="changePassIcon" class="bi-eye"></i>
                  </a>
                </div>

                <span class="invalid-feedback">Please enter a valid password.</span>
				
				@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				
              </div>
				<label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
              <!-- End Form -->


              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Log in</button>
              </div>

              <div class="text-center">
                <p>Don't have an account yet? <a class="link" href="{{ route('register') }}">Sign up here</a></p>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->


@endsection
