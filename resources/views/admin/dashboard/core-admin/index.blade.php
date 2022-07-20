@extends('layouts.admin_app')
@section('content')
@include('layouts.admin_topbar')

<!-- ===END of SIDEBAR NAVIGATION ===-->
<script>
  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $chart_data; ?>`);
      var ctx = $("#pie-chart");
 
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Segmentation & Values",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Market RoI Segmentation",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });
 
  });
</script>


<!--body-->
<div class="row g-3 mb-3">
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Daily ROI <small class="text-tiny" style="margin-left:5px;">(Today's earnings so far)</small>
                  <span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" style="GD Sherpa Regular" title="Calculated according to today's report">
                    <span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>  
                    </h6>
            

          @php 
          $ysReport = \App\Http\Controllers\DailyReportController::iterateLoop($yesterdayReports,'total_daily_roi')[0]['val'];
          $ysR=0;
          if($ysReport<=0){
            $ysR=0;
          }else{
          $ysR=$ysReport;
          if($ysR>1000){
            $ysR = ($ysR/1000)."K";
          }
          }

          echo "<small><b>Yesterday RoI:</b> </small>$".$ysR ."<small class='text-tiny'>USDT</small>";
          @endphp
          
          </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row">
                    <div class="col">
                      <p class="font-sans-serif lh-1 mb-1 fs-4" style="font-weight:700;font-size:30px !important">
                      @if(\App\Http\Controllers\DailyReportController::iterateLoop($reports,'total_daily_roi')[0]['val']!=null){{ '$'.number_format(\App\Http\Controllers\DailyReportController::iterateLoop($reports,'total_daily_roi')[0]['val'],1)}} @else {{ '$0' }} @endif 
                      <small class="small-xs">USDT</small></p>
                      <span class="badge badge-soft-success rounded-pill fs--2">+{{ number_format(((\App\Http\Controllers\DailyReportController::iterateLoop($reports,'total_daily_roi')[0]['val'])/$total_startup_asset)*100,2) }}%</span>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2">All Assets</h6>
                  <small class="text-tiny">(All Cummulative Profits and Assets From Inception)</small>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                      <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">

                  <h3>${{ ((\App\Http\Controllers\DailyReportController::iterateLoop($fullReport,'total_daily_roi')[0]['iter'])+$total_startup_asset)/1000 }}K <small class="text-tiny">USDT</small></h3>
                      
                </div>
                        <span class="badge rounded-pill fs--2 bg-200 text-primary">
                        </span>
                    </div>
                    <div class="col-auto ps-0 mt-n4">
                      <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}' data-echart-responsive="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
           <!-- <div class="col-md-6 col-xxl-3">
              </div>
        -->

          <div class="card h-md-100">
                <div class="card-body">
                  <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                      <h6 class="mt-1">Monthly RoI Segmentation</h6>
                      <div class="fs--2 mt-3">
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Directors</span></div>
                          <div class="d-xxl-none">33</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Investors</span></div>
                          <div class="d-xxl-none">29</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Charity</span></div>
                          <div class="d-xxl-none">10</div>
                        </div>


                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-danger"></span><span class="fw-semi-bold">Traders</span></div>
                          <div class="d-xxl-none">28</div>
                        </div>

                      </div>
                    </div>
                    <div class="col-auto position-relative">
                      <div class="echart-market-share"></div>
                      <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">


                      ${{ number_format(((\App\Http\Controllers\DailyReportController::iterateLoop($fullReport,'total_daily_roi')[0]['iter'])/1000),1) }}K

                      </div>

                      



                    </div>
                  </div>
                </div>
              </div>
        </div>
        
         
        <div class="row g-0">
            <div class="col-sm-6 col-xxl-3 pe-sm-2 mb-3 mb-xxl-0">
              <div class="card">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Active Users</h6>
                  <small>All active users on the platform </small>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body py-2">
                  @foreach($active_user as $a)
                <div class="d-flex align-items-center position-relative mb-3">  
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="@if(\App\Profile::get_profile_data($a->id,'profile_img')) {{ asset('img/160x160/'.\App\Profile::get_profile_data($a->id,'profile_img')) }} @else {{ asset('img/160x160/img1.jpg') }} @endif" alt="{{$a->username}}" />
                    </div>
                    
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="">{{$a->username}}</a></h6>
                      <p class="text-500 fs--2 mb-0">@if($a->is_admin) {{ 'Admin' }} @else {{ 'User' }} @endif</p>
                    </div>            
                </div>  
                @endforeach
                 </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="{{route('admin.dashboard.core-admin.allusers',['type'=>'all'])}}">All Active Users<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
              </div>
            </div>
            </div>
       

@endsection