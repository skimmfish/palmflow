@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')

<br/><br/>
<h6 class="text-center">Pay your Trading transactions Fees with this wallet <br/>
<div class="text-center">Amount: <h4><small>$</small>{{ $amount }}<small class="text-tiny">USDT</small></h4></div>

</h6>

<div class="card mb-6 btn-reveal-trigger text-center" >
    @if(isset($wallet))

<!--QR Code comes here-->
<div class="qr_code"><img src="https://api.qrserver.com/v1/create-qr-code/?data={{ $wallet }}&size=200x200&charset-source=UTF-8&format=png" alt="Wallet" title="USDTTRC20 Funding Wallet" width="220" height="220" /></div>

<div class="_copybtn">
  <div><input disabled id="walletTag" style="font-size:10px;color:#555;font-weight:500;width:100%;margin-left:-10px" value="{{$wallet}}"/></div>
    <div><a href="#" class="copyToClip" onClick="copyToClipBoard()" title="Copy to Clipboard"><img src="{{asset('img/clipboard.ico')}}" class="img-responsive" style="margin-top:-15px" width="25" height="25"/></a></div>
</div>

<a href="{{route('set_payment_completed',['pay_id'=>$pay_id])}}" class="btn btn-primary btn-md" style="display:block;margin:auto;width:auto;padding:10px 45px 10px 45px;margin-bottom:5px;">Complete Payment</a>
@endif


</div>
@endsection