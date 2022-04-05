<!-- ========== FOOTER ========== -->
  <footer class="container content-space-2 content-space-t-lg-3">
    <!-- Links -->
    <div class="row mb-10">
      <div class="col-md-3 mb-5 mb-md-0">
        <div class="mb-4">
          <h5>Get our mobile app</h5>
        </div>

        <div class="d-flex gap-3">          
          <a class="btn btn-dark btn-icon rounded-circle" href="#">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M11.76,6.69a.52.52,0,0,1-.59-.52,4.37,4.37,0,0,1,1-2.61A4.82,4.82,0,0,1,14.64,2a.51.51,0,0,1,.63.51,4.66,4.66,0,0,1-1,2.63A4.07,4.07,0,0,1,11.76,6.69Zm5.42,5.82c0-2.72,2-3.33,2-3.92s-1.73-1.91-3.56-1.91-2.54.86-3.78.86-2.25-.86-3.79-.86A5.16,5.16,0,0,0,3.89,9.21,6.64,6.64,0,0,0,3,12.75C3,17.14,6.15,22,8.47,22c1.3,0,1.63-.85,3.42-.85S14,22,15.22,22c2.52,0,4.62-5,4.62-5.07a.51.51,0,0,0-.3-.46A4.44,4.44,0,0,1,17.18,12.51Z"/>
            </svg>
          </a>

          <a class="btn btn-dark btn-icon rounded-circle" href="#">
            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M16.6,15.7l5-2.9c0.2-0.1,0.4-0.4,0.4-0.6v-0.3c0-0.3-0.1-0.5-0.4-0.6l-5-2.9L13.3,12L16.6,15.7z M12.5,11.1l3-3.4L4.4,1.1
                C4.2,1,4,1,3.8,1.1L12.5,11.1z M12.5,13L3.8,23c0.2,0.1,0.4,0.1,0.6,0l11.1-6.5L12.5,13z M3,2.1v19.8l8.7-9.9L3,2.1z"/>
            </svg>
          </a>
        </div>
      </div>
<div class="col-sm-4 col-md-3 mb-3 mb-sm-0">
        <!-- List -->
        <ul class="list-unstyled list-py-1">
		<li><b>Home</b></li>
          <li><a class="text-body" href="{{ route('index') }}">PalmFlow Home</a></li>
          <li><a class="text-body" href="{{ route('about-us') }}">About PalmFlow</a></li>
          <li><a class="text-body" href="{{ route('road-map') }}">Strategic Road Map</a></li>
          <li><a class="text-body" href="{{ route('terms-of-use') }}">Terms of Use</a></li>
          <li><a class="text-body" href="{{route('terms-and-conditions') }}">Terms & Conditions</a></li>
        </ul>
        <!-- End List -->
      </div>

      <div class="col-sm-4 col-md-3 mb-3 mb-sm-0">
        <!-- List -->
        <ul class="list-unstyled list-py-1">
          <li><b>Investors</b></li>
          <li><a class="text-body" href="{{ route('investor-relations') }}">Investor Relations</a></li>
          <li><a class="text-body" href="{{ route('subscriptions') }}">Subscriptions</a></li>
          <li><a class="text-body" href="{{ route('nfts') }}">NFTs Market</a></li>
        </ul>
        <!-- End List -->
      </div>

      <div class="col-sm-4 col-md-3 mb-3 mb-sm-0">
        <!-- List -->
        <ul class="list-unstyled list-py-1">
			<li>	<b>Help</b></li>

          <!--<li>
            <a class="text-body" href="" target="_blank">
              Subscriptions
              <i class="bi-box-arrow-up-right small ms-1"></i>
            </a>
          </li>-->
          <li>
            <a class="text-body" href="/help-topics" target="_blank">
              Help
              <i class="bi-box-arrow-up-right small ms-1"></i>
            </a>
          </li>
          <li>
            <a class="text-body" href="{{ route('terms-and-conditions') }}" target="_blank">
              Terms &amp; Conditions
              <i class="bi-box-arrow-up-right small ms-1"></i>
            </a>
          </li>
          <li>
            <a class="text-body" href="{{ route('privacy-policy') }}" target="_blank">
              Privacy &amp; Policy
              <i class="bi-box-arrow-up-right small ms-1"></i>
            </a>
          </li>
        <li>
            <a class="text-body" href="{{ route('contact-us') }}" target="_blank">
              Contact Us
              <i class="bi-box-arrow-up-right small ms-1"></i>
            </a>
          </li>
        </ul>
        <!-- End List -->
      </div>
	  
    </div>
    <!-- End Links -->

    <div class="row align-items-sm-center">
      <div class="col-sm mb-4 mb-sm-0">
        <p class="small">&copy; BalmFlow . {{date('Y')}} . All rights reserved.</p>
      </div>
      <!-- End Col -->

      <div class="col-sm-auto">
        <!-- Socials -->
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://facebook.com/palmflow">
              <i class="bi-facebook"></i>
            </a>
          </li>
        
          <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://twitter.com/palmflow">
              <i class="bi-twitter"></i>
            </a>
          </li>
        
          <li class="list-inline-item">
            <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://github.com">
              <i class="bi-github"></i>
            </a>
          </li>
        
          <li class="list-inline-item">
            <!-- Button Group -->
            <div class="btn-group">
              <button type="button" class="btn btn-soft-secondary btn-xs dropdown-toggle" id="footerSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false"data-bs-dropdown-animation>
                <span class="d-flex align-items-center">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/us.svg') }}" alt="English (US)" width="16"/>
                  <span>English (US)</span>
                </span>
              </button>

              <div class="dropdown-menu" aria-labelledby="footerSelectLanguage">
                <a class="dropdown-item d-flex align-items-center active" href="#">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/us.svg')}}" alt="English (UK)" width="16"/>
                  <span>English (UK)</span>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/de.svg')}}" alt="Deutsch" width="16"/>
                  <span>Deutsch</span>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/es.svg')}}" alt="Espanol" width="16"/>
                  <span>Español</span>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <img class="avatar avatar-xss avatar-circle me-2" src="{{ asset('vendor/flag-icon-css/flags/1x1/cn.svg') }}" alt="Chinese" width="16"/>
                  <span>中文 (繁體)</span>
                </a>
              </div>
			  
			  
			  
            </div>
            <!-- End Button Group -->
          </li>
        </ul>
        <!-- End Socials -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <!-- Log in -->
        <!-- Log in -->
          <div id="signupModalFormLogin" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-2">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="{{ asset('svg/brands/google-icon.svg') }}" alt="Image Description">
                  Log in with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log in with Username</a>
            </div>
          </div>
          <!-- End Log in -->

          <!-- Log in with Modal -->
          <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

           <form class="" novalidate method="POST" action="{{route('login') }}">
			                        {{ csrf_field() }}

              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormLoginUsername">Your username</label>
                <input type="username" class="form-control form-control-lg" name="username" id="signupModalFormLoginUsername" VALUE="{{old('username') }}" placeholder="Your username" aria-label="Username" required>
                <span class="invalid-feedback">Please enter your username.</span>
              
			   @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                           
			  
			  </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                </div>

                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" VALUE="{{old('password') }}" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                <span class="invalid-feedback">Please enter a valid password.</span>
                   
				   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          
			  
			  </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
              </div>
            </form>
          </div>
          <!-- End Log in with Modal -->

          <!-- Sign up -->
          <div id="signupModalFormSignup">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-3">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="{{asset('svg/brands/google-icon.svg') }}" alt="Signup with Google">
                  Sign up with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign up with Email</a>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="{{ route('terms-and-conditions') }}" target="_blank">Terms and Conditions</a></p>
              </div>
            </div>
          </div>
          <!-- End Sign up -->

          <!-- Sign up with Modal -->
          <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

           
            <form method="POST" action="{{route('register') }}">
			 {{ csrf_field() }}

              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupName">Your username</label>
                <input type="text" class="form-control form-control-lg" name="email" id="signupModalFormSignupName" value="{{ old('username') }}" placeholder="Your preferred username" aria-label="username" required />
                <span class="invalid-feedback">Please enter a valid username.</span>
              
			  @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                           
			  
			  </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="Your e-mail" aria-label="your e-mail" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              
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
                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                   
				   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          
			  
			  </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" data-hs-validation-validate-class>
                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                <input type="password" class="form-control form-control-lg" id="signupModalFormSignupConfirmPassword" name="password_confirmation" placeholder="8+ characters required" aria-label="8+ characters required" required
                       data-hs-validation-equal-field="#signupModalFormSignupPassword">
                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
              </div>

              <div class="text-center">
                <p class="small mb-0">By clicking the 'Sign up' button you agree to our <a href="{{ route('terms-and-conditions') }}">Terms and Conditions</a></p>
              </div>
            </form>
          
          </div>
          <!-- End Sign up with Modal -->

          <!-- Reset Password -->
          <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Forgot password?</h2>
              <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
            </div>
            <!-- En dHeading -->


            <form class="js-validate need-validate" novalidate method="POST" action="{{route('password.request') }}">
              <div class="mb-3">
                <!-- Form -->
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                    <i class="bi-chevron-left small"></i> Back to Log in
                  </a>
                </div>

                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
                <!-- End Form -->
              </div>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
              </div>
            </form>
          
           
		   </div>
          <!-- End Reset Password -->
        </div>
        <!-- End Body -->

        
      </div>
    </div>
  </div>

  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
 