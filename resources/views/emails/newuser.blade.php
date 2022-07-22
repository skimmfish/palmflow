@extends('layout.mail.email_body')
@section('content')

<tr><td>Hi, {{ $first_name }}, thank you for your signing up. Please kindly follow <a href="">this link to verify</a> your e-mail.</td></tr>

@endsection
