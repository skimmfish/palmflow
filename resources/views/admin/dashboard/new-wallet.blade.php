<!--new wallet creation modal-->
<form action="{{route('wallet_models.store') }}" method="POST" >

	{{ csrf_field() }}

<div class="row">
<div class="form-group">
<label class="form-label" for="wallet_identifier">Wallet Name</label>
<input type="text" name="wallet_identifier" id="wallet_identifier" class="form-control" value="{{ old('wallet_identifier') }}" placeholder="Your Wallet Identifier - Any word would do - max: 30 characters" required autofocus />

					@if ($errors->has('wallet_identifier'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('wallet_identifier') }}</strong>
                                    </span>
                                @endif

</div>

<div class="form-group bump-20">
<label class="form-label" for="wallet_id">Wallet ID <small>(Ensure it is a Tether TRC20 Wallet)</small></label>

<input type="text" name="wallet_id" id="wallet_id" class="form-control" value="{{old('wallet_id') }}" placeholder="Wallet ID - Ensure it is a Tether TRC20 wallet" required />

					@if ($errors->has('wallet_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('wallet_id') }}</strong>
                                    </span>
                                @endif

</div>

<input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
</div>

<!--<div class="form-group bump-20">
<label class="form-label" for="wallet_identifier">Set as default for withdrawals?</label>

<label style="font-size:12px;"><input type="radio" name="use_for_withdrawal" value="1" selected /> Yes</label>
<label style="font-size:12px;"><input type="radio" name="use_for_withdrawal" value="0" /> No</label>
</div>
-->
<div class="form-group bump-20">
<button class="btn btn-primary btn-round" type="submit" name="save_wallet">Save</button>
</div>

</form>