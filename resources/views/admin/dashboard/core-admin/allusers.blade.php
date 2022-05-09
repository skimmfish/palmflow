@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')



<div class="row">
			
			<!--navigation row-->
			
		 <div class="row">
          
		     <div class="container"> @if (session('message'))   <div class="alert alert-info text-sm" style="font-family:'Spartan','Brandon Grotesque';font-size:13px;">  {{ session('message') }}</div>@endif</div>
         

<!--showing last 6 transactions-->

                  <h5 style="margin:20px 0 20px 0">@if($type=='all') Registered Users and Contributors @else Archived Users @endif</h5>
	
				  @if($type=='all')
	
              <div class="card mb-12 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				<small style="font-size:10.5px;color:#0d2453;font-weight:600;">Herein lies all users in the portal, investors and contributors with their statuses</small><br/>

				<table class="table table-responsive table-bordered table_rws" style="width:auto;overflow-x:auto;">
				  <thead>
				  <tr>
				  <th></th>
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
					<td><form action="" method="POST"><input type="checkbox"  name="select" /></form></td>
					<td><a href="#" data-attr="{{route('viewuser',['id'=>$u->id])}}" data-toggle="modal" id="smallButton" data-target="#userModal" 
					class="text-dark">{{App\Profile::find($u->id)->user->username }}</a></td>
						<td>{{ $u->first_name }} </td>
						<td>{{ $u->last_name }} </td>
						<td> {{$u->telephone  }}</td>
						<td>@if( App\Profile::find($u->id)->user->is_admin ) {{'Admin'}} @else {{ 'Contributor' }} @endif </td>
						<td><img src="@if($u->profile_img) {{asset('img/160x160/'.$u->profile_img) }} @else {{ asset('img/160x160/img1.jpg') }} @endif" class="img-responsive img-round center" style="display:block;margin:auto;" lazyload></td>
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
				  <th></th>
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

			</div>
</div>


{{-- for deleted users --}}

@elseif($type=='deleted')
@if(count($deletedprofiles)<=0)
<div class="row"><p class="alert alert-info">All users are active!</p></div>
@else

<div class="card mb-12 btn-reveal-trigger">
<div class="card-header position-relative min-vh-25 mb-12">
<small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here are the archived users</small><br/>

				<table class="table table-responsive table-bordered table_rws" style="width:auto;overflow-x:auto;">
				  <thead>
				  <tr>
				  <th></th>
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
				

@foreach($deletedprofiles as $u)
				<tbody>
				  <tr>
					<td><form action="" method="POST"><input type="checkbox"  name="select" /></form></td>
					<td>{{ $id++ }}</td>
					<td><a href="#" data-attr="{{route('viewuser',['id'=>$u->id])}}" data-toggle="modal" id="smallButton" data-target="#userModal" class="text-dark">{{ \App\User::get_deleted_user($u->user_id,'username') }}</a></td>
						<td>{{ $u->first_name }} </td>
						<td>{{ $u->last_name }} </td>
						<td> {{$u->telephone  }}</td>
						<td>
						@if( \App\User::get_deleted_user($u->user_id,'is_admin')) {{ 'Admin' }} @else {{ 'User' }} @endif
						</td>
						<td><img src="{{asset('img/160x160/'.$u->profile_img) }}" class="img-responsive img-round center" style="display:block;margin:auto;" lazyload></td>
						<td>{{ date('d F Y, h:i:s A', strtotime($u->created_at)) }}</td>
					
					<td>
					<a href="{{ route('admin.dashboard.core-admin.viewuser',['id'=>$u->id]) }}" data-toggle="modal" id="smallButton" data-target="#userModal">View</a>
					
					<form action="{{route('admin.dashboard.core-admin.deleteuser',['id'=>$u->id]) }}" method="POST">
					@csrf 
					@method('delete')
					<input type="hidden" name="delete_type" value="force_delete" />
					<button type='submit' class="text-danger btn-orderless" onclick="">Delete</button> </form> | 
					<a href="#" type="button" data-attr="{{route('confirmrestore',['id'=>$u->user_id,'profile_id'=>$u->id])}}" data-toggle="modal" id="smallButton" data-target="#userModal">Restore</a>
					<!-- <a href='{{ route("admin.dashboard.core-admin.user-restore",["id"=>$u->user_id,"profile_id"=>$u->id]) }}' type='submit' class="text-danger btn-orderless">Restore</a>-->					
					</td>					
				  </tr>				
				</tbody>
				  @endforeach 
					<tfoot>
				  <tr>
				  <th></th>
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
				  {{-- {!! $profiles->links('vendor.pagination.bootstrap-4') !!} --}}
				  @endif
				</div>
				
              </div>
             {{-- {!! $profiles->links('vendor.pagination.bootstrap-4') !!} --}}
@endif

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