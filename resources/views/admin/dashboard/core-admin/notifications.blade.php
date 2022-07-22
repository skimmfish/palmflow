@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')

<div class="card mb-3">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col d-flex align-items-center">
                  <div class="form-check mb-0 d-none d-sm-block"><input class="form-check-input checkbox-bulk-select" type="checkbox" data-bulk-select='{"body":"emails","actions":"emails-actions"}' /></div><button class="btn btn-falcon-default btn-sm ms-sm-1" type="button" onclick="location.reload()"><span class="fas fa-redo"></span></button>
                  <div class="dropdown font-sans-serif"><button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none ms-2" type="button" id="email-filter" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sliders-h"></span></button>
                    <div class="dropdown-menu border py-0" aria-labelledby="email-filter">
                      <div class="bg-white dark__bg-dark py-2"><a class="dropdown-item d-flex justify-content-between" href="#!">All<span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></a><a class="dropdown-item" href="#!">Unread</a><a class="dropdown-item" href="#!">To me</a><a class="dropdown-item" href="#!">Flagged</a><a class="dropdown-item" href="#!">Mentions</a><a class="dropdown-item" href="#!">Attachments</a></div>
                    </div>
                  </div>
                  <div class="border-start ms-3 ps-3 d-none" id="emails-actions">
                    <div class="btn-group btn-group-sm"><button class="btn btn-falcon-default" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></button><button class="btn btn-falcon-default" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></button><button class="btn btn-falcon-default" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"><span class="fas fa-envelope"></span></button><button class="btn btn-falcon-default" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze"><span class="fas fa-clock"></span></button></div>
                  </div>
                </div>
                <div class="col-auto">
                  <a class="btn btn-falcon-primary btn-sm" href="{{route('admin.dashboard.core-admin.general_broadcast')}}">
                  <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Compose</a></div>
              </div>
            </div>

            <div class="card-body fs--1 border-top border-200 p-0" id="emails">
              <h5 class="fs-0 px-3 pt-3 pb-2 mb-0 border-bottom border-200">Unread</h5>
              
              <div class="row border-bottom border-200 hover-actions-trigger hover-shadow py-2 px-1 mx-0 bg-white dark__bg-dark" data-href="email-detail.html">
                <div class="btn-group btn-group-sm z-index-2 hover-actions end-0 me-3" style="width: 10rem;"><button class="btn btn-light" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive">
                  <span class="fas fa-archive"></span></button>
                  <button class="btn btn-light" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></button>
                  <button class="btn btn-light" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read"><span class="fas fa-envelope-open"></span></button><button class="btn btn-light" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze"><span class="fas fa-clock"></span></button></div>
                <div class="col-auto d-none d-sm-block">
                  <div class="d-flex bg-white dark__bg-dark">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" id="checkbox-2" data-bulk-select-row="data-bulk-select-row" /></div>
                    <span class="fas text-warning fa-star ms-1" data-fa-transform="down-4"></span>
                  </div>
                </div>

                <!--BODY OF EMAIL STARTS FROM HERE-->
                @if(sizeof($notifications)>0)
                @foreach($notifications as $n)
                <div class="col col-md-9 col-xxl-10" style="margin-bottom:14px;">
                  <div class="row">
                    <div class="col-md-4 col-xl-3 col-xxl-2 ps-md-0 mb-1 mb-md-0">
                      <div class="d-flex position-relative">
                        <div class="avatar avatar-s">
                          <img class="rounded-soft img-round" style="border-radius:50% !important;width:25px;height:25px;" src="{{ asset('img/160x160/'.\App\Profile::get_profile_data($n->sender_id,'profile_img')) }}" alt="{{ asset('img/160x160/'.\App\User::get_profile_data($n->sender_id,'username')) }}" />
                        </div>
                        <div class="flex-1 ms-2"><a class="stretched-link inbox-link" data-attr="{{ route('viewuser',['id'=>$n->sender_id]) }}" id="smallButton" data-toggle="modal" data-target="#userModal">  {{ucfirst(\App\User::get_profile_data($n->sender_id,'username'))}} </a><span class="badge badge-soft-success badge-pill ms-2">NEW</span></div>
                      </div>
                    </div>
                    <div class="col"><a class="d-block inbox-link" href="{{route('admin.dashboard.core-admin.view-single',['id'=>$n->id])}}"><span class="fw-bold" style="font-size:11.5px;">{{$n->subject}}</span><span class="mx-1">&ndash;</span><span style="font-size:11.5px;">{{ \Illuminate\Support\Str::limit($n->note,24)}}</span></a></div>
                  </div>
                </div>

                <div class="col-auto ms-auto d-flex flex-column justify-content-between"><span class="text-xs">{{ date('M d', strtotime($n->created_at)) }}</span><span class="fas text-warning fa-star ms-auto mb-2 d-sm-none" data-fa-transform="down-7"></span></div>
              </div>
              <div class="row border-bottom border-200 hover-actions-trigger hover-shadow py-2 px-1 mx-0 bg-white dark__bg-dark" data-href="email-detail.html">
                <div class="btn-group btn-group-sm z-index-2 hover-actions end-0 me-3" style="width: 10rem;">
                <!--<button class="btn btn-light" type="button" data-bs-toggle="tooltip" data-bs-placement="top" 
                title="Archive"><span class="fas fa-archive"></span></button>-->
                <a href="{{route('delete_notification',['id'=>$n->id])}}" class="btn btn-light" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></a>
                <a class="btn btn-light" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read"><span class="fas fa-envelope-open"></span></a>
                <a class="btn btn-light" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Snooze">
                  <span class="fas fa-clock"></span></a>
                </div>
                <div class="col-auto d-none d-sm-block">
                  <div class="d-flex bg-white dark__bg-dark">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" id="checkbox-7" data-bulk-select-row="data-bulk-select-row" /></div><span class="far text-300 fa-star ms-1" data-fa-transform="down-4"></span>
                  </div>
                </div>

@endforeach 
@endif

                <!--
              <h5 class="fs-0 px-3 pt-3 pb-2 mb-0 border-bottom border-200">Everything else</h5>
              -->
            </div>
            </div>

            <div class="card-footer d-flex justify-content-between align-items-center"><small class="text-xs text-bold">E-mail Powered by OliveFireworks</small>
              <div>{!! $notifications->links('vendor.pagination.bootstrap-4') !!}</div>
              </div>
            </div>
          </div>
          

		 <!-- view notifications modal -->
     <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border-radius:50%;width:35px;height:35px;border:0;color:#0d2453;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    	 <!-- view transaction modal -->
		 <div class="modal fade" id="transactionmodal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"style="border-radius:50%;width:35px;height:35px;border:0;color:#0d2453;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
		

@endsection