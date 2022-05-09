@extends('layouts.admin_app')
@section('content')

{{-- including the topbar --}}
@include('layouts.admin_topbar')



<div class="row">
			
			<!--navigation row-->
			
		 <div class="col-5">
              <div class="card mb-3 btn-reveal-trigger">


  <div class="container"> @if (session('message'))   <div class="alert alert-success">  {{ session('message') }}</div>@endif</div>
         
			  
                <div class="card-header position-relative min-vh-25 mb-8">
                  <h6>Assets Update & Site-wide Settings and Configuration</h6>
				<p><ul>
				<li><small style="font-size:10px">Assets and Investments data capture: These fields are updated on a daily basis for a total overview of the funds generated by the system on a daily basis</small></li>
				</ul>
            </p>
					
            @if(count(\App\AssetManager::all())<=0)
            {!! Form::open(['route' => 'assetmanager.store', 'method'=>'POST'], ['class' => 'form']) !!}
            @else
            {!! Form::open(['route' => 'assetmanager.update', 'method'=>'POST'], ['class' => 'form']) !!}
            @endif
            
            @csrf
                    
					{!! Form::label('currencies_asset', 'FX Currencies Total Asset', ['class' => 'control-label', 'style'=>'font-size:10px;']) !!}
					{!! Form::text('currencies_asset', null, [ 'class' => 'form-control input-md', 'placeholder' => 'Total fx currencies asset','style'=>'font-size:10px;' ])  !!}
					
					{!! Form::label('meta_futures_asset', 'Meta futures Asset', ['class' => 'control-label', 'style'=>'font-size:10px']) !!}
					{!! Form::text('meta_futures_asset', null, [ 'class' => 'form-control input-md', 'placeholder' => 'Metafutures Assets Value','style'=>'font-size:10px;' ])  !!}
					
					{!! Form::label('arbitrage_asset', 'Crypto Arbitrage Assets', ['class' => 'control-label', 'style'=>'font-size:10px']) !!}

					<input type="text" name="arbitrage_asset" class="form-control @error(' arbitrage_asset') is-invalid @enderror" Placeholder="Crypto Arbitrage Assets" value="{{ old('arbitrage_asset') }}" style="font-size:10px" required />
					
					@if ($errors->has('originating_wallet_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('arbitrage_asset') }}</strong>
                                    </span>
                                @endif					
					
					{!! Form::hidden('update_initiator', Auth::user()->id, [ 'class' => 'form-control input-md', 'placeholder' => 'Admin updating'])  !!}
					
                    @if(count(\App\AssetManager::all())<=0)
					{!! Form::hidden('assets_id', 1, [ 'class' => 'form-control input-md'])  !!}
                    {!! Form::submit('Submit (first save)', [ 'class' => 'btn btn-danger btn-lg', 'style' => 'width: 100%;margin-top:15px;']) !!}
                    @else
                    {!! Form::submit('Save', [ 'class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;margin-top:15px;']) !!}
                    @endif

                    {!! Form::close() !!}
					
                </div>
              </div>
            </div>

<!--showing last 6 transactions-->
				
		 <div class="col-7">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                  <h6>Assets Snapshot</h6>
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Assets & Investments </small><br/><br/>
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr><th>S/n</th>
				  <th>Asset Class</th>
                  <th>Amount Locked In (USDT)</th>
				  <th>Curr. DD</th>
				  <th>Total Liquidity (USDT)</th>
                </tr>
				  </thead>
				   
				  <tbody>
				  @foreach($Assets as $trx)
				  <tr>
				<td></td>
				  <td></td>
				  <td></td>
				  <td></td>
                  <td></td>
                  @endforeach
				  </tr>
				  </tbody>
				 
					<tfoot>
                    <tr><th>S/n</th>
				  <th>Asset Class</th>
                  <th>Amount Locked In (USDT)</th>
				  <th>Curr. DD</th>
				  <th>Total Liquidity (USDT)</th>
                    </tr>
				  </tfoot>
				  </table>
                </div>
              </div>
            </div>
                  </div>

@endsection