@extends('layouts.login_layout')
@section('content')

<!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="flex-grow-1">
    <!-- Form -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-dark" style="background-image: url(assets/svg/components/card-17.svg);">
          <div class="flex-grow-1 p-5">
            <!-- Blockquote -->
            <figure class="text-center">

              <div class="mb-4">
                <img class="avatar avatar-xl avatar-4x3" src="{{ asset('img/floxpool_white_logo.png') }}" alt="Logo">
              </div>

              <blockquote class="blockquote blockquote-light">“Sometimes the best thing to do is to reset and start all over again! There is so much more on the other side...”</blockquote>

              <figcaption class="blockquote-footer blockquote-light">
                <div class="mb-3">
                  <img class="avatar avatar-circle" src="{{ asset('img/160x160/img9.jpg') }}" alt="CEO PalmFlow">
                </div>

                Emmanuel Olabiyi
                <span class="blockquote-footer-source">CEO | PalmFlow</span>
              </figcaption>        
            </figure>
            <!-- End Blockquote -->

           
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-7 col-xl-8 d-flex justify-content-center align-items-center min-vh-lg-100">
          <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
            <!-- Heading -->
            <div class="text-center mb-5 mb-md-7">
              <h1 class="h3">Welcome to PalmFlow</h1>
              <p>To reset your password, kindly supply the following information</p>
            </div>
            <!-- End Heading -->

            <!-- Form -->
            <form class="" method="POST" action="{{route('password.request') }}">
              {{ csrf_field() }}
              
			   <input type="hidden" name="token" value="{{ $token }}">

			  <!-- Form -->
			  
			  <div class="mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupEmail">Your e-mail</label>
                <input type="email" class="form-control form-control-lg shrink_form_control" name="email" id="signupModalFormSignupEmail" value="{{ $email or old('email') }}" placeholder="Your registered e-mail" aria-label="email" required>
                <span class="invalid-feedback">Please enter your registered email address.</span>
              
			  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
			  
			  </div>
              <!-- End Form -->
				
              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupPassword">Password</label>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                  <input type="password" class="js-toggle-password form-control form-control-lg shrink_form_control" name="password" style="height:30px;" 
				  id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="6+ characters required" required
                          data-hs-toggle-password-options='{
                             "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                             "defaultClass": "bi-eye-slash",
                             "showClass": "bi-eye",
                             "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                           }'>
                  <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                    <i class="js-toggle-passowrd-show-icon-1 bi-eye"></i>
                  </a>
				  
				   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>

                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                  <input type="password" class="js-toggle-password form-control form-control-lg shrink_form_control" name="password_confirmation" id="signupModalFormSignupConfirmPassword" 
				  placeholder="6+ characters required" style="height:35px;"
				  aria-label="6+ characters required" required
                         data-hs-validation-equal-field="#signupModalFormSignupPassword"
                          data-hs-toggle-password-options='{
                           "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                         }'>
                   <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
                    <i class="js-toggle-passowrd-show-icon-2 bi-eye"></i>
                  </a>
                </div>

                <span class="invalid-feedback">Password does not match the confirm password.</span>
				
				@if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Reset Password</button>
              </div>

              <div class="text-center">
                <p>Already have an account? <a class="link" href="{{ route('login') }}">Log in here</a></p>
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
