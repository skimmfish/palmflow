<H6>MT4 Account details</H6>
<table class="table table-responsive table-bordered table_rws">
<tbody>
    @foreach($account_details as $x)
<tr>
    <th>Account name</th>
<th><!--acct_name goes here-->
{{$x->account_name}} </th>
</tr>

<tr>
<th>Account number</th>
<th>{{$x->account_number}}</th>
</tr>

<tr>
<th>Trading Password</th>
<th>{{$x->_password}}</th>
</tr>

<tr>
<th>Investor Password</th>
<th>{{$x->investor_password}}</th>
</tr>


<tr>
<th>Chosen Leverage</th>
<th>{{$x->leverage}}</th>
</tr>

<tr>
    <th>Server Binding Date</th>
    <th>{{$x->created_at}}</th>
</tr>
@endforeach
</tbody>
</table>