@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')
			
			<!--navigation row-->
			
		 <div class="row">

			<div class="container"> @if (session('message'))   <div class="alert alert-success alert-note-style">  {{ session('message') }}, 
			</div>@endif</div>

                  <div class="row">
				  <div class="col-6"><h5 style="margin:20px 0 20px 0">Withdrawals' History</h5></div>
				  <div class="col-6 pull-right round_ball" style="margin-top:4px"><!--<span class="nav-link-icon">
				<span class="fas fa-thin fa-2x fa-wallet"></span></span>-->
				 {{-- <div class="r"><span style='font-family:Work Sans !important;'>{{ number_format($amtWithdrawable,2) }}</span><small class='work-sans' style='font-size:11px !important;'>USDT</small>
				@if($amtWithdrawable >= $minimumWithdrawal)  |  <a href="#" data-attr="{{ route('admin.dashboard.withdraw-notifier') }}" data-toggle="modal" id="walletButton" data-target="#walletModal"
				class="withdraw_btn text-success text-xs btn btn-pill" style="padding:1px auto 5px autopx;border-radius:50px;height:25px !important;color:#fff !important;">Withdraw All  <span class="fas fa-thin fa-chevron-right"></span></span></a> @endif
				 </div>
				  </div> --}}
				  
				  <br/><Br/>
@if(count($withdrawals)>0)
		 <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of your withdrawals in record of 10s</small><br/><br/>
				  
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
                  <tr>
				  <th>S/N</th>
				  <th>Transaction ID</th>
				  <th>Amount Withdrawn (USDT)</th>
				  <th>Status</th>
				  <th>Date Created <hr/> Last Updated</th>
				  <th>Actions</th>
				</tr>
                </thead>
				   
				  <tbody>
				
				 
				 @foreach($withdrawals as $s)
				  <tr>
					<td>{{ $id++ }}</td>
				  <td>{{ $s->transaction_id }}</td>
				  <td>{{ $s->amount }}</td>
				  <td><span class="text-info">{{ $s->$status }}</span> <hr/>
				  <span class="text-success">{{ date('d F Y, H:i:s a', strtotime($s->created_at)) }} <hr/> {{ date('d F Y, H:i:s a', strtotime($s->updated_at)) }}</span>
				  </td>
				  </tr>
				  @endforeach

                </tbody>
				 
					<tfoot>
				  <tr>
				  <th>S/N</th>
				  <th>Transaction ID</th>
				  <th>Amount Withdrawn (USDT)</th>
                  <th>Confirmations</th>
				  <th>Status</th>
				  <th>Date Created <hr/> Last Updated</th>
				  <th>Actions</th>
				</tr>
				</tfoot>
				  </table>
                	 {!! $withdrawals->links('vendor.pagination.bootstrap-4') !!}
				</div>
				
              </div>
            </div>
            </div>
			@else
			<div><hr/><p class="alert alert-info">Oops! You don't have any withdrawals registered yet, kindly <a href="{{route('admin.dashboard.fund_wallet')}}"></a></p></div>
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