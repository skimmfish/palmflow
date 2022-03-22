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
                  <a href="{{ route('index') }}"><img class="avatar avatar-circle" src="{{ asset('img/160x160/img9.jpg') }}" alt="CEO PalmFlow"></a>
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
              <p>Let's get your password reset started!</p>
			  
			                  <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

			  
            </div>
            <!-- End Heading -->

            <!-- Form -->
            <form class="" method="POST" action="{{route('password.email') }}">
              {{ csrf_field() }}
              
			 			  <!-- Form -->
			  
			  <div class="mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="form-label" for="signupModalFormSignupEmail">Your E-mail</label>
                <input type="email" class="form-control form-control-lg shrink_form_control" name="email" id="signupModalFormSignupEmail" value="{{ old('email') }}" placeholder="Your registered e-mail" aria-label="email" required>
                <span class="invalid-feedback">Please enter your registered email address.</span>
              
			  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
			  
			  </div>
              <!-- End Form -->
			
              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Send Password Reset Link</button>
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
