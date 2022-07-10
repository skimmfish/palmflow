@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')
			
			<!--navigation row-->
			
		 <div class="row">

			<div class="container"> @if (session('message'))   <div class="alert alert-success alert-note-style">  {{ session('message') }}, 
			</div>@endif</div>

                  <div class="row">
				  <div class="col-6"><h5 style="margin:20px 0 20px 0">Wallet Reserve Staking Records</h5></div>


				  
				  
				  <div class="col-6 pull-right round_ball" style="margin-top:4px"><!--<span class="nav-link-icon">
				<span class="fas fa-thin fa-2x fa-wallet"></span></span>-->
				 <div class="r"><span style='font-family:Work Sans !important;'>{{ number_format($amtWithdrawable,2) }}</span><small class='work-sans' style='font-size:11px !important;'>USDT</small>
				@if($amtWithdrawable >= $minimumWithdrawal)  |  <a href="#" data-attr="{{ route('admin.dashboard.withdraw-notifier') }}" data-toggle="modal" id="walletButton" data-target="#walletModal"
				class="withdraw_btn text-success text-xs btn btn-pill" style="padding:1px auto 5px autopx;border-radius:50px;height:25px !important;color:#fff !important;">Withdraw All  <span class="fas fa-thin fa-chevron-right"></span></span></a> @endif
				 </div>
				  </div>
<hr/>				  

				  <form method="GET">
                        {{ csrf_field() }}
						<input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
						<input type="hidden" name="stype" value="stakings" />
                    <div class="row padding_bottom_20">
                     <div class="col-3"><label class="form-label">Start Date</label>
					 <input type="date" name="start_at" class="form-control input-sm" placeholder="Start Date"/></div>
                     <div class="col-3"><label class="form-label">End Date</label>
					 <input type="date" name="ends_at" class="form-control input-sm" placeholder="End Date"/></div>
                     <div class="col-3 margin-35"><button type="button" class="btn btn-primary btn-round" id="fetch" onClick="fetchRecordsAll(start_at.value,ends_at.value,user_id.value+'_'+stype.value)" name="fetch">Search <i class="fa fa-search"></i></button></div>
                    </div>
                    </form><br/><br/>


				  <br/><Br/>
@if(count($stakings)>0)
		 <div class="col-12">

              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
					<div class="row">
				  <div class="col-6"><small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of stakings & transactions paginated in record of 10s</small></div><br/><br/>
				  <div class="col-6">
				  </div>
				</div>

				<div id="txnTable">
				 
				<table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr><th>S/N</th>
				  <th>Transaction ID</th>
				  <th>Amount ({{ $currency }})</th>
				  <th>Total Gains on Staking</th>
				  <th>Total Withdrawn</th>
				  <th>Balance to Withdraw</th>
				  <th>Date Created <hr/> Last Updated</th>
				  <th>Probable Closure Date</th>
				  <th>Actions</th>
				  </tr>
				  </thead>
				   
				  <tbody>
				
				 
				 @foreach($stakings as $s)
				  <tr>
					<td>{{ $id++ }}</td>
				  <td>{{ $s->trx_id }}</td>
				  <td>{{ $s->staked_amount }}</td>
				  <td>{{ $s->total_percent_returns }}%</td>
				  <td>{{ $s->percent_withdrawn_sofar }}%</td>
				  <td> {{ 200 - $s->total_percent_returns }} %</td>
				  <td><span class="text-info">{{ date('d F Y, H:i:s a', strtotime($s->created_at)) }}</span> <hr/>
				  <span class="text-success">{{ date('d F Y, H:i:s a', strtotime($s->updated_at)) }}</span>
				  </td>
				  <td>{{ date('d F Y, H:i:s a', strtotime($s->closure_date)) }}</td>
				  <td> <a href="#" data-attr="{{ route('admin.dashboard.staking_snapshot', ['id'=>$s->id]) }}" data-toggle="modal" id="walletButton" data-target="#walletModal" class="text-success text-xs"><u>Load Snapshot</u></a>	  </td>
				  @endforeach
				  </tr>
				  </tbody>
				 
					<tfoot>
				  <tr>
				  <th>S/N</th>
				  <th>Transaction ID</th>
				  <th>Amount ({{$currency}})</th>
				  <th>Total Gains</th>
				  <th>Total Withdrawn</th>
				  <th>Balance to Withdraw</th>
				  <th>Date Created <hr/> Last Updated</th>
				  <th>Probable Closure Date</th>
				  <th>Actions</th>
				</tr>
				</tfoot>
				  </table>
                	 {!! $stakings->links('vendor.pagination.bootstrap-4') !!}
					</div>
					</div>
				
              </div>
            </div>
            </div>
			@else
			<div><hr/><p class="alert alert-info">Oops! You don't have any stakings registered yet, kindly <a href="{{route('admin.dashboard.fund_wallet')}}"><u>fund your wallet here</u></a></p></div>
				@endif

				<!-- view staking modal -->
    <div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onClick="closeModal('#walletModal')" data-dismiss="modal" aria-label="Close"style="border-radius:50%;width:35px;height:35px;border:0;color:#0d2453;">
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