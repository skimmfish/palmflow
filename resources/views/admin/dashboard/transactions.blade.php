@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')
			
			<!--navigation row-->
			
		 <div class="row">
          	@include('flash::message')

<!--showing last 6 transactions-->

                  <h5 style="margin:20px 0 20px 0">Transaction History</h5><br/><Br/>

 @if(count($Transactions)>0)
		 <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of your transactions paginated in record of 20s</small><br/><br/>
				  
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr><th>S/n</th>
				  <th>Transaction ID</th>
				  <th>Amount (USDT)</th>
				  <th>Txn Hash</th>
				  <th>Originating <br/> Wallet</th>
				  <th>Transaction <br/> Type</th>
				  <th>Date</th>
				  <th>Txn Status</th>
				  </tr>
				  </thead>
				   
				  <tbody>
				
				 
				 @foreach($Transactions as $trx)
				  <tr>
					<td>{{ $id++ }}</td>
				  <td>{{ $trx->transaction_id }}</td>
				  <td>{{ $trx->trx_amount }}</td>
				  
				  <td><span class="text-black">{{ Illuminate\Support\Str::limit($trx->transaction_hash,20) }}</span></td>
				  <td><span class="text-warning">{{ Illuminate\Support\Str::limit($trx->originating_wallet_id,15) }}</span></td>
				  <td><span class="text-info">{{ $trx->transaction_type }}</span></td>
				  <td><span class="text-info">{{ date('d F Y, H:i:s a', strtotime($trx->created_at)) }}</span></td>
				  
				  <td> <?php if(($trx->trxn_complete_status)==1){echo ' <u class="text-success">Completed</u>'; }else{ echo '<i class="text-danger">Incomplete</i><Br/><a href="#" data-href="" id="query_txn" class="text-warning"><u>Query Txn?</u></a>'; } ?>	  </td>
				  @endforeach
				  </tr>
				  </tbody>
				 
					<tfoot>
				  <th>S/n</th>
				  <th>Transaction ID</th>
				  <th>Amount (USDT)</th>
				  <th>Txn Hash</th>
				  <th>Originating <br/> Wallet</th>
				  <th>Transaction Type</th>
				  <th>Date</th>
				 <th>Txn Status</th>
				  </tfoot>
				  </table>
                	 {!! $Transactions->links('vendor.pagination.bootstrap-4') !!}
				</div>
				
              </div>
            </div>
            </div>
		@else
		<div><hr/><p class="alert alert-info">Oops! You don't have any transactions recorded yet</p></div>
				@endif


@endsection