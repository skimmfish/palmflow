<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@if($title) {{ $title }} @else {{ 'Users Dashboard ' }} @endif - OliveFlowFX Project</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }} ">
    <link rel="icon" type="image/ico" sizes="32x32" href="{{ asset('favicon.ico') }}" />
<!--    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">

    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">
    <link href="//db.onlinewebfonts.com/c/0aee6008b82cde991ec28387169bb13e?family=GD+Sherpa" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('css/admin/js/config.js') }}"></script>

    <script src="{{ asset('css/admin/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Spartan:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('css/admin/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('css/admin/css/theme.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{ asset('css/admin/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
	<link href="{{ asset('css/admin/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
	<link href="{{asset('css/custom_styles.css') }}" rel="stylesheet">
	
				<!-- Script -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!--for local/dev testing-->
<script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


<!--For fetching all brokers server-->
<script type="text/javascript">

function fetchServersList(brokerName){
    if(brokerName){
    $.ajax({
    type: 'GET',
    url: "{{ route('admin.dashboard.get_server_list') }}",
    //url: "http://localhost:8000/server_list/",
    data: {
    broker_name: brokerName,
    },
    success: function (response) {
     // We get the element having id of display_info and put the response inside it
     $( '#server_list' ).html(response);
    }
    });
   }else
   {
    $( '#server_list' ).html("<small class='text-danger'>Please check your selection</small>");
   }
} //end of fetchServersList() function


//fetchRecordsAll() - for finding transactions by date using start and ending dates
function fetchRecordsAll(start,end,uid){
  if(start && end && uid){
    $.ajax({
    type: 'GET',
    url: "{{ route('admin.dashboard.get_transaction_record') }}",
    data: {
    startDate: start,
    endDate: end,
    user_id: uid
    },
    success: function (response) {
     // We get the element having id of display_info and put the response inside it
     $('#txnTable').html(response);
    }
    });
   }else
   {
    $('#txnTable').html("<small class='text-danger'>Please check your filters</small>");
   }
}
</script>

<script type="text/javascript">
//for fetchUserRecords() for a single and admin user
function fetchRecordsByPeriod(period,uid){
  if(period && uid){
    $.ajax({
    type: 'GET',
    url: "{{route('admin.dashboard.get_transaction_record_by_period')}}",
    data: {
    p: period,
    user_id: uid
    },
    success: function (response) {
     // We get the element having id of display_info and put the response inside it
     $('#txnTable').html(response);
    }
    });
   }else
   {
    $('#txnTable').html("<small class='text-danger'>Error! Please check your selections</small>");
   }
}
</script>

<!--for coping wallets to clipboard-->

<script>
function copyToClipBoard() {
  /* Get the text field */
  var copyText = document.getElementById("walletTag");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Wallet Copied to Clipboard");
}</script>



 <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
	
	
	<script>
        // display a modal (small modal)
        $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#userModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

//<!--for stakevalue modal-->

 $(document).on('click', '#stakeButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#stakeModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });


//<!--for delete account modal-->

$(document).on('click', '#deleteMt4', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#deleteAcctModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });


//<!--for trading history loading-->

$(document).on('click', '#view_history', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#deleteAcctModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });


</script>


<script>
        // display transaction modals only
        $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#transactionmodal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
</script>


<!--this is for new wallet modal-->
<script>
        // display a modal (small modal)
        $(document).on('click', '#walletButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#walletModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
</script>
	

	
<!--extra styles-->
	<style>
    @font-face {font-family: "GD Sherpa Regular";
  src: url("{{asset('font/0aee6008b82cde991ec28387169bb13e.eot') }}"); /* IE9*/
  src: url("{{asset('font/0aee6008b82cde991ec28387169bb13e.eot?#iefix') }}") format("embedded-opentype"), /* IE6-IE8 */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.woff2') }}") format("woff2"), /* chrome、firefox */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.woff') }}") format("woff"), /* chrome、firefox */
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.ttf') }}") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("{{asset('font/0aee6008b82cde991ec28387169bb13e.svg#GD Sherpa Regular') }}") format("svg"); /* iOS 4.1- */
}


	body{
		font-family:'GD Sherpa Regular','Work Sans','Brandon Grotesque';font-size:16px;color:#000;font-weight:500;color:#000;line-height:auto;
	}
	h1,h2,h3,h4,h5,h6{font-family:'GD Sherpa','Work Sans','Brandon Grotesque';
	font-weight:700;line-height:36px !important;
	}
	
	.nav-link, .nav-link-text, .dropdown-item, .mb-1,.mb-0, .form-control, label, .btn{font-family:'GD Sherpa','Work Sans','Brandon Grotesque';font-size:12px !important;
	}
	.mb-1, .cust-link{font-weight:400;font-size:12px;}
	.form-control{
		font-size:12px;
	}
	label{font-weight:700;}
	
	</style>
	
  </head>
<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
		  
		  <!--wallet modals-->
				  
		  
		  <!------------------------end-->
		  
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="{{route('admin.dashboard.core-admin.index')}}">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="{{ asset('img/floxpool.png') }}" alt="" width="90" /><span class="font-sans-serif"></span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                    <div class="d-flex align-items-left"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1" style="font-weight:600;font-size:14px;color:#000;">Dashboard</span></div>
                  </a>
                  <ul class="nav collapse show" id="dashboard" style="line-height:26px;">
                    
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard.core-admin.index') }}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-left"><span class="nav-link-icon"><span class="fas fa-home"></span></span><span class="nav-link-text ps-1">Dashboard Home</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard.transactions',['uid'=>Auth::user()->id]) }}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-left"><span class="nav-link-icon"><span class="fas fa-solid fa-table"></span></span><span class="nav-link-text ps-1">Transactions History</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a href="{{ route('admin.dashboard.stakings') }}" class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-left"><span class="nav-link-icon"><span class="fas fa-solid fa-credit-card"></span></span><span class="nav-link-text ps-1">Wallet Reserve Stakes</span></div>
                      </a><!-- more inner pages-->
                    </li>
					
                    <li class="nav-item"><a href="{{ route('admin.dashboard.withdrawals') }}" class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-left"><span class="nav-link-icon"><span class="fas fa-solid fa-wallet"></span></span><span class="nav-link-text ps-1">Withdrawals</span></div>
                      </a><!-- more inner pages-->
                    </li>
					
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard.fund_wallet') }}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-left">
						<span class="nav-link-icon"><span class="fas fa-thin fa-wallet"></span></span>
						<span class="nav-link-text ps-1">Fund Wallet</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
					
					{{-- @if( App\Profile::where('user_id',Auth::user()->id)->get()->country=='Nigeria') --}}
				
					{{-- @endif --}}
				
                  <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard.mt4setup')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
						<span class="nav-link-icon"><span class="fas fa-cog"></span></span>
						<span class="nav-link-text ps-1">MT4 Subscriptions</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <!--<li class="nav-item"><a class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
						<span class="nav-link-icon"><span class="fas fa-phone"></span></span>
						<span class="nav-link-text ps-1">Customer Care</span></div>
                      </a>
                    </li>-->
                   

                    
                  </ul>
                </li>
				
                <li class="nav-item">
                  <!-- label-->
					<!--the navigation links here are for managing trades by the admin and authorized personnel-->
					
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label cust-link" style="font-family:'GD Sherpa Regular','Brandon Grotesque';font-weight:600;font-size:14px;color:#000;">Admin & Diagnostics</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages-->
				  
				  <a class="nav-link" href="{{route('admin.dashboard.core-admin.traders')}}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-users"></span></span><span class="nav-link-text ps-1">MT4 Subscribers</span></div>
                  </a>
				  
				  <a class="nav-link" href="{{route('admin.dashboard.core-admin.alltransactions') }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">All transactions</span></div>
                  </a>
				  
				  <!-- parent pages-->
				  <a class="nav-link" href="{{route('admin.dashboard.core-admin.logs')}}" target="_blank" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text ps-1">Logs</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Admin Notifications</span></div>
                  </a>
                  <ul class="nav collapse" id="email">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard.core-admin.notifications')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard.core-admin.general_broadcast')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New Broadcast</span></div>
                      </a><!-- more inner pages-->
                    </li>

                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Users</span></div>
                  </a>
                  <ul class="nav collapse" id="events">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard.core-admin.allusers',['type'=>'all'])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">All Users</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard.core-admin.allusers',['type'=>'deleted'])}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Deleted Users</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages-->
				  
				  <a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Feeds</span></div>
                  </a>
                  <ul class="nav collapse" id="social">
                    <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Comment Feed</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>
				
			  <!-- parent pages-->
				  <a class="nav-link" href="{{route('admin.dashboard.core-admin.withdrawalrecord')}}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Withdrawals & Funding</span></div>
                  </a><!-- parent pages-->


                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label" style="font-family:'Spartan','Brandon Grotesque';font-weight:600;font-size:14px;color:#000;">Site-wide Settings</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="{{ route('admin.dashboard.core-admin.settings') }}" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Settings & Configuration</span></div>
                  </a><!-- parent pages-->
      				  <a class="nav-link" href="{{ route('admin.dashboard.core-admin.maintenance') }}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Maintenance</span></div>
                  </a>
                    </li>
              </ul>
			  
              <div class="settings mb-3">
                <div class="card alert p-0 shadow-none" role="alert">
                  <div class="btn-close-falcon-container">
                    <div class="btn-close-falcon" aria-label="Close" data-bs-dismiss="alert"></div>
                  </div>
                  <div class="card-body text-center"><img src="{{ asset('img/icons/spot-illustrations/navbar-vertical.png') }}" alt="" width="80" />
                    <p class="fs--2 mt-2">Loving how we roll here?<br />Give us a shout out <a href="{{route('admin.dashboard.core-admin.index') }}">OliveFlowFX</a></p>
                    <div class="d-grid"><a class="btn btn-sm btn-primary" href="" alt="facebook page" target="_blank">Facebook</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="{{ route('index') }}">
            <div class="d-flex align-items-center"><img class="me-2" src="{{ asset('img/floxpool.png') }}" alt="" width="40" /><span class="font-sans-serif">OliveFlowFX</span></div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
           
			  </div>
			  
			  <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
         	<!-- START OF TOP NAVIGATION-->
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  @if(Auth::user()->profile_img!=NULL)
                  <img class="rounded-circle" src="{{ asset('img/160x160/'.Auth::user()->profile_img) }}" alt="{{Auth::user()->username}}" />
@else
<img class="rounded-circle" src="{{ asset('img/160x160/img1.jpg') }}" alt="{{Auth::user()->username}}" />
@endif
           </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
         		  <a class="dropdown-item" href="{{ route('admin.dashboard.user') }}">Profile &amp; personal settings</a>					
					
                  <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
			  <!--end of sidebar navigation-->
			  
			  
  @yield('content')

		@include('layouts.admin_copyright_footer')

</main><!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


        <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    	
	<script src="{{ asset('css/admin/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('css/admin/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('css/admin/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('css/admin/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('css/admin/polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
    <script src="{{ asset('css/admin/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/theme.js') }}"></script>
		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

<!--generic function to close all bootstrap modals-->
<script type="text/javascript">
function closeModal(modalToClose){
$('#closeModal').click( function (){
$(modalToClose).modal('hide');     
}); 
}
</script>	

</body>
</html>