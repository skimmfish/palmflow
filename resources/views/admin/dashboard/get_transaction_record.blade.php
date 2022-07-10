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