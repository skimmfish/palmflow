

<h6><u>Please enter the amount you would love to stake for passove profit</u></h6>
<div class="row">

<div class="col-3 text-sm" style="font-size:13.5px;font-weight:500;">
Total Wallet Reserve: ${{ $total-$alreadyStaked }}</div>

<div class="col-9" style="margin-top:-29px;">
<form action="{{ route('admin.dashboard.addextrastake',['uid'=>$uid]) }}" target="_blank" method="POST">@csrf @method('PUT') 
<div class="row" style="margin-top:20px !important">
<div class="col-5">
    <label class="text-tiny text-black">Enter how much you are staking out of your wallet reserve!</label></div>
<div class="col-4">     <input type="number" name="staked_value" placeholder="Enter your stake amount here" class="form-control input-sm" value="{{old('staked_value')}}" required/>
<input type="hidden" name="user_id" value="{{$uid}}" />
</div>
<div class="col-3"><button name="save_value" class="btn btn-success btn-rounded">Submit Stake</button></div>
</div>
</form>
</div>

</div>