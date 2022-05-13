@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')



<div class="row">
			
			<!--navigation row-->
			
		 <div class="row-fluid">
          	@include('flash::message')

<!--showing last 6 transactions-->

                  <h5 style="margin:20px 0 20px 0">Transaction History</h5><br/><Br/>
				
		 <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of all transactions paginated in record of 40s</small><br/><br/>
				  
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr><th>S/n</th>
				  <th>Transaction ID</th>
				  <th>Amount (USDT)</th>
				  <th>Check Transaction</th>
				  <th>Origin/Receiving Wallet</th>
				  <th>Transaction <br/> Type</th>
				  <th>Date</th>
				  <th>Txn Status</th>
				  </tr>
				  </thead>
				   
				  <tbody>
				
				 
				 @foreach($transactions as $trx)
				  <tr>
					<td>{{ $id++ }}</td>
				  <td>{{ $trx->transaction_id }}</td>
				  <td>{{ $trx->trx_amount }}</td>
				  
				  <td><span class="text-black"><a href="{{ $trx->explorer_url }}" target="_blank">Explore Transaction</a></span></td>
				  <td><span class="text-warning">{{ Illuminate\Support\Str::limit($trx->originating_wallet_id,20) }}</span></td>
				  <td><span class="text-info">{{ $trx->transaction_type }}</span></td>
				  <td><span class="text-info">{{ date('d F Y, H:i:s a', strtotime($trx->created_at)) }}</span></td>
				  
				  <td> @if($trx->trxn_complete_status) 
					   <span class="text-success"><u>Completed</u></span> 
				  @else 
					' <i class="text-danger">Incomplete</i><Br/>
					  <a href="#" data-attr="{{ route('admin.dashboard.view-transaction',['id'=>$trx->id]) }}" data-toggle="modal" id="smallButton" data-target="#transactionmodal" class="text-warning"><u>Query Txn</u></a>
					 @endif
					</td>
				  @endforeach
				  </tr>
				  </tbody>
				 
					<tfoot>
				  <th>S/n</th>
				  <th>Transaction ID</th>
				  <th>Amount (USDT)</th>
				  <th>Txn Hash</th>
				  <th>Origin/Receiving Wallet</th>
				  <th>Transaction Type</th>
				  <th>Date</th>
				 <th>Txn Status</th>
				  </tfoot>
				  </table>
                	 {!! $transactions->links('vendor.pagination.bootstrap-4') !!}
				</div>
				
              </div>
            </div>
		
			
		 <!-- view user modal -->
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