{{-- staking_snapshot --}}
<br/><h5 class="mb-0">Staking Snapshot</h1><BR/>

<table class="table table-responsive table_rws table-bordered">
<thead>
@foreach($stakeModel as $v)

<tr>
<th>Amount (USDT)</th>
<th>{{ number_format($v->staked_amount,2) }}</th>
</tr>

<tr><th>Date Opened</th>
<th>{{ date('d F Y, h:i:s a', strtotime($v->created_at)) }}</th>
</tr>



<tr><th>% ROI (All time)</th><th> {{ $v->total_percent_returns }}% ( {{ number_format((($v->staked_amount*$v->total_percent_returns)/200),2) }}USDT )</th></tr>

<tr><th>% ROI (This Week)</th>
<Th></th>
</tr>

<tr><th>% ROI Today</th>

<th></th>
</tr>

<tr><th class="text-success text-sm">% ROI Withdrawn</th>
<th>{{ number_format($v->percent_withdrawn_sofar,2) }}%  = ( {{ number_format(($v->percent_withdrawn_sofar*$v->staked_amount/100),2) }} USDT )</th>
</tr>

<tr><th class="text-warning text-sm">% ROI Withdrawable</th>
<th><div class="col-6">{{$v->balance_withdrawable }} % ( {{ number_format(($v->balance_withdrawable*$v->staked_amount/100),2) }} USDT ) </div>
<div class="col-6 pull-right"><form method="POST" action="">@csrf 
<button class="btn btn-primary btn-circle" style="background:#0d2453;width:40px !important;height:40px !important;border:0"><span class="nav-link-icon">
<span class="fas fa-thin fa-wallet"></span></span></button></form></div>

</th>
</tr>

@endforeach
</thead>

</table>