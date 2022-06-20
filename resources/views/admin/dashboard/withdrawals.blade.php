@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')
			
			<!--navigation row-->
			
		 <div class="row">

			<div class="container"> @if (session('message'))   <div class="alert alert-success alert-note-style">  {{ session('message') }}, 
			</div>@endif</div>

                  <div class="row">
				  <div class="col-6"><h5 style="margin:20px 0 20px 0">Withdrawals' History</h5></div>

                    <!--Here comes the filtering table for the withdrawal history-->
                    <form>
                        {{ csrf_field() }}
                    <div class="row padding_bottom_20">
                     <div class="col-3"><label class="form-label">Start Date</label><input type="date" name="created_at" class="form-control input-sm'" value="" placeholder="Start Date"/></div>
                     <div class="col-3"><label class="form-label">End Date</label><input type="date" name="created_at" class="form-control input-sm'" value="" placeholder="End Date"/></div>
                     <div class="col-3">
                         <label>Select period</label>
                         <select name="date_filter'" onChange="filterByPeriod({{Auth::user()->id}})" class="form-control input-md filterbyperiod">
                        <option value="today">Select an option</option>
                         <option value="today">Today</option>
                             <option value="last_7">Last Week (Last 7 Days)</option>
                             <option value="last_30">Last Month (Last 30 days)</option>
                    </select></div>
                     <div class="col-3" style="margin-top:20px;'"><button type="submit" class="btn btn-primary btn-round" name="fetch">Search <i class="fa fa-search"></i></button></div>
                    </div>
                    </form><Br/><br/>

                  {{--
                      <div class="col-6 pull-right round_ball" style="margin-top:4px"><!--<span class="nav-link-icon">
				<span class="fas fa-thin fa-2x fa-wallet"></span></span>-->
				 <div class="r"><span style='font-family:Work Sans !important;'>{{ number_format($amtWithdrawable,2) }}</span><small class='work-sans' style='font-size:11px !important;'>USDT</small>
				@if($amtWithdrawable >= $minimumWithdrawal)  |  <a href="#" data-attr="{{ route('admin.dashboard.withdraw-notifier') }}" data-toggle="modal" id="walletButton" data-target="#walletModal"
				class="withdraw_btn text-success text-xs btn btn-pill" style="padding:1px auto 5px autopx;border-radius:50px;height:25px !important;color:#fff !important;">Withdraw All  <span class="fas fa-thin fa-chevron-right"></span></span></a> @endif
				 </div>
				  </div> --}}
				  
				  <br/><Br/>
@if(count($withdrawals)>0)

		 <div class="col-12" id="withdrawal_recs">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of your withdrawals in record of 10s</small><br/><br/>
				  
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
                  <tr>
				  <th>S/N</th>
				  <th>Transaction ID</th>
				  <th>Amount ({{$currency}})</th>
				  <th>Status</th>
                  <th>Confirmations</th>
				  <th>Date</th>
				</tr>
                </thead>
				   
				  <tbody>
				
				 
				 @foreach($withdrawals as $s)
				  <tr>
					<td>{{ $id++ }}</td>
				  <td><a href="http://btc.com/exp/{{$s->transaction_id}}"><u>{{ Illuminate\Support\Str::limit($s->transaction_id,15) }}</u></a></td>
				  <td>{{ $s->amount }}</td>
				  <td><span class="text-info">@if($s->status) <u class="text text-success">Completed</u> @else <u class="text text-yellow">In-progress</u> @endif</span> </td>
                    <td>{{$s->confirmations }}</td>
                      <td> <span class="text-success">{{ date('d F Y, H:i:s a', strtotime($s->created_at)) }} </span>
				  </td>
				  </tr>
				  @endforeach

                </tbody>
				 
					<tfoot>
				  <tr>
				  <th>S/N</th>
				  <th>Transaction ID</th>
				  <th>Amount ({{$currency}})</th>
                  <th>Status</th>
				  <th>Confirmations</th>
                  <th>Date</th>
				</tr>
				</tfoot>
				  </table>
                	 {!! $withdrawals->links('vendor.pagination.bootstrap-4') !!}
				</div>
				
              </div>
            </div>
            </div>
			@else
			<div><hr/><p class="alert alert-info">Oops! You don't have any withdrawals registered yet</p></div>
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