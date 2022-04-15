@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')
			
			<!--navigation row-->
			
		 <div class="row">

			<div class="container"> @if (session('message'))   <div class="alert alert-success alert-note-style">  {{ session('message') }}</div>@endif</div>

                  <div class="row">
				  <div class="col-6"><h5 style="margin:20px 0 20px 0">Stakings and Withdrawal History</h5></div>
				  <div class="col-6 pull-right round_ball" style="margin-top:4px"><!--<span class="nav-link-icon">
				<span class="fas fa-thin fa-2x fa-wallet"></span></span>--> <div class="r">{{ number_format($amtWithdrawable,2) }}<small>USDT</small>  |  
				<a href="{{ route('admin.dashboard.withdrawall', ['id'=>Auth::user()->id]) }}" class="withdraw_btn text-success text-xs btn btn-pill" style="padding:1px auto 5px autopx;border-radius:50px;height:25px !important;color:#fff !important;">Withdraw All  <span class="fas fa-thin fa-chevron-right"></span></span></a>
				 </div>
				  </div>
				  
				  <br/><Br/>
				
		 <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Here is a list of stakings & transactions paginated in record of 10s</small><br/><br/>
				  
				  <table class="table table-responsive table-bordered table_rws">
				  <thead>
				  <tr><th>S/N</th>
				  <th>Transaction ID</th>
				  <th>Amount (USDT)</th>
				  <th>Total Gains</th>
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
				  <th>Amount (USDT)</th>
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