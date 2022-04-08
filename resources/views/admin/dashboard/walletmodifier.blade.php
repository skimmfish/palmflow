<div>
<p class="text-xs">Are you sure you want to set the wallet below as default for withdrawals? </p>

<small>Wallet ID:</small>  <b> {{ App\WalletModel::find($id)->wallet_id }}</b>

<div class="form-group bump-20">
<a href="{{route('admin.dashboard.modwalletdefault',['id'=>$id]) }}" class="btn btn-primary btn-round text-xs">Yes</a> 
<a href="#" onclick="closeModal('#walletModal')" class="btn btn-danger btn-circle text-xs">No</a>
</div>
