@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')

<div class="row">

<div class="col-9 col-xs-12">
<div class="card mb-3 btn-reveal-trigger">
<div class="container">@if(session('message'))<div class="alert alert-success">  {{ session('message') }}</div>@endif</div>


<div class="card-header position-relative min-vh-25 mb-8">
<h5>Voucher Center</h5>

<p style="margin-bottom:20px;">
<ul>
<li><small style="font-size:10px">Welcome to our voucher center</small></li>
<li><small style="font-size:10px">This service is only open to few countries, kindly note that your payments may take up to 24hours before arrival in your bank account, so please kindly be patient while we go process your withdrawals via the voucher center</small></li>
<li><small style="font-size:10px;color:#ff0000;"><b>Be assured of the fact that you are helping humanity through 
this contributions and in we aren't taking your generousity for granted. Thank you. </b></small>
</li>
</ul>
</p>
<br/>
<h6>What do you want to do on our voucher service?</h6>

<div class="padding_40"><a href="{{ route('admin.dashboard.stake-crypto-fiat') }}" class="btn btn-primary btn-round">Stake Cryptos via Fiat</a>   
<a href="{{route('admin.dashboard.withdraw-rebate')}}" class="btn btn-success btn-round">Withdraw My Rebates</a>
</div>
</div>
</div>
<div class="col-3">

</div>
</div>



@endsection