@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')
			
			<!--navigation row-->
			
		 <div class="row">
          	@include('flash::message')

<!--showing last 6 transactions-->

                  <h5 style="margin:20px 0 20px 0">Transaction History</h5><br/><Br/>

				  <form method="GET">                  
				  {{ csrf_field() }}
						<input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
						<input type="hidden" name="stype" value="transactions" />
						<div class="row padding_bottom_20">
				     
                     <div class="col-3"><label class="form-label">Start Date</label>
					 <input type="date" name="start_at" class="form-control input-sm" placeholder="Start Date"/>
					</div>
                    
					<div class="col-3"><label class="form-label">End Date</label>
					 <input type="date" name="ends_at" class="form-control input-sm" placeholder="End Date"/>
					</div>
                     <div class="col-3 margin-35"><button type="button" class="btn btn-primary btn-round" id="fetch" onClick="fetchRecordsAll(start_at.value,ends_at.value,user_id.value+'_'+stype.value)" name="fetch">Search <i class="fa fa-search"></i></button></div>
				</div>
					</form>
					<form method="GET">
						@csrf
					<div class="col-3" style="margin-top:-5px;">
						OR 
                         <label>Select period</label>
                         <select name="date_filter" class="form-control input-md filterbyperiod" onChange="fetchRecordsByPeriod(this.value,user_id.value)" onSelect="fetchRecordsByPeriod(this.value,user_id.value)" onClick="fetchRecordsByPeriod(this.value,user_id.value)">
    	                    <option value="today">Select an option</option>
	                         <option value="today">Today</option>
                             <option value="last_7">Last Week (Last 7 Days)</option>
							 <option value="last_30">Last Month (Last 30 days)</option>
							 <option value="last_90_days">Last 3 Months (Last 90 Days)</option>

                    </select>
				</div>
				</form>
                    					
					<br/>

 @if(count($Transactions)>0)
		 <div class="col-12 margin-35" style="margin-top">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of your transactions paginated in record of 20s</small><br/><br/>
		
				  <div id="txnTable">
				  
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr><th>S/n</th>
				  <th>Transaction ID</th>
				  <th>Amount (USDT)</th>
				  <th>Check Transaction</th>
				  <th>Origin/Receiving Wallet</th>
				  <th>Transaction <br/> Type</th>
				  <th>Comments</th>
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
				  
				  <td><span class="text-black"><a href="{{ $trx->explorer_url }}">Check Transaction</a></span></td>
				  <td><span class="text-warning">{{ Illuminate\Support\Str::limit($trx->originating_wallet_id,15) }}</span></td>
				  <td><span class="text-info">{{ $trx->transaction_type }}</span></td>
					<td>{{ $trx->comments }}</td>
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
				  <th>Origin/Receiving Wallet</th>
				  <th>Transaction Type</th>
				  <th>Comments</th>
				  <th>Date</th>
				 <th>Txn Status</th>
				  </tfoot>
				  </table>
                
				  {!! $Transactions->links('vendor.pagination.bootstrap-4') !!}
</div>
				</div>
				
              </div>
            </div>
            </div>
		@else
		<div><hr/><p class="alert alert-info">Oops! You don't have any transactions recorded yet</p></div>
				@endif


@endsection