@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')


<div class="row">

<div class="container"> @if (session('message'))   <div class="alert alert-success alert-note-style">  {{ session('message') }}, 
</div>@endif</div>

      <div class="row">
      <div class="col-6"><h5 style="margin:20px 0 20px 0">MT4 Account Holders</h5></div>
      </div>
      
      <br/><Br/>
@if(count($allsubs)>0)
<div class="col-12">

  <div class="card mb-3 btn-reveal-trigger">
    <div class="card-header position-relative min-vh-25 mb-12">
        <div class="row">
      <div class="col-9"><small style="font-size:11.5px;color:#0d2453;font-weight:600;">Here is a list of trading accounts registered for management - @if(sizeof(\App\MT4Dashboard::withTrashed()->get())>0) <a href="{{route('admin.dashboard.core-admin.showtrashedacct')}}" class="text-tiny">Show Trashed Accounts</a> @endif</small></div><br/><br/>
      <div class="col-6">
           </div>
    </div>
      <table class="table table-responsive table-bordered table_rws">
      <thead>
      <tr><th>S/N</th>
      <th>Account Name</th>
      <th>Account Number</th>
      <th>Broker</th>
      <th>Platform Type</th>
      <th>Server</th>
      <th>Leverage</th>
      <th>Date Created <hr/> Last Updated</th>
      <th>Actions</th>
      </tr>
      </thead>
       
      <tbody>
    
     
     @foreach($allsubs as $s)
      <tr>
        <td>{{ $id++ }}</td>
      <td>{{ $s->account_name }}</td>
      <td>{{ $s->account_number }}</td>
      <td>{{ $s->broker_name }}</td>
      <td>{{ $s->platform_type }}</td>
      <td>{{ $s->mt4_server }}</td>
      <td> {{ $s->leverage }} </td>
      <td><span class="text-info">{{ date('d F Y, H:i:s a', strtotime($s->created_at)) }}</span> <hr/>
      <span class="text-success">{{ date('d F Y, H:i:s a', strtotime($s->updated_at)) }}</span>
      </td>
        <td>
        <a href="#" class="text-danger" data-attr="{{route('load_delete_modal',['id'=>$s->id])}}" id="deleteMt4" data-toggle="modal" data-target="#deleteAcctModal">Delete Account</a> | 
        <a href="#" data-attr="{{route('admin.dashboard.view_history',['id'=>$s->id])}}" id="view_history" data-target="#deleteAcctModal" class="text-primary">View History</a>
        </td>
      @endforeach
      </tr>
      </tbody>
     
        <tfoot>
      <tr><th>S/N</th>
      <th>Account Name</th>
      <th>Account Number</th>
      <th>Broker</th>
      <th>Platform</th>
      <th>Server</th>
      <th>Leverage</th>
      <th>Date Created <hr/> Last Updated</th>
      <th>Actions</th>
      </tr>
    </tr>
    </tfoot>
      </table>
         {!! $allsubs->links('vendor.pagination.bootstrap-4') !!}
    </div>
    
  </div>
</div>
</div>
@else
<div><hr/><p class="alert alert-info">Oops! You don't have any stakings registered yet, kindly <a href="{{route('admin.dashboard.fund_wallet')}}"><u>fund your wallet here</u></a></p></div>
    @endif


<!--modal for deleting accounts-->
			 <!-- delete mt4 account stake modal -->
             <div class="modal fade" id="deleteAcctModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
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

