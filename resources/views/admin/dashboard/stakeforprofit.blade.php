

<h6><u>Please enter the amount you would love to stake for passove profit</u></h6>
<div class="row">

<div class="col-4 text-md">Total Transact Funds: ${{ $total-$alreadyStaked }}</div>

<div class="col-8">
<form action="{{ route('admin.dashboard.addextrastake') }}" method="POST">@csrf @method('PUT') 
<div class="row">
<div class="col-7">
    <input type="number" name="staked_value" placeholder="Enter your stake amount here" class="form-control input-sm" value="{{old('staked_value')}}" required/>
<input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
</div>
<div class="col-5"><button name="save_value" class="btn btn-success btn-rounded">Save</button></div>
</div>
</form>
</div>

</div>