@extends('layouts.simple_pages_header')
@section('content')

<main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative">
      <!-- Swiper Main Slider -->
      <div class="js-swiper-blog-journal-hero swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide d-flex gradient-x-overlay-sm-dark bg-img-start" style="background-image: url({{asset('img/1920x1080/img16.jpg') }}); min-height: 40rem;">
            <!-- Container -->
            <div class="container d-flex align-items-center" style="min-height: 40rem;">
              <div class="w-lg-50 me-3">
                <!-- Media -->
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="{{ asset('img/160x160/img10.jpg')}}" alt="Olabiyi Emmanuel">
                    </div>
                  </div>

                  <div class="flex-grow-1 ms-3">
                    <a class="text-white" href="blog-article.html">Olabiyi Emmanuel</a>
                  </div>
                </div>
                <!-- End Media -->

                <div class="mb-5">
                  <h2 class="h1 text-white">{{ App\Articles::find(2)->post_title }}</h2>
                </div>
                
                <a class="btn btn-primary btn-transition" href="{{route('blog.show',['id'=>2])}}">Read article <i class="bi-chevron-right small ms-1"></i></a>
              </div>
            </div>
            <!-- End Container -->
          </div>

          <div class="swiper-slide d-flex gradient-x-overlay-sm-dark bg-img-start" style="background-image: url( {{asset('img/1920x1080/'.App\Articles::find(2)->body_img) }} ); min-height: 40rem;">
            <!-- Container -->
            <div class="container d-flex align-items-center" style="min-height: 40rem;">
              <div class="w-lg-50 me-3">
                <!-- Media -->
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="{{ asset('img/160x160/img10.jpg') }}" alt="Image Description">
                    </div>
                  </div>

                  <div class="flex-grow-1 ms-3">
                    <a class="text-white" href="#">Olabiyi Emmanuel</a>
                  </div>
                </div>
                <!-- End Media -->

                <div class="mb-5">
                  <h2 class="h1 text-white">{{ App\Articles::find(1)->post_title }}</h2>
                </div>
                
                <a class="btn btn-primary btn-transition" href="{{route('blog.show',['id'=>1])}}">Read article <i class="bi-chevron-right small ms-1"></i></a>
              </div>
            </div>
            <!-- End Container -->
          </div>

          <div class="swiper-slide d-flex gradient-x-overlay-sm-dark bg-img-start" style="background-image: url({{ asset('img/1920x1080/img9.jpg')}} ); min-height: 40rem;">
            <!-- Container -->
            <div class="container d-flex align-items-center" style="min-height: 40rem;">
              <div class="w-lg-50 me-3">
                <!-- Media -->
                <div class="d-flex align-items-center mb-3">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="{{ asset('img/160x160/img4.jpg') }}" alt="Image Description">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <a class="text-white" href="#">Christopher Victor</a>
                  </div>
                </div>
                <!-- End Media -->

                <div class="mb-5">
                  <h2 class="h1 text-white">How Google Assistant now helps you record stories</h2>
                </div>
                
                <a class="btn btn-primary btn-transition" href="blog-article.html">Read article <i class="bi-chevron-right small ms-1"></i></a>
              </div>
            </div>
            <!-- End Container -->
          </div>
        </div>

        <!-- Swiper Pagination -->
        <div class="js-swiper-blog-journal-hero-pagination swiper-pagination swiper-pagination-light swiper-pagination-vertical swiper-pagination-middle-y-end me-3 d-lg-none"></div>
      </div>
      <!-- End Swiper Main Slider -->

      <!-- Swiper Thumbs Slider -->
      <div class="d-none d-lg-block container translate-middle-y position-absolute top-50 start-0 end-0 zi-2">
        <div class="translate-middle-y position-absolute top-50 end-0">
          <div class="js-swiper-blog-journal-hero-thumbs swiper" style="opacity:0;max-width: 13rem;">
            <div class="swiper-wrapper">
              <!-- Slide -->
              <div class="swiper-slide swiper-pagination-progress swiper-pagination-progress-light py-3">
                <p class="text-white">Front Interview with a Lead Designer of the Hubble</p>

                <div class="swiper-pagination-progress-body">
                  <div class="js-swiper-pagination-progress-body-helper swiper-pagination-progress-body-helper"></div>
                </div>
              </div>
              <!-- End Slide -->

              <!-- Slide -->
              <div class="swiper-slide swiper-pagination-progress swiper-pagination-progress-light py-3">
                <p class="text-white">Front Corporate - let's work together</p>

                <div class="swiper-pagination-progress-body">
                  <div class="js-swiper-pagination-progress-body-helper swiper-pagination-progress-body-helper"></div>
                </div>
              </div>
              <!-- End Slide -->

              <!-- Slide -->
              <div class="swiper-slide swiper-pagination-progress swiper-pagination-progress-light py-3">
                <p class="text-white">How Google Assistant now helps you record stories</p>

                <div class="swiper-pagination-progress-body">
                  <div class="js-swiper-pagination-progress-body-helper swiper-pagination-progress-body-helper"></div>
                </div>
              </div>
              <!-- End Slide -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Swiper Thumbs Slider -->
    </div>
    <!-- End Hero -->



<!-- Card Grid -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-8 mb-10 mb-lg-0">
          <div class="d-grid gap-7 mb-7">
            <!-- Card -->
			
			
			@foreach($articlesModel as $post)

            <div class="card card-flush card-stretched-vertical">
              <div class="row">
                <div class="col-sm-5">
                  <img class="card-img" src="{{ asset('img/1920x1080/'.$post->body_img) }}" alt="{{$post->post_title}}">
                </div>
                <!-- End Col -->

                <div class="col-sm-7">
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="mb-2">
                      <a class="card-link" href="{{route('blog.cat',['cat'=>$post->category]) }}">{{ ucfirst($post->category) }}</a>
                    </div>

                    <h3 class="card-title">
                      <a class="text-dark" href="{{route('blog.show',['id'=>$post->id]) }}">{{ $post->post_title }}</a>
                    </h3>
                    
                    <p class="card-text">{{ $post->intro}}</p>
                    
                    <!-- Card Footer -->
                    <div class="card-footer">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <a class="avatar avatar-circle" href="#">
                            <img class="avatar-img" src="{{ asset('img/'.$userInstance->find($post->author)->profile_img) }}" alt="Image Description">
						  </a>
                        </div>
                      
                        <div class="flex-grow-1 ms-3" style="line-height:30px;">
                          <a class="card-link link-dark" href="{{route('blog.authors.posts',['id'=>$post->author])}}"><small>{{ App\User::find($post->author)->username }}</small></a>
                          <p class="card-text small"><small>{{ date('F d, Y, H:i:s a', strtotime($post->created_at)) }}</small></p>
                        </div>
                      </div>
                    </div>
                    <!-- End Card Footer -->
                  </div>
                  <!-- End Card Body -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Card -->
			
			@endforeach

          <!-- Sticky Block End Point -->
          <div id="stickyBlockEndPoint"></div>

          <!-- Pagination -->
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="bi-chevron-double-left small"></i>
                  </span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="bi-chevron-double-right small"></i>
                  </span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Pagination -->
        </div>
        <!-- End Col -->
</div>
			
        <div class="col-lg-3">
          <div class="mb-7">
            <div class="mb-3">
              <h3>Newsletter</h3>
            </div>

            <!-- Form -->
            <form>
              <div class="mb-2">
                <input type="text" class="form-control" placeholder="Enter email" aria-label="Enter email">
              </div>
              <div class="d-grid">
                <button type="button" class="btn btn-primary">Subscribe</button>
              </div>
            </form>
            <!-- End Form -->

            <p class="form-text">Get special offers on the latest developments from Front.</p>
          </div>

          <div class="mb-7">
            <div class="mb-3">
              <h3>Productivity</h3>
            </div>

            <!-- List Group -->
            <ul class="list-group list-group-lg">
              <!-- Item -->
              <li class="list-group-item">
                <a href="#">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="mb-1">Here's how to dodge distractions</h5>
                      <p class="text-body small mb-0">Feb 08, 2020</p>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <i class="bi-chevron-right"></i>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </a>
              </li>
              <!-- End Item -->

              <!-- Item -->
              <li class="list-group-item">
                <a href="#">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="mb-1">Ideas to stay productive</h5>
                      <p class="text-body small mb-0">Feb 09, 2020</p>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <i class="bi-chevron-right"></i>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </a>
              </li>
              <!-- End Item -->

              <!-- Item -->
              <li class="list-group-item">
                <a href="#">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="mb-1">Classic design principles</h5>
                      <p class="text-body small mb-0">Feb 10, 2020</p>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <i class="bi-chevron-right"></i>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </a>
              </li>
              <!-- End Item -->
            </ul>
            <!-- End List Group -->
          </div>

          <!-- Sticky Block Start Point -->
          <div id="stickyBlockStartPoint"></div>

          <div class="js-sticky-block"
               data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "targetSelector": "#header",
                 "breakpoint": "md",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 80
               }'>
            <div class="mb-7">
              <div class="mb-3">
                <h3>Front culture</h3>
              </div>

              <div class="d-grid gap-2">
                <!-- Card -->
                <a class="d-block" href="blog-article.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-lg">
                        <img class="avatar-img" src="assets/img/320x320/img1.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Announcing a free plan for small teams</h5>
                    </div>
                  </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="d-block" href="blog-article.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-lg">
                        <img class="avatar-img" src="assets/img/320x320/img10.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Mapping the first family tree for Front office</h5>
                    </div>
                  </div>
                </a>
                <!-- End Card -->
                
                <!-- Card -->
                <a class="d-block" href="blog-article.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-lg">
                        <img class="avatar-img" src="assets/img/320x320/img9.jpg" alt="Image Description">
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Felling eyeing first major Classic win in 2018</h5>
                    </div>
                  </div>
                </a>
                <!-- End Card -->
              </div>
            </div>

            <div class="mb-7">
              <div class="mb-3">
                <h3>Tags</h3>
              </div>

              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Business</a>
              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Adventure</a>
              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Community</a>
              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Announcements</a>
              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Tutorials</a>
              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Resources</a>
              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Classic</a>
              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Photography</a>
              <a class="btn btn-soft-secondary btn-xs mb-1" href="#">Interview</a>
            </div>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->



</main>

  
@endsection