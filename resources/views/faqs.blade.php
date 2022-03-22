@extends('layouts.simple_pages_header')
@section('content')

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="bg-img-start" style="background-image: url(assets/svg/components/card-11.svg);">
      <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2">
        <div class="w-md-75 w-lg-50 text-center mx-md-auto">
          <h1 style="font-family:Work Sans; font-weight:700;">FAQs</h1>
          <p>Search our FAQ page for answers to anything you might ask.</p>
        </div>
      </div>
    </div>
    <!-- End Hero -->

    <!-- FAQ -->
    <div class="container content-space-2 content-space-b-lg-3">
      <div class="w-lg-75 mx-lg-auto">
        <div class="d-grid gap-10">
          <div class="d-grid gap-3">
            <h2>Basics</h2>

            <!-- Accordion -->
            <div class="accordion accordion-flush accordion-lg" id="accordionFAQBasics">
              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsOne">
                  <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsOne" aria-expanded="true" aria-controls="collapseBasicsOne">
                    What methods of funds payments are supported?
                  </a>
                </div>
                <div id="collapseBasicsOne" class="accordion-collapse collapse show" aria-labelledby="headingBasicsOne" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                   You can use any of these three (3) crypto coins to create your staking - Bitcoin, USDT and Etherium, but you must also  ensure that you have an appropriate wallet on the right blockchain to avoid loss of asset during and after withdrawals.
				   </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsTwo">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsTwo" aria-expanded="false" aria-controls="collapseBasicsTwo">
                    Can I cancel at anytime?
                  </a>
                </div>
                <div id="collapseBasicsTwo" class="accordion-collapse collapse" aria-labelledby="headingBasicsTwo" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                  Our staking program doesn't include outright cancellation at anytime because we expected all our partners to understand that every time you stake you are contributing to the good of humanity while at the same time, you earn some rebates on your
				  stakes weekly, withdrawals are only permitted on weekends of every week, and as such, we strongly believe it is for a good cause but in case you feel like withdrawing your support, you may only do so after 6 months of staking your crypto coins.
				  </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsThree">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsThree" aria-expanded="false" aria-controls="collapseBasicsThree">
                    How do I get a receipt for my purchase?
                  </a>
                </div>
                <div id="collapseBasicsThree" class="accordion-collapse collapse" aria-labelledby="headingBasicsThree" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                    For every stakings we receive, we issue a 'Thank You' invoice as well as how you can make the best use of our offering.
                  </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsFour">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsFour" aria-expanded="false" aria-controls="collapseBasicsFour">
                    Can I refer others
                  </a>
                </div>
                <div id="collapseBasicsFour" class="accordion-collapse collapse" aria-labelledby="headingBasicsFour" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
                  Yes definitely you can refer others, and everytime you refer others you stand the chance of earning referral bonuses at the end of every month, however, we only have a 2-step matrix for our referrals program as we believe that this program is strictly for the 
				  benefit of humanity and as such should be devoid of every distractions. Also, in addition, referring others is not compulsory, you may do so at your discretion if you wish.
                  </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsFive">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsFive" aria-expanded="false" aria-controls="collapseBasicsFive">
                    How much can I get in returns on a daily basis?
                  </a>
                </div>
                <div id="collapseBasicsFive" class="accordion-collapse collapse" aria-labelledby="headingBasicsFive" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
				We do not have a fixed daily returns rate reason been that, the markets we invest the staked funds in are very liquid, risk management is very paramount as well as it is the sole of 
				every business, but we can assure you that at the end of every week you could have between 3.5-5% weekly and could be more.
                  </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsSix">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsSix" aria-expanded="false" aria-controls="collapseBasicsSix">
                    Can I compound my stakes to increase my profit potential?
                  </a>
                </div>
                <div id="collapseBasicsSix" class="accordion-collapse collapse" aria-labelledby="headingBasicsSix" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
					Yes we support compounding but you can only do so after 3 months of your last staking. We do this to discourage abuse of the system which could cause system failure in the nearest future.
						
				  </div>
                </div>
              </div>
              <!-- End Accordion Item -->
			  
			  <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsSeven">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsSeven" aria-expanded="false" aria-controls="collapseBasicsSeven">
                    What is the minimum & maximum value I can stake?
                  </a>
                </div>
                <div id="collapseBasicsSeven" class="accordion-collapse collapse" aria-labelledby="headingBasicsSeven" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
				  We allow a minimum of 20USDT and its BTC/ETH equivalent and a maximum of 1,000 USDT or its equivalent in BTC or ETH, this is  however subject to future reviews.
				  </div>
                </div>
              </div>
              <!-- End Accordion Item -->
			 
			 <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsEight">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsEight" aria-expanded="false" aria-controls="collapseBasicsEight">
					How frequent can I withdraw my rebates?
                  </a>
                </div>
                <div id="collapseBasicsEight" class="accordion-collapse collapse" aria-labelledby="headingBasicsEight" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">

				You may only withdraw your earnings on a <b>weekly basis</b> to your respective wallet, however, it requires that you bind your wallet with our portal to enjoy a seamless withdrawal experience.
				
				  </div>
                </div>
              </div>
              <!-- End Accordion Item -->
			  
			  
            </div>
            <!-- End Accordion -->
          </div>

          <div class="d-grid gap-3">
            <h2>Support</h2>

            <!-- Accordion -->
            <div class="accordion accordion-flush accordion-lg" id="accordionFAQSupport">
              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingSupportOne">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseSupportOne" aria-expanded="false" aria-controls="collapseSupportOne">
                    How can I contact you?
                  </a>
                </div>
                <div id="collapseSupportOne" class="accordion-collapse collapse" aria-labelledby="headingSupportOne" data-bs-parent="#accordionFAQSupport">
                  <div class="accordion-body">
                    You can easily reach out to us via our support channels, check our contact details <a href="{{route('contact-us') }}">here</a>. Thank you. You can as well chat with us on your dashboard, however, this require that you are fully authenticated before you can have access to the chat interface.
					Thank you.
						</div>
                </div>
              </div>
              <!-- End Accordion Item -->

               </div>
            <!-- End Accordion -->
          </div>

          
		  
		  
        </div>
      </div>
    </div>
    <!-- End FAQ -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection