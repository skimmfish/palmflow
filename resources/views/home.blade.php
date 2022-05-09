{{-- Unauthorized page --}}

@extends('layouts.plain_header')
@section('content')

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Content -->
    <div class="container text-center">
      <div class="mb-3">
        <img class="img-fluid" src="{{ asset('svg/illustrations/oc-error.svg') }}" alt="404 page" style="width: 30rem;">
      </div>

 <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-warning">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

      <div class="mb-4">
        <p class="fs-3 mb-0">Oops! You are not authorized to view this page</p>
        <p class="fs-3">If you think this is a problem with us, please <a class="link" href="{{ route('contact-us') }}">Reach out to us</a>.</p>
      </div>
@if(!Auth::user()->is_admin)
      <a class="btn btn-primary" href="{{route('admin.dashboard.index')}}" style="background-color:#0d2345;border-radius:50px;border:0;height:auto;padding:20px 35px 20px 35px"> <i class="bi-chevron-left small ms-1"></i> Go back</a>
@else
<a class="btn btn-primary" href="{{route('admin.dashboard.core-admin.index')}}" style="background-color:#0d2345;border-radius:50px;border:0;height:auto;padding:20px 35px 20px 35px"> <i class="bi-chevron-left small ms-1"></i> Go back</a>
    @endif
</div>
    <!-- End Content -->
  </main>

@endsection
