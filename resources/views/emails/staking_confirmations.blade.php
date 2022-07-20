@extends('layout.mail.email_body')

@section('content')

<tr><td>Dear, {{ $f_name }}, </td></tr>
  <tr><td>Your wallet reserve staking of {{$amount}} USDT has been confirmed successful. </td></tr>
<tr><td>You may check your dashboard in 24hours for your first RoI, and if you have not set your withdrawal wallet, kindly do so as soon as possible. </tr></td>
<tr><td>Thank you.</td></tr>


@endsection