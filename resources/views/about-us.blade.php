@extends('layouts.simple_pages_header')
@section('content')

<!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Article Description -->
    <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
      <div class="w-lg-65 mx-lg-auto">
        <div class="mb-4">
         <!-- <h1 class="h2 center">About OliveFlowFx</h1>-->
        </div>

        <div class="row align-items-sm-center mb-5">
          <div class="col-sm-7 mb-4 mb-sm-0">
            <!-- Media -->
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
          <h2 class="h2 center">About OliveFlowFx</h2>
               
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
              <span class="text-cap mb-0 me-2 text-xs small-xs" style="font-size:12.5px">Follow Us</></span>

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

  <p class="olive">At OliveFlowFx, our mission has always been focused on bringing joy and gladness to the heart of humanity as much as God has helped us, and this we make our utmost priority and it is the reason why we are in business in all openess and transparency. 
	
	Our business model is one where, we manage our clients' currencies account through a central funds management system which incorporates some of the best price delivery algorithm in the world.

  We have built sound risk management, money management and business management into our system such that on every given day, our clients would always have some results to smile about while they sleep we keep this going.

</div>

      <div class="my-4 my-sm-8">
        <img class="img-fluid rounded-lg" src="{{ asset('img/1920x800/img5.jpg') }}" alt="Image Description">
      </div>

      <div class="w-lg-65 mx-lg-auto">
        <p class="olive">
		
				<Br/>
		You can always reach out to us via our contact us page, in case you have any enquiries/suggestions on how we can the best of our services we'd always be glad to respond.
			
			<br/>
			
			Our modus operandi goes in 3 ways as follow:
			<ul class="olive">
			<li>Clients connect their currencies account(s) hosted with any broker of their choice to our backend via their dashboard. </li>
			<li>We trade on this accounts remotely and charge only a little rebates of your profit to serve our running cost. This is taken from the gas fees you saved on your wallet at the time you connected your trading accounts</li>
			<li>For those who wish to do more with us, may fund their account and declare the amount they would like to put in system reserve for internal staking, this we do to give extra interests to our clients internally aside from the daily profits on their accounts.</li>
      <li>We are committed to our community outreach (<b>Save The World</b>) project that caters for hospitalized patients with terminal ailments who couldn't afford exhorbitant clinical fees, we do solicit for Non-profit donations from our foreign organizations to help us assist those we have identified to be in this group</li>
			</ul>
</p>
		  
        <!-- Blockquote -->
        <figure class="bg-light text-center p-7 my-7">
          <blockquote class="blockquote blockquote-lg" style="font-family:Spartan !important">" We support humanity, we give back to the society, help the hopeless, this we hope to keep the fire burning"</blockquote>
          <!--
          <figcaption class="blockquote-footer">
            Emmanuel
            <span class="blockquote-footer-source"><i>For the Management</i></span>
          </figcaption>-->
        </figure>
        <!-- End Blockquote -->


        <p class="text-center" style="line-height:40px;color:#000;">Bringing back the culture of supporting the weak and the less-priviledged</p>

        </div>

      <div class="my-4 my-sm-8">
        <img class="img-fluid rounded-lg" src="{{ asset('img/1920x800/img6.jpg') }}" alt="Image Description">
      </div>

      <div class="w-lg-65 mx-lg-auto olive">
        <p>At the heart of what we stand for is the propensity to address issues that has bedeviled our society in the name of scams. Many promising projects that could have benefited humanity has been rusted by the unquenchable 'dust' of scams in the name of cloud mining. <br/>We do not own a mining rig but a team of professionals wanting to make a difference in our world. We trade your accounts with strict risk management, no robots, no trading algorithm except Institutional price delivery algorithms (IPDA), No Bitcoin mining rig, but transacting values on financial exchanges with time-tested models of Trade Execution, Money Management and Risk Management.
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