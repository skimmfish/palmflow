<h6 class="mb-0 text-center">Viewing User's Profile</h6>

<table class="table table-responsive table_rws">
<thead>
<tr>
<th>Username</th>
</tr>
<tr><th>First Name</th></tr>
<tr><th>Last Name</th></tr>
<tr><th>Address</th></tr>
<tr><th>Country</th></tr>
<tr><th>Phone Number</th></tr>
<tr><th>Last Login</th></tr>
<tr><th>Action</th></tr>
</thead>
<tbody>

<!--user profile comes here-->
@foreach($profile as $ui)

<tr><td>{{-- App\Profile::find($ui->id)->user->username --}} </td></tr>
<tr><td>{{ $ui->first_name }}</td></tr>
<tr><td>{{ $ui->last_name }}</td></tr>





@endforeach

</tbody>
<tfoot>
<tr>
<th>Username</th>
</tr>
<tr><th>First Name</th></tr>
<tr><th>Last Name</th></tr>
<tr><th>Address</th></tr>
<tr><th>Country</th></tr>
<tr><th>Phone Number</th></tr>
<tr><th>Last Login</th></tr>
<tr><th>Action</th></tr>

</tfoot>

</table>