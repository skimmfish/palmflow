@extends('layouts.simple_pages_header')
@section('content')

<!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Article Description -->
    <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
      <div class="w-lg-65 mx-lg-auto">
        
        <div class="row align-items-sm-center mb-5">
          <div class="col-sm-7 mb-4 mb-sm-0">
            <!-- Media -->
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
          <h1 class="h2 center" style="font-weight:800;">Our Vision & Mission</h1>
               
			   <!--<img class="avatar avatar-circle" src="{{ asset('img/160x160/img9.jpg') }}" alt="Image Description">-->
              </div>

              <div class="flex-grow-1 ms-3">
                <!--<h5 class="mb-0">
                  <a class="text-dark" href="blog-author-profile.html">Christina Kray</a>
                </h5>
                <span class="d-block small">1 day ago</span>-->
              </div>
            </div>
            <!-- End Media -->
          </div>
          <!-- End Col -->

         
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <p style="line-height:40px;">
		
		Welcome to PalmFlow, here at PalmFlow, we are strongly committed to our course	and we need to carry all our contributors and stakeholders along as we move up the scale on our <a href="{{ route('road-map')}}">strategic road-map</a>.
		On this page you will learn about our mission and vision statement which goes:
		<br/>
		<br/>
		<b>Here is a summary of our mission statement at PalmFlow</b><br/>
	
	<ul style="line-height:40px;font-weight:500;color:#000">
			<li>To build a sustainable online staking platform that could yield with good and calculated trading algorithm that has been thoroughly tested over the years</li>
			<li>To stand-out among many other online systems that has emanated several years with the intention to scam people, and to prove to the online community that it is still possible to build wealth through online systems without compromise and risk of huge loss</li>
			<li>To give back to the society through our charity foundation that is built solely for the purpose of feeding the hungry and educating the minority especially the female gender belonging to
			the minority group of people that has been looked down and neglected.</li>
			<li>To build a dual system of giving to community outreaches as well giving back to our stakers and contributors who has contributed to the success of the platform via their stakings</li>
			<li>To build a community of smart traders and speculators both for the cryptocurrency, currencies and the stock market, people who have been tested and tried.</li>
			<li>To build a self-sustaining system that can make others wealthy without the fear of loss or scam</li>
			<li>To build an online crypto-staking community of people that shares the same ideology about giving to humanity</li>

			</ul>
			
			</div>

      <div class="w-lg-65 mx-lg-auto">
        
        <!-- Blockquote -->
        <figure class="bg-light text-center p-7 my-7">
          <blockquote class="blockquote blockquote-lg text-primary">" A self-sustaining system by the help of God that creates wealth built on transparency and equity, created to help the hopeless and bring the lost
		  back to their truest identity"</blockquote>
        </figure>
        <!-- End Blockquote -->

        <h3>Bringing back the culture of supporting the weak and the hungry</h3>
        <p style="line-height:40px;">Central to our mission is to see every girl-child adequately educated, this we do on a continual basis as the need arise. To build a self-sustaining system based on best predictive models that has been in existence for decades, and to create a wealth-generating system for our contributors (stakers),
		As the system keep sustaining itself, our mission gets fulfilled.
		</p>
        </div>


      <div class="w-lg-65 mx-lg-auto" style="line-height:40px;">
      
        <!-- Card -->
        <div class="card bg-dark text-center my-4" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
          <div class="card-body">
            <h3 class="text-white mb-4" style="font-family:'Spartan','Brandon Grotesque'; font-weight:600;">Want to get frequent updates? Subscribe to our mailing list!</h3>

            <div class="w-lg-75 mx-lg-auto">
              <form method="POST" action="{{ route('subscriptions') }}">
			                          {{ csrf_field() }}

                <!-- Input Card -->
                <div class="input-card input-card-sm border">
                  <div class="input-card-form">
                    <label for="subscribeForm" class="form-label visually-hidden">Enter email</label>
                    <input type="email" class="form-control" id="subscribeForm" value="{{ old('email') }}" placeholder="Enter email" aria-label="Enter email" required />
                  </div>
                  <button type="button" class="btn btn-primary">Subscribe</button>
                </div>
                <!-- End Input Card -->
              </form>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <div class="row justify-content-sm-between align-items-sm-center mt-5">
          <div class="col-sm mb-2 mb-sm-0">
            <div class="d-flex align-items-center">
              <span class="text-cap mb-0 me-2">Share:</span>

              <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                <i class="bi-facebook"></i>
              </a>
              <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                <i class="bi-twitter"></i>
              </a>
              <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                <i class="bi-instagram"></i>
              </a>
              <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                <i class="bi-telegram"></i>
              </a>
            </div>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Bookmark story">
              <i class="bi-bookmark"></i>
            </a>
            <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Report">
              <i class="bi-flag"></i>
            </a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Page Description -->
 </main>
  <!-- ========== END MAIN CONTENT ========== -->


@endsection