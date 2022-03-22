@extends('layouts.app')
@section('content')

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative bg-dark overflow-hidden" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
      <div class="container position-relative zi-2 content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-md-3">
        <div class="row align-items-lg-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Heading -->
            <div class="mb-6">
              <h1 class="display-6 text-white">
                
                <span class="text-warning">
                  <span class="js-typedjs"
                        data-hs-typed-options='{
                          "strings": ["Staking", "Give", "Earn Cashback On"],
                          "typeSpeed": 60,
                          "loop": true,
                          "backSpeed": 25,
                          "backDelay": 1500
                        }'></span>
                </span>
                <br>
                Your Cryptos While Helping Humanity
              </h1>

              <p class="lead text-white-70">Building A Crypto Project to Help Humanity <br/> Nothing to Lose, So Much to Gain</p>
            </div>
            <!-- End Title & Description -->

            <div class="d-grid d-sm-flex gap-3">
              <a class="btn btn-primary btn-transition" href="{{route('about-us') }}">Learn More</a>
              <a class="btn btn-ghost-light btn-transition" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Get Started <i class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div>
          <!-- End Col -->

          <div class="col-lg-7">
            <div class="position-relative">
              <!-- Browser Device -->
              <figure class="device-browser">
                <div class="device-browser-header">
                  <div class="device-browser-header-btn-list">
                    <span class="device-browser-header-btn-list-btn"></span>
                    <span class="device-browser-header-btn-list-btn"></span>
                    <span class="device-browser-header-btn-list-btn"></span>
                  </div>
                  <div class="device-browser-header-browser-bar">{{ config('app_url') }}</div>
                </div>

                <div class="device-browser-frame">
                  <img class="device-browser-img" src="{{ asset('img/1618x1010/img1.jpg') }}" alt="Image Description">
                </div>
              </figure>
              <!-- End Browser Device -->

              <div class="d-none d-sm-block position-absolute bottom-0 end-0 zi-1 mb-n5 me-n5" style="max-width: 20rem;" data-aos="fade-up" data-aos-delay="100">
                <!-- Card -->
                <div class="card bg-warning" style="background-image: url({{ asset('svg/components/wave-pattern-light.svg') }} );">
                  <div class="card-body">
                    <h4 class="card-title">Intelligent Staking</h4>
                    <p class="card-text text-dark"><b>PalmFlow</b> Lets you stake your cryptocoins in all transparency, to help humanity and at the same time earning a recurrent stream of income</p>

                    <!-- Avatar -->
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-sm avatar-circle" src="{{ asset('img/160x160/img3.jpg') }}" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 ms-2">
                        <h5 class="card-title mb-0">Emmanuel Olabs</h5>
                        <p class="card-text text-dark small">CEO</p>
                      </div>
                    </div>
                    <!-- End Avatar -->
                  </div>
                </div>
                <!-- End Card -->
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>

      <!-- Shape -->
      <div class="shape shape-bottom zi-1">
        <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 500H3000V0L0 500Z" fill="#fff"/>
        </svg>
      </div>
      <!-- End Shape -->
    </div>
    <!-- End Hero -->

    <!-- Features -->
    <div class="overflow-hidden">
      <div class="container content-space-2 content-space-t-lg-3">
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-5 mb-9 mb-lg-0">
            <!-- Heading -->
            <div class="mb-5">
              <h2 class="work-sans-h1">Crypto Staking Made Easy.</h2>
              <p>When you stake your crypto coins, you earn passive income while HELPING humanity. So much to gain, Nothing to Lose</p>
            </div>
            <!-- End Heading -->

            <div class="w-md-50 w-lg-75 mb-2">
              <!-- Fancybox -->
              <div class="bg-img-start text-center rounded-2 py-10 px-5" style="background-image: url(assets/img/480x320/img18.jpg);">
                <a class="video-player video-player-btn" href="https://www.youtube.com/watch?v=d4eDWc8g0e0" role="button" data-fslightbox="youtube-video">
                  <span class="d-flex justify-content-center align-items-center">
                    <span class="video-player-icon shadow-sm">
                      <i class="bi-play-fill"></i>
                    </span>
                  </span>
                </a>
              </div>
              <!-- End Fancybox -->
            </div>

            <p class="small">Watch this video to understand {{config('app_name') }}'s modus operandi better!</p>
          </div>

          <div class="col-lg-6">
            <div class="position-relative mx-auto" data-aos="fade-up">
              <!-- Mobile Device -->
              <figure class="device-mobile mx-auto">
                <div class="device-mobile-frame">
                  <img class="device-mobile-img" src="{{ asset('img/407x867/img6.jpg') }}" alt="Image Description">
                </div>
              </figure>
              <!-- End Mobile Device -->

              <!-- SVG Shape -->
              <div class="position-absolute top-50 start-50 translate-middle zi-n1" style="width: 25rem;">
                <img class="img-fluid" src="{{ asset('svg/components/shape-2.svg') }}" alt="SVG">
              </div>
              <!-- End SVG Shape -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Features -->

    <!-- Features -->
    <div class="overflow-hidden">
      <div class="container content-space-t-lg-3 content-space-b-lg-2">
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-5 order-lg-2 mb-9 mb-lg-0">
            <!-- Heading -->
            <div class="mb-5">
              <h2>The Best Way to Stake Your Cryptocoins</h2>
              <p>Use {{config('app_name')}} to stake your crypto coins in a legendary and transparent way, decentralized to serve you better irrespective of your location. </p>
            </div>
            <!-- End Heading -->

          <!--  <h4 class="mb-3">Get our mobile app</h4>
    
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
            </div>-->
          </div>
          <!-- End Col -->

          <div class="col-lg-6 order-lg-1">
            <div class="position-relative mx-auto" data-aos="fade-up">
              <!-- Mobile Device -->
              <figure class="device-mobile mx-auto">
                <div class="device-mobile-frame">
                  <img class="device-mobile-img" src="{{ asset('img/407x867/img3.jpg') }}" alt="Image Description">
                </div>
              </figure>
              <!-- End Mobile Device -->

              <!-- SVG Shape -->
              <div class="position-absolute top-50 start-50 translate-middle zi-n1" style="width: 25rem;">
                <img class="img-fluid" src="{{ asset('svg/components/shape-1.svg') }}" alt="SVG">
              </div>
              <!-- End SVG Shape -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Features -->

    <!-- Features -->
    <div class="overflow-hidden">
      <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2">
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-5 mb-9 mb-lg-0">
            <!-- Heading -->
            <div class="mb-4">
              <h2>Get Paid to Help Humanity</h2>
              <p>When you stake your cryptocoins, lots of benefits accrue to you, your stakings are regarded as donations given to help but in a legendary way, How?</p>
            </div>
            <!-- End Heading -->
            
            <!-- List Checked -->
            <ul class="list-checked list-checked-soft-bg-dark list-checked-lg">
              <li class="list-checked-item">Orphans are being taken care of and a man without source of daily meal is being fed per hour increasing on a daily basis</li>
              <li class="list-checked-item">Out-of-school children are being taken care of</li>
              <li class="list-checked-item">We trade with these funds to ensure that you get best out of your stakings, and also to ensure that our community service doesn't stop</li>
              <li class="list-checked-item">We give to live</li>
            </ul>
            <!-- End List Checked -->
          </div>
          <!-- End Col -->

          <div class="col-lg-6">
            <div class="position-relative mx-auto" data-aos="fade-up">
              <!-- Mobile Device -->
              <figure class="device-mobile mx-auto">
                <div class="device-mobile-frame">
                  <img class="device-mobile-img" src="{{asset('img/407x867/img1.jpg')}}" alt="Image Description">
                </div>
              </figure>
              <!-- End Mobile Device -->

              <!-- SVG Shape -->
              <div class="position-absolute top-50 start-50 translate-middle zi-n1" style="width: 25rem;">
                <img class="img-fluid" src="{{asset('svg/components/shape-4.svg')}}" alt="SVG">
              </div>
              <!-- End SVG Shape -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Features -->

    <!-- Pricing -->
    <div class="container content-space-2 content-space-lg-3">
      <!-- Heading -->
      <div class="w-lg-50 text-center mx-lg-auto mb-5 mb-md-9">
        <h2>Always know what you'll get paid</h2>
        <p>Once you stake, it takes 24 hours to start seeing your returns, we set the ball rolling, you keep getting an unending stream of notifications on how your stakings are performing both in your crypto-wallets and in the community</p>
      </div>
      <!-- End Heading -->

      <div class="row gx-0 align-items-lg-center mb-7 mb-md-10">
        <div class="col-lg-7">
          <!-- Card -->
          <div class="card card-lg text-center zi-2" data-aos="fade-up">
            <div class="card-header pb-0">
              <div class="mb-1">
                <span class="display-4 text-primary">0.6-0.8%</span>
                <span class="badge bg-dark rounded-pill align-top ms-1">+/- 0.1%</span>
              </div>
              <p>per daily trading session</p>
            </div>

            <div class="card-body">
              <div class="row justify-content-sm-center align-items-sm-center mb-5">
                <div class="col-sm-5">
                  <div class="mb-2">
                    <img class="avatar avatr-xl avatar-4x3" src="{{ asset('svg/illustrations/account-creation.svg') }}" alt="SVG">
                  </div>

                  <h4>Wallet Creation</h4>
                </div>
                <!-- End Col -->

                <div class="col-sm-1 my-3 my-sm-0">
                  <span class="fs-3 text-primary">+</span>
                </div>
                <!-- End Col -->

                <div class="col-sm-5">
                  <div class="mb-2">
                    <img class="avatar avatr-xl avatar-4x3" src="{{ asset('svg/illustrations/pro-account.svg') }}" alt="SVG">
                  </div>

                  <h4>Crypto Staking</h4>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <div class="mb-7">
                <p class="card-text small">Every must stakings run for<br>6 months before re-staking / compounding</p>
              </div>

              <button type="button" data-bs-toggle="modal" data-bs-target="#signupModal" class="btn btn-primary btn-transition px-6">Get started</button>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-lg-5">
          <!-- Card -->
          <div class="card card-lg bg-dark ms-md-n2" data-aos="fade-up" data-aos-delay="200">
            <div class="card-body">
              <!-- List Checked -->
              <ul class="list-pointer list-pointer-soft-bg-light list-pointer-lg">
                <li class="list-pointer-item">
                  <h4 class="text-white mb-1">3+ currencies supported</h4>
                  <p class="text-white-70 mb-0">We support three crypto-currencies at the moment - USDT, BTC, & ETH. Others coming soon </p>
                </li>

                <li class="list-pointer-item">
                  <h4 class="text-white mb-1">Global support</h4>
                  <p class="text-white-70 mb-0">Participants in 25+ countries can stake, Withdrawals could be made via your preferred wallet services </p>
                </li>

                <li class="list-pointer-item">
                  <h4 class="text-white mb-1">Secure payment info collection</h4>
                  <p class="text-white-70 mb-0">Payment wallets and sensitive data are securely stored in our highly secured cloud-based storage..</p>
                </li>

                <li class="list-pointer-item">
                  <h4 class="text-white mb-1">Support for Charity Organizations</h4>
                  <p class="text-white-70 mb-0">Support includes educating poor children, and feeding-a-mouth-per-hour project</p>
                </li>
              </ul>
              <!-- End List Checked -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- CTA -->
      <div class="w-lg-75 mx-lg-auto">
        <div class="d-block d-sm-flex align-items-sm-center">
          <div class="flex-shrink-0 mb-3 mb-sm-0">
            <img class="avatar avatar-xl avatar-4x3" src="{{ asset('svg/illustrations/growing-business.svg') }}" alt="SVG">
          </div>

          <div class="flex-grow-1 ms-4">
            <h4>Grow your crypto-base with PalmFlow</h4>
            <p class="mb-0">From 20USDT and above, you can explore the joy of making weekly returns as well as contributing to alleviation of human suffering around the world,
			explore how millions use PalmFlow to boost their crypto returns without sweat <a class="link" href="#" alt="Telegram link to telegram group">Check in to see some of our donators <i class="bi-chevron-right small"></i></a></p>
          </div>
        </div>
      </div>
      <!-- End CTA -->
    </div>
    <!-- End Pricing -->

    <!-- Testimonials -->
    <div class="border-top">
      <div class="container content-space-2 content-space-t-lg-3">
        <!-- Heading -->
        <div class="w-lg-50 mb-5 mb-md-9">
          <h2 style="line-height:40px;">Loved by individuals, businesses and philantropists committed to humanity</h2>
        </div>
        <!-- End Heading -->

        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <!-- Card -->
            <div class="card shadow-none">
              <div class="card-body">
                <!-- Rating -->
                <div class="d-flex gap-1 mb-2">
                  <img src="{{ asset('svg/illustrations/star.svg') }}" alt="Review rating" width="16">
                  <img src="{{ asset('svg/illustrations/star.svg') }}" alt="Review rating" width="16">
                  <img src="{{ asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{ asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{ asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                </div>
                <!-- End Rating -->

                <div class="mb-auto">
                  <p class="card-text">With PalmFlow, you get to earn while at the same time helping humanity. It is not a fluff</p>
                </div>
              </div>

              <div class="card-footer pt-0">
                <!-- Media -->
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img class="avatar avatar-circle" src="{{asset('img/160x160/img8.jpg')}}" alt="Image Description">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h5 class="card-title mb-0">Victor Paula</h5>
                    <p class="card-text small">Business & Marketing Manager</p>
                  </div>
                </div>
                <!-- End Media -->
              </div>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-sm-6 col-lg-4">
            <!-- Card -->
            <div class="card bg-primary">
              <div class="card-body">
                <!-- Rating -->
                <div class="d-flex gap-1 mb-2">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                </div>
                <!-- End Rating -->

                <div class="mb-auto">
                  <p class="card-text text-white">You stand to have some great experience here if you'd just stick around for a while. </p>
                </div>
              </div>

              <div class="card-footer pt-0">
                <!-- Media -->
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img class="avatar avatar-circle" src="{{asset('img/160x160/img9.jpg')}}" alt="Image Description">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h5 class="card-title text-white mb-0">Emmanuel Olabiyi</h5>
                    <p class="card-text small text-white-70">CEO at PalmFlow</p>
                  </div>
                </div>
                <!-- End Media -->
              </div>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-sm-6 col-lg-4">
            <!-- Card -->
            <div class="card shadow-none">
              <div class="card-body">
                <!-- Rating -->
                <div class="d-flex gap-1 mb-2">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                  <img src="{{asset('svg/illustrations/star.svg')}}" alt="Review rating" width="16">
                </div>
                <!-- End Rating -->

                <div class="mb-auto">
                  <p class="card-text">The joy to give back to my community drove me towards PalmFlow, They handle everything they stand for with utmost transparency!</p>
                </div>
              </div>

              <div class="card-footer pt-0">
                <!-- Media -->
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img class="avatar avatar-circle" src="{{asset('img/160x160/img3.jpg')}}" alt="Image Description">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h5 class="card-title mb-0">Danielle Olabs</h5>
                    <p class="card-text small">PalmFlow Contributor</p>
                  </div>
                </div>
                <!-- End Media -->
              </div>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Testimonials -->

    <!-- Clients -->
    <div class="container">
      <div class="row align-items-lg-center">
        <div class="col-md-7 col-lg-8 mb-5 mb-md-0">
          <div class="row">
            <div class="col text-center py-3">
              <img class="avatar avatar-lg avatar-4x3" src="{{asset('svg/brands/capsule-dark.svg')}}" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col text-center py-3">
              <img class="avatar avatar-lg avatar-4x3" src="{{asset('svg/brands/fitbit-dark.svg')}}" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col text-center py-3">
              <img class="avatar avatar-lg avatar-4x3" src="{{asset('svg/brands/forbes-dark.svg')}}" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col text-center py-3">
              <img class="avatar avatar-lg avatar-4x3" src="{{asset('svg/brands/mailchimp-dark.svg')}}" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col text-center py-3">
              <img class="avatar avatar-lg avatar-4x3" src="{{asset('svg/brands/airbnb-dark.svg')}}" alt="Logo">
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="col-md-5 col-lg-4">
          <div class="ps-md-4">
            <h2 class="display-3 text-primary">99.9%</h2>
            <p>We Believe, all you need to do this is your mobile phone and your favorite Crypto Wallet!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Clients -->

    <!-- Features -->
    <div class="container content-space-2 content-space-t-lg-4 content-space-b-lg-3">
      <!-- Heading -->
      <div class="w-lg-50 text-center mx-lg-auto mb-5">
        <h2>Simple and Easy to Onboard<br>Earn as you go.</h2>
        <p>From the point of opening your account to staking your cryptos, it all comes easy as 1-2-3, You get to complete all the steps in few minutes.</p>
      </div>
      <!-- End Heading -->

      <!-- Fancybox -->
      <div class="text-center mb-10">
        <a class="video-player btn btn-outline-primary" href="https://www.youtube.com/watch?v=d4eDWc8g0e0" role="button" data-fslightbox="youtube-video">
          <i class="bi-play-circle-fill me-1"></i> Watch and learn how it works
        </a>
      </div>
      <!-- End Fancybox -->

      <div class="w-lg-75 mx-lg-auto mb-10">
        <div class="row justify-content-md-center">
          <div class="col-sm-4 mb-5 mb-sm-0">
            <div class="text-center px-sm-4">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="#035A4B"/>
                <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="#035A4B"/>
                </svg>

              </span>
              <h4>Create an account</h4>
            </div>
          </div>
          <!-- End Col -->

          <div class="col-sm-4 mb-5 mb-sm-0">
            <div class="text-center px-sm-4">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="#035A4B"/>
                <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="#035A4B"/>
                </svg>

              </span>
              <h4>Link your Crypto Wallet</h4>
            </div>
          </div>
          <!-- End Col -->

          <div class="col-sm-4">
            <div class="text-center px-sm-4">
              <span class="svg-icon text-primary mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M4 4L11.6314 2.56911C11.875 2.52343 12.125 2.52343 12.3686 2.56911L20 4V11.9033C20 15.696 18.0462 19.2211 14.83 21.2313L12.53 22.6687C12.2057 22.8714 11.7943 22.8714 11.47 22.6687L9.17001 21.2313C5.95382 19.2211 4 15.696 4 11.9033L4 4Z" fill="#035A4B"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.175 14.75C10.9354 14.75 10.6958 14.6542 10.5042 14.4625L8.58749 12.5458C8.20415 12.1625 8.20415 11.5875 8.58749 11.2042C8.97082 10.8208 9.59374 10.8208 9.92915 11.2042L11.175 12.45L14.3375 9.2875C14.7208 8.90417 15.2958 8.90417 15.6792 9.2875C16.0625 9.67083 16.0625 10.2458 15.6792 10.6292L11.8458 14.4625C11.6542 14.6542 11.4146 14.75 11.175 14.75Z" fill="#035A4B"/>
                </svg>

              </span>
              <h4>Stake Crypto coins</h4>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>

<!--      <div class="mx-auto" style="max-width: 25rem;" data-aos="fade-up">
        <img class="img-fluid" src="{{ asset('svg/illustrations/visa-card.svg') }}" alt="Image Description">
      </div>
    -->
	</div>
    <!-- End Features -->

    <!-- CTA -->
    <div class="bg-dark" style="background-image: url({{ asset('svg/components/wave-pattern-light.svg')}} );">
      <div class="container content-space-2">
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-md mb-5 mb-md-0">
            <h2 class="text-white mb-0" STYLE="line-height:46px;font-family:'Spartan','Brandon Grotesque','Gordita';font-weight:700;font-size:21px;">Enjoy The Benefits of Staking Your Cryptocoins While Helping Humanity</h2>
          </div>
          <!-- End Col -->

          <div class="col-md-auto">
            <div class="d-grid d-sm-flex gap-3">
              <a class="btn btn-light btn-transition" href="{{route('contact-us') }}">Contact Support</a>
              <a class="btn btn-ghost-light btn-transition" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Get started <i class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End CTA -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== END SECONDARY CONTENTS ========== -->

@endsection