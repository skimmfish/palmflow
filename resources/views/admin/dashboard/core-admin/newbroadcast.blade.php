@extends('layouts.admin_app')
@section('content')
@include('layouts.admin_topbar')



<h6>New Message Broadcast</h6>
<small class="text-tiny">Send a general broadcast to all users of the platform. <br/>
<b class="text-sm text-primary">Enter <b>'all'</b> in the 'To' field if the goal is to send broadcast to all active users of the platform </b>
</small>
<br/>
<br/>

<form class="card" method="POST" action="{{route('send_broadcast')}}">
    @csrf
            <div class="card-header bg-light">
              <h5 class="mb-0">New Broadcast E-mail</h5>
            </div>
            <div class="card-body p-0">
              <div class="border border-top-0 border-200">
                <input class="form-control border-0 rounded-0 outline-none px-card" id="email-to" name="recipient" type="text" aria-describedby="email-to" placeholder="To" /></div>
              <div class="border border-y-0 border-200">
                <input class="form-control border-0 rounded-0 outline-none px-card" id="email-subject" name="subject" value="{{old('subject')}}" type="text" aria-describedby="email-subject" placeholder="Subject" /></div>
              <div class="min-vh-50"><textarea class="tinymce d-none" name="message" placeholder="Your message goes here"></textarea></div>
              <div class="bg-light px-card py-3">
               </div>
            </div>
            <div class="card-footer border-top border-200 d-flex flex-between-center">
              <div class="d-flex align-items-center"><button class="btn btn-primary btn-sm px-5 me-2" type="submit">Send</button><input class="d-none" id="email-attachment" type="file" /><label class="me-2 btn btn-light btn-sm mb-0 cursor-pointer" for="email-attachment" data-bs-toggle="tooltip" data-bs-placement="top" title="Attach files"><span class="fas fa-paperclip fs-1" data-fa-transform="down-2"></span></label><input class="d-none" id="email-image" type="file" accept="image/*" /><label class="btn btn-light btn-sm mb-0 cursor-pointer" for="email-image" data-bs-toggle="tooltip" data-bs-placement="top" title="Attach images"><span class="fas fa-image fs-1" data-fa-transform="down-2"></span></label></div>
              <div class="d-flex align-items-center">
                <div class="dropdown font-sans-serif me-2 btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" id="email-options" type="button" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-v" data-fa-transform="down-2"></span></button>
                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-options"><a class="dropdown-item" href="#!">Print</a><a class="dropdown-item" href="#!">Check spelling</a><a class="dropdown-item" href="#!">Plain text mode</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a>
                  </div>
                </div><button class="btn btn-light btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"> <span class="fas fa-trash"></span></button>
              </div>
            </div>
          </form>


@endsection