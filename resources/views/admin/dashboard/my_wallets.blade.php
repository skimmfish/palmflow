@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')

 <!-- view user modal -->
    <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
				
                <div class="modal-header">
                    <button type="button" id="closeModal" onClick="closeModal('#walletModal')" class="close" data-dismiss="modal" aria-label="Close" style="border-radius:50%;width:35px;height:35px;border:0;color:#0d2453">
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

 <div class="row">

			<div class="container"> @if (session('message'))   <div class="alert alert-success alert-note-style">  {{ session('message') }}</div>@endif</div>

<!--showing last 6 transactions-->

		<div class="col-6 pull-left"><h5 style="margin:20px 0 20px 0">My Wallets 
		<a href="#" data-attr="{{ route('admin.dashboard.new-wallet') }}" data-toggle="modal" id="walletButton" data-target="#walletModal" class="text-xs"><u>Add New Wallet</u></a></h5></div>			
			<br/>
				
		 <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of all your wallets</small><br/><br/>
				  
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr><th>S/n</th>
				  <th>Wallet Name</th>
				  <th>Wallet ID</th>
				  <th>Date Added</th>
				  <th>Action</th>
				  </tr>
				  </thead>
				   
				  <tbody>
				
				 
				 @foreach($wallets as $trx)
				  <tr>
					<td>{{ $id++ }}</td>
				  <td>{{ $trx->wallet_identifier }}</td>
				  <td>{{ $trx->wallet_id }}</td>
				  <td>{{ date('d F Y, H:i:S A',strtotime($trx->created_at)) }}</td>
				  
				  <td>@if($trx->use_for_withdrawal==false)
					  <a href="#" data-attr="{{route('admin.dashboard.walletmodifier',['id'=>$trx->id])}}" data-target="#walletModal"  id="walletButton" class="text-primary text-xs">Make Default?</a> @else
				  <a id="checkWallet" class="text-success text-xs">Default</a>	  @endif
			  	 | <a data-attr="" data-target=""  id="editWallet" class="text-warning text-xs">Edit</a>	  
				</td>
			  
				  @endforeach
				  </tr>
				  </tbody>
				 
					<tfoot>
					 <tr><th>S/n</th>
				  <th>Wallet Name</th>
				  <th>Wallet ID</th>
				  <th>Date Added</th>
				  <th>Action</th>
				  </tr>
				  </tfoot>
				  </table>
               	 {!! $wallets->links('vendor.pagination.bootstrap-4') !!}
				</div>
				
              </div>
            </div>


@endsection