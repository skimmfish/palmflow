@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')


<div class="row">			
			<!--navigation row-->
		 <div class="col-5">
              <div class="card mb-3 btn-reveal-trigger">
  <div class="container"> @if (session('message'))   <div class="alert alert-success">  {{ session('message') }}</div>@endif</div>	  
                <div class="card-header position-relative min-vh-25 mb-8">
                  <h6>Transact Fees Funding</h6><div class="text-right" 
				  style="float:right;position:relative;top:-45px;left:-10px;">
					<small class="text-tiny">Total in Wallet</small><br/>	
				  ${{$totalTxFees-$stakedValue}}<small class="text-xs" style="font-size:8px !important;"> USDT</small></div>
				
				  <p style="margin-top:25px">
				  <ul>
				  <li><small class="text text-danger" style="font-size:11px;font-family:'GD Sherpa Regular';"><b>Ensure that you send only BTC into the wallet below, anything different than this would result in losses!</b></small></li>
				  <li><small style="font-size:11px">To stake part of your transact funds to earn passive profit, kindly <a href="#" data-attr="{{ route('admin.dashboard.stakevalue',['uid'=>Auth::user()->id]) }}" data-toggle="modal" data-target="#stakeModal" id="stakeButton"><u>use this link</u></a> to do that</small></li>
				<li><small style="font-size:11px"><b>It could take between one minute  to 24hrs before your payment reflects on our portal, kindly be patient.</b></small></li>
				<li><small style="font-size:11px"><b>Your rebates (if you opt for wallet reserve stakings) would be effected at exactly 24hrs (22:00 UTC + 1) after your payment reflects on our end. 
</b></small></li>
				<li><small style="font-size:11px;"><b>The minimum funding for transactions gas fee is <u>20USDT</u> and no maximum, however, if you plan to do wallet reserve staking, kindly add it as an extra to the minimum or more you are funding your wallet with</b></small></li>
				</ul>
				
				<!--3d bar code for the crypto payment-->
				<div>
					<span><small style="font-size:10px">Use the 2D bar code below to complete your transaction or use the wallet ID string below, and afterwards fill the form below to notify us of your payment.</small></span>
				</div>
				<img src="{{ $instantWallet['data']['qr_code'] }}" alt="3d-bar code for our wallet" class="img-responsive" lazyload loading="lazy"/>
				<div><b style="font-size:10px">Wallet ID: <u class="text-primary">{{ $instantWallet['data']['address'] }}</u></b></div><Br/>
				<div class="row text text-danger"><small>Kindly fill the form below soon as your transaction goes through. Thank you.</small></div>
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
					

								{!! Form::label('destination_wallet_id', 'Destination Wallet ID', ['class' => 'control-label', 'style'=>'font-size:10px']) !!}

					<input type="text" name="destination_wallet_id" class="form-control @error('destination_wallet_id') is-invalid @enderror" Placeholder="Destination Wallet ID you sent funds to" value="{{ $instantWallet['data']['address'] }}" style="font-size:10px" required />
					
					@if ($errors->has('destination_wallet_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('destination_wallet_id') }}</strong>
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
				  
				  <td><span class="text-info"><a href="{{ $trx->explorer_url }}"><u>{{ Illuminate\Support\Str::limit($trx->transaction_hash,25) }}</u></a></span> <br/><br/> {{ date('d F Y, H:i:s a', strtotime($trx->created_at)) }}</td>
				  
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


		  
		 <!-- view user modal -->
		 <div class="modal fade" id="stakeModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
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