@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')


<div class="row">
			
			<!--navigation row-->
			
		 <div class="col-5">
              <div class="card mb-3 btn-reveal-trigger">

				@include('flash::message')

			  
                <div class="card-header position-relative min-vh-25 mb-8">
                  <h6>Funding Your Wallet</h6>
				<p><ul>
				<li><small style="font-size:10px">To stake more of your coins, kindly send your tokens to the wallet ID below.</small></li>
				<li><small style="font-size:10px">It could take between one minute  to 24hrs before your payment reflects on our portal, kindly be patient.</small></li>
				<li><small style="font-size:10px">Your rebates for new stakings would be effected at exactly 24hrs + 22:00 UTC+1 after your payment reflects on our end. </small></li>
				<li><small style="font-size:10px;color:#ff0000;"><b>Be assured of the fact that you are helping humanity through this contributions and in we aren't taking your generousity for granted. Thank you. </b></small></li>
				</ul>
				
				<!--3d bar code for the crypto payment-->
				<div><span><small style="font-size:10px">Use the 2D bar code below to complete your transaction or use the wallet ID string below</small></span></div>
				<img src="{{asset('img/J6tFc.png')}}" alt="3d-bar code for our wallet" class="img-responsive"/>
				<div><b style="font-size:10px">Wallet ID: <u class="text-info">{{ App\CryptoAPIManager::find(1)->huobi_usdt_wallet_id }}</u></b></div>
				</p>
					
					{!! Form::open(['route' => 'transactions.store', 'method'=>'POST'], ['class' => 'form']) !!}
					@csrf
					{!! Form::label('trx_amount', 'Transaction Amount', ['class' => 'control-label', 'style'=>'font-size:10px;']) !!}
					{!! Form::text('trx_amount', null, [ 'class' => 'form-control input-md', 'placeholder' => 'How much did you send?','style'=>'font-size:10px;' ])  !!}
					
					{!! Form::label('transaction_hash', 'Transaction Hash', ['class' => 'control-label', 'style'=>'font-size:10px']) !!}
					{!! Form::text('transaction_hash', null, [ 'class' => 'form-control input-md', 'placeholder' => 'Paste your transaction hash here','style'=>'font-size:10px;' ])  !!}
					
					{!! Form::label('originating_wallet_id', 'Originating Wallet ID', ['class' => 'control-label', 'style'=>'font-size:10px']) !!}

					<input type="text" name="originating_wallet_id" class="form-control @error('originating_wallet_id') is-invalid @enderror" Placeholder="Your wallet ID goes here" value="{{ old('originating_wallet_id') }}" style="font-size:10px" required />
					
					@if ($errors->has('originating_wallet_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('originating_wallet_id') }}</strong>
                                    </span>
                                @endif
					
					
					{!! Form::hidden('user_id', Auth::user()->id, [ 'class' => 'form-control input-md', 'placeholder' => 'Paste your transaction hash here','style'=>'font-size:10px;' ])  !!}
					
					{!! Form::submit('Send', [ 'class' => 'btn btn-info btn-lg', 'style' => 'width: 100%;margin-top:15px;']) !!}
					
					{!! Form::close() !!}
					
					<p></p>
			   
                </div>
              </div>
            </div>

<!--showing last 6 transactions-->
				
		 <div class="col-7">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                  <h6>Transactions Snapshot</h6>
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Your last 6 stakings highlighted</small><br/><br/>
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr><th>S/n</th>
				  <th>Amount (USDT)</th>
				  <th>Transaction Hash</th>
				  <th>Txn Status</th>
				  </tr>
				  </thead>
				    <?php $Transactions = App\Http\Controllers\TransactionController::showTransactions(Auth::user()->id); $id=1; ?>

				  <tbody>
				  @foreach($Transactions as $trx)
				  <tr>
				<td>{{ $id++ }}</td>
				  <td>{{ $trx->trx_amount }}</td>
				  
				  <td><span class="text-info">{{ Illuminate\Support\Str::limit($trx->transaction_hash,35) }}</span> <br/><br/> {{ date('d F Y, H:i:s a', strtotime($trx->created_at)) }}</td>
				  
				  <td> <?php if(($trx->trxn_complete_status)==1){echo ' <u class="text-success">Completed</u>'; }else{ echo '<u class="text-danger">Incomplete</u>'; } ?>	  </td>
				  @endforeach
				  </tr>
				  </tbody>
				 
					<tfoot>
				  <th>S/n</th>
				  <th>Amount</th>
				  <th>Transaction Hash</th>
				 <th>Txn Status</th>
				  </tfoot>
				 				 
				  </table>
               <a href="{{route('admin.dashboard.transactions', ['uid'=>Auth::user()->id]) }}" class="text-primary text-xs" style="font-weight:600;"><u>See All Transactions</u></a>
                </div>
              </div>
            </div>
			
			
          </div>


@endsection