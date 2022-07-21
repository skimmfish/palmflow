@extends('layout.mail.email_body')

@section('content')

<tr><td>Dear, {{ $f_name }}, </td></tr>
<tr><td>{{$message}} </td></tr>
<tr><td>Thank you.</td></tr>

<tr><td>Kindly note: Balmflow</td></tr>

@endsection