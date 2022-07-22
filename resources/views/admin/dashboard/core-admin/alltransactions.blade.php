@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')

<div class="row">
			
			<!--navigation row-->
			
		 <div class="row-fluid">
          	@include('flash::message')

<!--showing last 6 transactions-->

                  <h5 style="margin:20px 0 20px 0">Transaction History</h5><br/><Br/>
				

<!--Here comes the filtering table for the withdrawal history-->
					<form method="GET">
                        {{ csrf_field() }}
						<input type="hidden" name="user_id" value="NULL" />
						<input type="hidden" name="stype" value="transactions" />
                   
                    <div class="row padding_bottom_20">
                     <div class="col-3"><label class="form-label">Start Date</label>
					 <input type="date" name="start_at" class="form-control input-sm" placeholder="Start Date"/></div>
                     <div class="col-3"><label class="form-label">End Date</label>
					 <input type="date" name="ends_at" class="form-control input-sm" placeholder="End Date"/>
					</div>

					<div class="col-2"><label class="form-label">Transaction Type</label>
					 <select name="transaction_type" class="form-control input-sm">
					<option>Select Type</option>
					<option value="withdrawals">Withdrawals</option>
					<option value="funding">Funding</option>
					<option value="wallet_reserve_staking">Wallet Reserve Staking</option>
				</select>
					</div>


					 <div class="col-2" style="margin-top:-5px;">

					 OR 
                         <label>Select period</label>
                         <select name="date_filter" class="form-control input-md filterbyperiod" onChange="fetchRecordsByPeriod(this.value,user_id.value+'_'+stype.value)">
                        <option value="today">Select Period</option>
                         <option value="today">Today</option>
                             <option value="last_7">Last Week (Last 7 Days)</option>
                             <option value="last_30">Last Month (Last 30 days)</option>
							 <option value="last_90_days">Last 3 Months (Last 90 Days)</option>

                    </select></div>
                     <div class="col-2 margin-35">
		<button type="button" class="btn btn-primary btn-round" id="fetch" onClick='fetchRecordsAll(start_at.value, ends_at.value, user_id.value+"_"+stype.value)' name="fetch">Search <i class="fa fa-search"></i></button></div>
                    </div>
                    </form><br/>

		 <div class="col-12 margin-35">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of all transactions paginated in record of 40s</small><br/><br/>
				  <div id="txnTable">
				  <table class="table table-responsive table-border table_rws">
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
				
				 
				 @foreach($transactions as $trx)
				  <tr>
					<td>{{ $id++ }}</td>
				  <td>{{ $trx->transaction_id }}</td>
				  <td>{{ $trx->trx_amount }}</td>
				  
				  <td><span class="text-black"><a href="{{ $trx->explorer_url }}" target="_blank">Explore Transaction</a></span></td>
				  <td><span class="text-warning">{{ Illuminate\Support\Str::limit($trx->originating_wallet_id,20) }}</span></td>
				  <td><span class="text-info">{{ $trx->transaction_type }}</span></td>
				  <td>{{$trx->comments}}</td>
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
				  <th>Comments</th>
				  <th>Date</th>
				 <th>Txn Status</th>
				  </tfoot>
				  </table>
                	 {!! $transactions->links('vendor.pagination.bootstrap-4') !!}
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