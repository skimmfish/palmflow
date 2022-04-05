@extends('layouts.simple_pages_header')
@section('content')

<!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Article Description -->
    <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
      <div class="w-lg-65 mx-lg-auto">
        <div class="mb-4">
         <!-- <h1 class="h2 center">About PalmFlow</h1>-->
        </div>

        <div class="row align-items-sm-center mb-5">
          <div class="col-sm-7 mb-4 mb-sm-0">
            <!-- Media -->
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
          <h1 class="h2 center">About BalmFlow</h1>
               
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

          <div class="col-sm-5">
            <div class="d-flex justify-content-sm-end align-items-center">
              <span class="text-cap mb-0 me-2">Follow Us</span>

              <div class="d-flex gap-2">
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#">
                  <i class="bi-facebook"></i>
                </a>
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#">
                  <i class="bi-twitter"></i>
                </a>
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#">
                  <i class="bi-instagram"></i>
                </a>
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#">
                  <i class="bi-telegram"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <p style="line-height:40px;">At PalmFlow, our mission has always been focused on bring joy and gladness to the heart of humanity as much as God has helped us, and this we do in all openess and transparency. 
		Our modus Operandi is such 
		that, we make the most effective use of our contributors' funds to ensure that we keep to the task. We are on both sides of the coin that is in the business world as well as on the humanitarian front.
		<br/>The summary of our vision is to feed at least one man per hour, people who have been subjected to hardship by reasons known and unknown; 
		To eradicate ignorance amoung the most indigent set of individuals we can identify within our circle of influence;
		and to give back rebates on the divested funds contributed by our partners world-wide in a most transparent manner.			
		
		</div>

      <div class="my-4 my-sm-8">
        <img class="img-fluid rounded-lg" src="{{ asset('img/1920x800/img5.jpg') }}" alt="Image Description">
      </div>

      <div class="w-lg-65 mx-lg-auto">
        <p style="line-height:40px;">
		
				<Br/>
		For this reason, we believe that each and everyone who give to this course are indirectly investing their hard-earned sweat and they get back rebates which accrues on a daily basis, withdrawable every weekend of every week.
			We do not specify how much the rebate is because we diversify these funds into investment vehicles that could yield enough to keep our mission going without any setback, but we have our great assurances that each week would close out at at least 5% of the stakings
			committed by every contributors to this humanitarian project.
			
			<br/>
			
			Our modus operandi goes in 3 ways as follow:
			<ul style="line-height:37px;">
			<li>Contributors stake crypto currencies from their preferred crypto wallets (USDT/BTC/ETH) </li>
			<li>We trade the stakes using our proprietary softwares on the currencies and stocks market where we could track the micro-statistics on a daily basis</li>
			<li>Contribute to community outreach and the "<b>Save The World</b>" project</li>
			<li>Give back to our contributors - Every Contributors/Stakers have access to their dashboard where they can track the growth of their assets and how well they are contributing to the welfare of mankind at the same time.</li>
			</ul>
</p>
		
        
        <!-- Blockquote -->
        <figure class="bg-light text-center p-7 my-7">
          <blockquote class="blockquote blockquote-lg">" We support humanity, we give back to our contributors in the most transparent manners, this we hope to keep the fire burning"</blockquote>
          <!--
          <figcaption class="blockquote-footer">
            Emmanuel
            <span class="blockquote-footer-source"><i>For the Management</i></span>
          </figcaption>-->
        </figure>
        <!-- End Blockquote -->

        <h3>Bringing back the culture of supporting the weak and the less-priviledged</h3>

        <p style="line-height:40px;">Central to our mission is to see every girl-child adequately educated, this we do on a continual basis as the need arise. </p>

        </div>

      <div class="my-4 my-sm-8">
        <img class="img-fluid rounded-lg" src="{{ asset('img/1920x800/img6.jpg') }}" alt="Image Description">
      </div>

      <div class="w-lg-65 mx-lg-auto" style="line-height:40px;">
        <p>At the heart of what we stand for is the propensity to address issues that has bedeviled our society in the name of scams. Many promising projects that could have benefited humanity has been rusted by the unquenchable 'dust' of
		scams in the name of cloud mining. <br/>We do not own a mining rig but a team of professionals wanting to make a difference in our world. We trade with the funds, give to our contributors and also contribute immensely to the society which is the major
		of what BalmFlow stands No Bitcoin mining rig, but transacting values on financial exchanges with time-tested model of trade execution and risk management.
		<br/>
		All you need do is to give us a chance to prove what we stand for. The more we give, the more we are confident that the our good deeds will keep us in the picture for long while we contribute to the sustenance of humanity in different dimensions.
		
		</p>

        <!-- Card -->
        <div class="card bg-dark text-center my-4" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
          <div class="card-body">
            <h4 class="text-white mb-4">Want to get frequent updates? Subscribe to our mailing list!</h4>

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