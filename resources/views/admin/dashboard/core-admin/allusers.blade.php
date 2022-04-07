@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')



<div class="row">
			
			<!--navigation row-->
			
		 <div class="row">
          
		     <div class="container"> @if (session('message'))   <div class="alert alert-info text-sm" style="font-family:'Spartan','Brandon Grotesque';font-size:13px;">  {{ session('message') }}</div>@endif</div>
         

<!--showing last 6 transactions-->

                  <h5 style="margin:20px 0 20px 0">Registered Users and Contributors</h5>
				
	
              <div class="card mb-12 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Herein lies all users in the portal, investors and contributors with their statuses</small><br/>
				  
				  <table class="table table-responsive table-bordered table_rws" style="width:auto;overflow-x:auto;">
				  <thead>
				  <tr>
				  <th>S/n</th>
				  <th>Username</th>
				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>Address <hr/> Phone Number</th>
				  <th>Admin Status</th>
				  <th>Profile Img</th>
				  <th>Date Registered</th>
				 
				  <th>Action</th>
				  </tr>
				  </thead>
				   
				  <tbody>
				
				 
				 @foreach($profiles as $u)
				  <tr>
					<td>{{ $id++ }}</td>
					<td><a href="#" data-attr="{{route('viewuser',['id'=>$u->id])}}" data-toggle="modal" id="smallButton" data-target="#userModal" 
					class="text-dark">{{App\Profile::find($u->id)->user->username }} </a></td>
						<td>{{ $u->first_name }} </td>
						<td>{{ $u->last_name }} </td>
						<td> {{$u->telephone  }}</td>
						<td>@if( App\Profile::find($u->id)->user->is_admin ) {{'Admin'}} @else {{ 'Contributor' }} @endif </td>
						<td><img src="{{asset('img/160x160/'.$u->profile_img) }}" class="img-responsive img-round center" style="display:block;margin:auto;" lazyload></td>
						<td>{{ date('d F Y, h:i:s A', strtotime($u->created_at)) }}</td>
					
					<td>
					<a href="#" data-attr="{{ route('viewuser',['id'=>$u->id]) }}" data-toggle="modal" id="smallButton" data-target="#userModal">View</a>
					
					<form action="{{route('admin.dashboard.core-admin.deleteuser',['id'=>$u->id]) }}" method="POST">
					@csrf 
					@method('delete')
					<button type='submit' class="text-danger btn-orderless" onclick="">Delete</button>
					</form>
					
					</td>
					
				  </tr>
				  @endforeach

				  </tbody>
				 
					<tfoot>
				  <tr>
				  <th>S/n</th>
				  <th>Username</th>
				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>Address <hr/> Phone Number</th>
				  <th>Admin Status</th>
				  <th>Profile Img</th>
				  <th>Date Registered</th>
				 
				  <th>Action</th>
				  
				  </tr>
				  </tfoot>
				  </table>
                	 {!! $profiles->links('vendor.pagination.bootstrap-4') !!}
				</div>
				
              </div>
           
		
		
		 <!-- view user modal -->
    <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
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