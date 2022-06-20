@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')

	
<div class="row">
          <span class="text-tiny weight-400">	@include('flash::message')</span>

<!--showing last 6 transactions-->

                  <h5 style="margin:20px 0 20px 0">MT4 Account Setup</h5><br/><Br/>

		 <div class="col-6">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
				  <small style="font-size:10.5px;color:#0d2453;font-weight:600;">Please bind your MT4 account(s) to our trading servers here <br/> <b class="text-danger">All fields with '**' are required fields</b></small><Br/><Br/>
                  <!--form comes here-->
                  <form method="POST" action="{{route('admin.dashboard.mt4setup.store')}}">
                  @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                
                  <div class="form-group">
                  <label>MT4 Account Name ** <small><b>(For reference purposes)</b></small></label>
                  <input type="text" name="account_name" placeholder="Your Account Name..." value="{{old('account_name')}}" class="form-control input-md" required/>
              
                  @if ($errors->has('account_name'))
                                    <span class="help-block">
                                        <strong class="text-tiny weight-400 red">{{ $errors->first('account_name') }}</strong>
                                    </span>
                                @endif  
              </div>

                <div class="form-group">
                <label>MT4 Account Number **</label>
                <input type="text" name="account_number" placeholder="MT4 Account Number" value="{{old('account_number')}}" class="form-control input-md" required />
                @if ($errors->has('account_number'))
                                    <span class="help-block">
                                        <strong class="text-tiny weight-400 red">{{ $errors->first('account_number') }}</strong>
                                    </span>
                                @endif    
              
              </div>
                
                <div class="form-group">
                <label>MT4 Trading Password ** <br/><small><b>(Note: This should be your trading password and not your investor's password)</b></small></label>
                <input type="password" name="_password" placeholder="MT4 Trading Password" value="{{old('_password')}}" class="form-control input-md" required />
              
                @if ($errors->has('_password'))
                                    <span class="help-block">
                                        <strong class="text-tiny weight-400 red">{{ $errors->first('_password') }}</strong>
                                    </span>
                                @endif    
                
              </div>
                

                <div class="form-group">
                <label>Broker's Name ** <br/><small>(<b>E.g. Exness, FxOpen, HotForex etc.)</b></small></label>
                  <select name="broker_name" class="form-control input-md" 
                  onChange="fetchServersList(this.value)" onClick="fetchServersList(this.value)">
                  <option value="">Select an option</option>
                  
                   @foreach($brokers as $r)
                    <option value="{{strtolower($r)}}">{{$r}}</option>                   
                     @endforeach
                  </select>

                  @if ($errors->has('broker_name'))
                                    <span class="help-block">
                                        <strong class="text-tiny weight-400 red">{{ $errors->first('broker_name') }}</strong>
                                    </span>
                                @endif   

                  </div>

                  <!--the server list is populated based on the selected broker-->
                  <div class="form-group" id="server_list">

                  @if ($errors->has('mt4_server'))
                                    <span class="help-block">
                                        <strong class="text-tiny weight-400 red">{{ $errors->first('mt4_server') }}</strong>
                                    </span>
                                @endif   

                  </div>
                 
                  <div class="form-group">
<label>Preferred Leverage **</label>
<select class="form-control input-md" name="leverage">
<option>Select leverage for account</option>
<option>1:50</option>
<option>1:100</option>
<option>1:200</option>
<option>1:300</option>
<option>1:600</option>
<option>1:1000</option>
<option>other</option>
</select>                  

@if ($errors->has('leverage'))
      <span class="help-block">
           <strong class="text-tiny weight-400 red">{{ $errors->first('leverage') }}</strong>
               </span>
       @endif   
</div>

<hr/>
                  <div class="form-group tos_tick">
                <div><input type="checkbox" name="agree" value="1" class="checkbox" required/>
                  </div>
                  <div> <small>By clicking the <b>Submit</b> button, you agree 
                  <Br/>to our <a href="{{route('terms-and-conditions')}}" target="_blank"><u>terms and conditions</u></a> that binds your participation as a client with <b>OliveFlowFx</b> LLC. </small></div>
                  </div>
<!--submit button--><hr/>
          <div class="form-group">
            <button name="save" class="btn btn-primary" id="submit">Submit</button>
          </div>

                </div>
                </form>

                </div>
				
                    
              </div>

            <div class="col-6">

            <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-12">
              <b><small>Here are all your MT4 Accounts</small></b><Br/>
              <table class="table table-responsive table-bordered table_rws">
                <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Acct. Name</th>
                      <th>Acct. Number</th>
                      <th>Acct. Balance</th>
                      <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
                      @foreach($mt4_accounts as $s)

                      <tr>
                        <td>{{$id++}}</td>
                        <td>{{$s->account_name}}</td>
                        <td>{{$s->account_number}}</td>
                        <td>//account balance</td>
                        <td>
                          <a href="{{route('admin.dashboard.stoptr')}}">Stop Trading</a>
                          <form action="" method="POST">@csrf @method('DELETE')
                            <button>Delete Account</button></form>
                        </td>

                      </tr>
                      @endforeach

                        </tbody>
              </table>
                </div></div>
            </div>
            </div>
	
	
@endsection