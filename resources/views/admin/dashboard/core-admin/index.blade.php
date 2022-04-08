@extends('layouts.admin_app')
@section('content')
@include('layouts.admin_topbar')
	
		<!-- ===END of SIDEBAR NAVIGATION ===-->
		
        
		    <div class="row g-3 mb-3">
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center text-xs">Daily & Weekly Reports<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row">
                    <div class="col">
                      <p class="font-sans-serif lh-1 mb-1 fs-4">$47K</p><span class="badge badge-soft-success rounded-pill fs--2">+3.5%</span>
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
                  <h6 class="mb-0 mt-2 text-xs">Total Stakes <i>for</i> Today</h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                      <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div>
					  <span class="badge rounded-pill fs--2 bg-200 text-primary"><span class="fas fa-caret-up me-1">
					  </span>13.6%</span>
                    </div>
                    <div class="col-auto ps-0 mt-n4">
                      
					  <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},
					  "xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],
					  "grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}' data-echart-responsive="true">
					  </div>
                    
					</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100">
                <div class="card-body">
                  <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                      <h6 class="mt-1 text-xs">Daily ROI Segregation</h6>
                      <div class="fs--2 mt-3">
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Stakers</span></div>
                          <div class="d-xxl-none">40%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Business Directors</span></div>
                          <div class="d-xxl-none">35%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Charity</span></div>
                          <div class="d-xxl-none">25%</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto position-relative">
                      <div class="echart-market-share"></div>
                      <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2"><!--total daily output comes here--> 26M</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3">
              <div class="card h-md-100">
                <div class="card-header d-flex flex-between-center pb-0">
                  <h6 class="mb-0 text-xs">Weather</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-weather-update" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-weather-update"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-2">
                  <div class="row g-0 h-100 align-items-center">
                    <div class="col">
                      <div class="d-flex align-items-center"><img class="me-3" src="assets/img/icons/weather-icon.png" alt="" height="60" />
                        <div>
                          <h6 class="mb-2">New York City</h6>
                          <div class="fs--2 fw-semi-bold">
                            <div class="text-warning">Sunny</div>Precipitation: 50%
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto text-center ps-2">
                      <div class="fs-4 fw-normal font-sans-serif text-primary mb-1 lh-1">31&deg;</div>
                      <div class="fs--1 text-800">32&deg; / 25&deg;</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="row g-0">
            
            <div class="col-lg-6 ps-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-header">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <h6 class="mb-0 text-xs">Total Sales</h6>
                    </div>
                    <div class="col-auto d-flex"><select class="form-select form-select-sm select-month me-2">
                        <option value="0">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                        <option value="4">May</option>
                        <option value="5">Jun</option>
                        <option value="6">July</option>
                        <option value="7">August</option>
                        <option value="8">September</option>
                        <option value="9">October</option>
                        <option value="10">November</option>
                        <option value="11">December</option>
                      </select>
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body h-100 pe-0">
                  <!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js-->
                  <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          
            <div class="col-lg-6 ps-lg-2 mb-3">
              <div class="card">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Active Users</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body py-2">
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="">Emma Watson</a></h6>
                      <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="">Antony Hopkins</a></h6>
                      <p class="text-500 fs--2 mb-0">Moderator</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-away">
                      <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
                      <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-offline">
                      <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">John Lee</a></h6>
                      <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center position-relative false">
                    <div class="avatar avatar-2xl status-offline">
                      <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Rowen Atkinson</a></h6>
                      <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="app/social/followers.html">All active users<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3 ps-sm-2 order-xxl-1 mb-3 mb-xxl-0">
              <div class="card h-100">
                <div class="card-header bg-light d-flex flex-between-center py-2">
                  <h6 class="mb-0">Bandwidth Saved</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex flex-center flex-column">
                  <!-- Find the JS file for the following chart at: src/js/charts/echarts/bandwidth-saved.js-->
                  <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-bandwidth-saved" data-echart-responsive="true"></div>
                  <div class="text-center mt-3">
                    <h6 class="fs-0 mb-1"><span class="fas fa-check text-success me-1" data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                    <p class="fs--1 mb-0">38.44 GB total bandwidth</p>
                  </div>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto"><select class="form-select form-select-sm">
                        <option>Last 6 Months</option>
                        <option>Last Year</option>
                        <option>Last 2 Year</option>
                      </select></div>
                    <div class="col-auto"><a class="fs--1 font-sans-serif" href="#!">Help</a></div>
                  </div>
                </div>
              </div>
            </div>

      
          </div>
		  



@endsection