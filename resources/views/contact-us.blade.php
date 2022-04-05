@extends('layouts.simple_pages_header')
@section('content')

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Contact Form -->
    <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
      <div class="row">
        <div class="col-lg-6 mb-9 mb-lg-0">
          <!-- Heading -->
          <div class="mb-5">
            <h1>Get in touch</h1>
            <p>We'd love to talk about how we can help you.</p>
          </div>
          <!-- End Heading -->

          <!-- Leaflet -->
          <div class="overflow-hidden">
            <div id="map" class="leaflet mb-5"
                 data-hs-leaflet-options='{
                 "map": {
                   "scrollWheelZoom": false,
                   "coords": [37.4040344, -122.0289704]
                 },
                 "marker": [
                   {
                     "coords": [37.4040344, -122.0289704],
                     "icon": {
                       "iconUrl": "{{ asset("svg/components/map-pin.svg") }}",
                       "iconSize": [50, 45]
                     },
                     "popup": {
                       "text": "25, Olorombo Street, Aladesanmi, Asero, Abeokuta, Ogun State, Nigeria"
                     }
                   }
                 ]
                }'></div>
          </div>
          <!-- End Leaflet -->

          <div class="row">
            <div class="col-sm-6">
              <h5 class="mb-1">Call us:</h5>
              <p><a href="tel:+2349076191416">0800 - BALMFLOW</a></p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6">
              <h5 class="mb-1">Email us:</h5>
              <p><a href="mailto:hello@balmflow.com">hello@balmflow.com</a></p>
            </div>
            <!-- End Col -->

            <div class="col-sm-6">
              <h5 class="mb-1">Address:</h5>
              <p>#25, Olorombo Street, Aladesanmi, Asero, Abeokuta, Ogun State, Nigeria.</p>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6">
          <div class="ps-lg-5">
		  
		  <div class="container"> @if (session('message'))   <div class="alert alert-success">  {{ session('message') }}</div>@endif</div>
            <!-- Card -->
            <div class="card">
              <div class="card-header border-bottom text-center">
                <h3 class="card-header-title">Requests and Complaints</h3>
              </div>

              <div class="card-body">
                <!-- Form -->
                <form method="POST" action="{{route('contact_models.store') }}">
				@method('POST')
				@csrf
                  <div class="row gx-3">
                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label class="form-label" for="hireUsFormFirstName">First name</label>
                        <input type="text" class="form-control form-control-lg" name="first_name" id="hireUsFormFirstName" value="{{old('first_name') }}" placeholder="First name" aria-label="First name" required autofocus />
                      
					  @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
					  </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label class="form-label" for="hireUsFormLasttName">Last name</label>
                        <input type="text" class="form-control form-control-lg" name="last_name" id="hireUsFormLasttName"  value="{{old('last_name') }}"placeholder="Last name" aria-label="Last name" required />
                      
					    @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
					  </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <div class="row gx-3">
                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label class="form-label" for="hireUsFormWorkEmail">Email address</label>
                        <input type="email" class="form-control form-control-lg" name="user__email" id="hireUsFormWorkEmail" value="{{old('user__email') }}"placeholder="your-email@tld.com" aria-label="your-email@tld.com" required />
                      </div>
                      <!-- End Form -->
                      @if ($errors->has('user__email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user__email') }}</strong>
                                    </span>
                                @endif
					</div>
                    <!-- End Col -->

                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label class="form-label" for="hireUsFormPhone">Phone <span class="form-label-secondary">(Optional)</span></label>
                        <input type="text" class="form-control form-control-lg" name="phone_number" value="{{old('phone_number')}}" id="hireUsFormPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx">
                      </div>
                      <!-- End Form -->
                      @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
					</div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <!-- Form -->
                  <div class="mb-3">
				     <label class="form-label" for="issues_category" id="issues_category">Select a acategory</label>
                     
                  <select name="issues_category" class="form-control">
				  <option selected value="">Select an option</option>
				  <option selected value="general">General Enquiries</option>
				  <option selected value="deposits_withdrawals">Deposits & Withdrawals</option>
				  <option selected value="registration">Registration</option>
				  <option selected value="wallet">Wallet Issues</option>
				  <option selected value="technical">Technical Issues</option>
				  </select>
				  
				    @if ($errors->has('issues_category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('issues_category') }}</strong>
                                    </span>
                                @endif
					
				  </div>
				  
				  <!--details-->
				  <div class="mb-3">
                    <label class="form-label" for="hireUsFormDetails">Details</label>
                    <textarea class="form-control form-control-lg" name="message" id="hireUsFormDetails" placeholder="Your comments/suggestions/enquiries" aria-label="Tell us about your issues and concerns..." rows="4">{{ old('message') }}</textarea>
					
					  @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
					
				  </div>
                  <!-- End Form -->
				  <div class="mb-3">
					<label class="form-label" for="hireUsFormDetails">Attach a File</label>
                    <input type="file" name="pic_file" class="form-control"/>
					</div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Send Inquiry</button>
                  </div>

                  <div class="text-center">
                    <p class="form-text">We'll get back to you in 1-2 business days.</p>
                  </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Contact Form -->
  </main>


@endsection