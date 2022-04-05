@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')



<div class="row">
			
			<!--navigation row-->
			
		 <div class="row">
          
		     <div class="container"> @if (session('message'))   <div class="alert alert-info text-sm" style="font-family:'Spartan','Brandon Grotesque';font-size:13px;">  {{ session('message') }}</div>@endif</div>
         

<!--showing last 6 transactions-->

                  <h5 style="margin:20px 0 20px 0">Registered Users and Contributors</h5>
				
		 <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Herein lies all users in the portal, investors and contributors with their statuses</small><br/>
				  
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr>
				  <th>S/n</th>
				  <th>Username</th>
				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>Address <hr/> Phone Number</th>
				  <th>Admin Status</th>
				  <th>Date Registered</th>
				  <th>Last Login</th>
				  <th>Action</th>
				  </tr>
				  </thead>
				   
				  <tbody>
				
				 
				 @foreach($users as $u)
				  <tr>
					<td>{{ $id++ }}</td>
					<td><a href="#" id="userPropModal" data-href="userpropmodal" class="text-dark">{{ $u->username }}</a></td>
						{{-- <td>{{ App\User::with>first()->first_name }} </td> --}}
					<td>{{-- App\Profile::myProfile($u->id) --}} </td>
					<td>{{ $u->last_name }} </td>
					<td> </td>
					<td>@if($u->is_admin) {{'Admin'}} @else {{ 'Contributor' }} @endif </td>
					<td>{{ date('d F Y, h:i:s A', strtotime($u->created_at)) }}</td>
					<td>{{ $u->last_login }}</td>
					<td>
					<a href="#" data-href="{{route('admin.dashboard.core-admin.viewuser',['id'=>$u->id])}}">View User</a>
					
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
				  <th>Date Registered</th>
				  <th>Last Login</th>
				  <th>Action</th>
				  
				  </tr>
				  </tfoot>
				  </table>
                	 {!! $users->links('vendor.pagination.bootstrap-4') !!}
				</div>
				
              </div>
            </div>
		

@endsection