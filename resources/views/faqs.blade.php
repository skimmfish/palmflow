@extends('layouts.simple_pages_header')
@section('content')

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="bg-img-start" style="background-image: url({{ asset('svg/components/card-11.svg') }} );">
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
                   You can use any of these three (3) crypto coins to fund your trading gas fee - Bitcoin, USDT and Etherium, but you must also  ensure that you have an appropriate wallet on the right blockchain to avoid loss of asset for withdrawals as the case may be.
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
                  Yes you may cancel your trading contract with us at any point time, however, in case there are running trades on your MT4 accounts, we advise that they be closed before you pull out.
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
                    For every transaction gas fee funding we receive, we issue a 'Thank You' invoice.
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
                  Yes definitely you can refer others, and everytime you refer others you stand the chance of earning a one-time referral bonuses, however, we only have a 1-step matrix for our referrals program. Also, in addition, referring others is not compulsory, you may do so at your discretion if you so wish.
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
                We do not go by a particular daily ROI, reason is because, we operate on a compounding basis, say for instance, if your daily starting equity is $100 for instance, we target 20 price interest profit for every equity at a fraction of standard lot size of 0.01 per every $100, so as such, we recalculate the lot size factor on a daily basis and we go with the best maximum suited for your account and properly aligns with our Risk Management model and Money Management.
                </div>
                </div>
              </div>
              <!-- End Accordion Item -->

              <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsSix">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsSix" aria-expanded="false" aria-controls="collapseBasicsSix">
                    Can I compound my profits on wallet reserve staking?
                  </a>
                </div>
                <div id="collapseBasicsSix" class="accordion-collapse collapse" aria-labelledby="headingBasicsSix" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
					Yes we support compounding but you can only do so after 3 months of your last alloted wallet reserve staking. We do this to discourage abuse of the system which could cause system failure in the nearest future.
						
				  </div>
                </div>
              </div>
              <!-- End Accordion Item -->
			  
			  <!-- Accordion Item -->
              <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsSeven">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsSeven" aria-expanded="false" aria-controls="collapseBasicsSeven">
                    What is the min. & max. value for wallet reserve staking & what is my likely daily ROI on the wallet reserve staking?
                  </a>
                </div>
                <div id="collapseBasicsSeven" class="accordion-collapse collapse" aria-labelledby="headingBasicsSeven" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
				  We allow a minimum of 100USDT and its BTC/ETH equivalent and a maximum of 1,000 USDT or its equivalent in BTC or ETH for funding transaction gas fees, and you stand to get between 0.8-1.0% on the wallet reserve staked fund.
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

				You may only withdraw your earnings on a <b>weekly basis</b> to your respective wallet, however, but in case you decide to withdraw ealier than the 6-day withdrawal window, your withdrawal shall be subjected to a 10% withdrawal charges and also it also requires that you bind the right wallet on the right blockchain with our portal to enjoy a seamless withdrawal experience.
				
				  </div>
                </div>
              </div>
              <!-- End Accordion Item -->
			  

              			 <!-- Accordion Item -->
                     <div class="accordion-item">
                <div class="accordion-header" id="headingBasicsNine">
                  <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseBasicsNine" aria-expanded="false" aria-controls="collapseBasicsNine">
					What is the transaction gas fees for?
                  </a>
                </div>
                <div id="collapseBasicsNine" class="accordion-collapse collapse" aria-labelledby="headingBasicsNine" data-bs-parent="#accordionFAQBasics">
                  <div class="accordion-body">
              For every trade we initiate on your MT4 trading account, we deduct a 20% platform cost so that you may keep all your profits generated by the system. This we do to ensure that customers and clients do not defraud the system. Charges are necessary for smooth running of the platform such as Virtual Private Servers (VPS), monthly fees on trade copiers and other subscriptions. Another issue to consider is the fact that, you may reserve a certain portion of your wallet gas fee as your staking reserve which could generate profit you by the side as well if you so wish but the minimum transaction gas fee funding is staked at 20USDT, and at everytime when it is exhausted, the system will stop trading on your account until this is settled, but if you chose to do wallet reserve staking, this may keep replenishing your transaction gas fees. 
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