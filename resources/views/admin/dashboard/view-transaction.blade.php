{{-- transaction_snapshot --}}
<br/><h5 class="mb-0">Transaction Summary</h1><BR/>

<table class="table table-responsive table_rws table-bordered">
<thead>

@foreach($singleTransaction as $v)

<tr>
<th>User</th>
<th> <img src="{{asset('img/160x160/'.\App\Profile::get_profile_data($v->user_id,'profile_img'))}}" class="img-round"/>
{{ \App\Profile::get_profile_data($v->user_id,'first_name') }} {{ \App\Profile::get_profile_data($v->user_id,'last_name') }} ( {{\App\User::get_profile_data($v->user_id,'username') }} ) 

</th>
</tr>

<tr>
 <th>Amount (USDT)</th>
<th>${{ number_format($v->trx_amount,2) }} <small class="text-tiny">USDT</small></th>
</tr>

<tr>
 <th>Origin Wallet</th>
<th>{{ $v->originating_wallet_id }}</th>
</tr>

<tr>
 <th>Destination Wallet</th>
<th>{{ $v->destination_wallet_id }}</th>
</tr>


<tr><th>Transaction Date</th>
<th>{{ date('d F Y, h:i:s a', strtotime($v->created_at)) }}</th>
</tr>

<tr><th>Transaction's Last Updated Date</th>
<th>{{ date('d F Y, h:i:s a', strtotime($v->updated_at)) }}</th>
</tr>

<tr><th>Transaction Status</th>
<th>@if($v->trxn_complete_status==true)<span class='text-success'>Completed</span> @else 
<span class="text-danger">Incomplete/Pending</span>
@endif</th>
</tr>

@if(Auth::user()->is_admin==true && $v->trxn_complete_status==false)
<tr><th></th>
<th>

<a href="{{ route('admin.dashboard.core-admin.activatetxn',['id'=>$v->id,'amt'=>$v->trx_amount,
    'uid'=>Auth::user()->id,'txid'=>$v->transaction_id]) }}" 
class="text-center btn btn-primary" style="border-radius:50px;padding-top:8px;font-size:10px;">Activate Transaction</a>
</th>
</tr>
@endif

{{-- 
    <tr><th>Fees</th><th>{{ $coinremitterModel['data']['processing_fees']+$coinremitterModel['data']['transaction_fees']  }}</th></tr>
    <tr><th>No. of Block Confirmations</th><th>{{ $coinremitterModel['data']['confirmations'] }}</th></tr>
<tr><th>Transaction Explorer</th><th>{{ $coinremitterModel['data']['explorer_url'] }}</th></tr>
--}}
@endforeach
</thead>

</table>