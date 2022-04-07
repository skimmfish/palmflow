<h6 class="mb-0 text-center">Viewing User's Profile</h6>

<table class="table table-responsive table_rws">
<thead>

<!--user profile comes here-->


@foreach($profile as $ui)
<tr>
<th>Username</th>
<th> {{ App\Profile::find($ui->id)->user->username }}</th>
</tr>

<tr><th>First Name</th> <th>{{ $ui->first_name }}</th></tr>
<tr><th>Last Name</th> <th>{{ $ui->last_name }}</th></tr>
<tr>
<th>Address</th>
<th>{{ $ui->address }}, {{$ui->city}}, {{$ui->state}}</th>
</tr>

<tr><th>Country</th>
<th>{{ $ui->country }}</th>
</tr>

<tr><th>Phone Number</th>
<th>{{ $ui->telephone }}</th>
</tr>

<tr><th>Linkedin profile</th>
<th><a href="{{ $ui->linkedin_url }}" target="_blank">{{ $ui->linkedin_url }}</a></th>
</tr>

<tr><th>Twitter profile</th>
<th><a href="{{$ui->twitter_url}}" target="_blank">{{ $ui->twitter_url }}</a></th>
</tr>

<tr><th>Instagram profile</th>
<th><a href="{{$ui->instagram_url}}" target="_blank">{{ $ui->instagram_url }}</a></th>
</tr>

<tr>
<th>Last Updated</th>
<th>{{ date('d F Y, H:i:s A',strtotime($ui->updated_at)) }}</th>
</tr>
<tr><th>Last Login</th></tr>

<tr><th>Action</th></tr>

@endforeach

</thead>

</table>