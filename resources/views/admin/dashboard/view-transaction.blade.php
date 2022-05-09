{{-- transaction_snapshot --}}
<br/><h5 class="mb-0">Transaction Summary</h1><BR/>

<table class="table table-responsive table_rws table-bordered">
<thead>

@foreach($singleTransaction as $v)

<tr>
<th>User</th>
<th>{{ \App\Profile::get_profile_data($v->user_id,'first_name') }} {{ \App\Profile::get_profile_data($v->user_id,'last_name') }} ( {{\App\User::get_profile_data($v->user_id,'username') }} ) </th>
</tr>



<tr>
<th>Amount (USDT)</th>
<th>{{ number_format($v->trx_amount,2) }}</th>
</tr>

<tr><th>Transaction Date</th>
<th>{{ date('d F Y, h:i:s a', strtotime($v->created_at)) }}</th>
</tr>

<tr><th>Transaction's Last Updated Date</th>
<th>{{ date('d F Y, h:i:s a', strtotime($v->updated_at)) }}</th>
</tr>

<tr><th>No. of Block Confirmations</th><th>@if($v->block_no_of_confirmations){{$v->block_no_of_confirmations}} @else 0 @endif</th></tr>

@endforeach
</thead>

</table>