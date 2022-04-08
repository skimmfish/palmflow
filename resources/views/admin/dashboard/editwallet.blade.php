
<div class="row">
<p class="text-sm"><b>Wallet Credentials Update</b></p>
<hr/>
{{-- {!! Form::open(['route' => 'wallet_models.update', 'id'=>$id], ['class' => 'form'], ['method' => 'POST']) !!} --}}

<form method="POST" action="{{ route('wallet_models.update', ['id'=>$id]) }}">
@csrf
@method('PUT')
<div class="form-group">
 {!! Form::label('name', 'Wallet Name', ['class' => 'form-label text-xs']) !!}
 {!! Form::text('wallet_identifier', App\WalletModel::find($id)->wallet_identifier, [ 'class' => 'form-control input-md', 'placeholder' => 'Wallet Name (Identifier)']) !!}
 </div>

<div class="form-group bump-20">
 {!! Form::label('name', 'Wallet Identifier', ['class' => 'form-label text-xs']) !!}
 {!! Form::text('wallet_id', App\WalletModel::find($id)->wallet_id, [ 'class' => 'form-control input-md', 'placeholder' => 'A Tether USDT TRC20 type wallet']) !!}
 </div>

<input type="hidden" name="use_for_withdrawal" value="{{App\WalletModel::find($id)->use_for_withdrawal}}" />
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

<div class="form-group bump-20">
{!! Form::submit('Save Wallet',['class' => 'btn btn-info btn-lg', 'style' => 'width: 100%' ]) !!}
</div>




 {!! Form::close() !!}


</div>
