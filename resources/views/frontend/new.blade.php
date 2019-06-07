@extends('frontend.layouts.newapp')
@section('content')
<div class="content-i">
    <div class="content-box">
                        <div class="row pt-4">
                            <div class="col-sm-12">
                                <!--START - Grid of tablo statistics-->
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end"><select class="form-control form-control-sm rounded"><option value="Pending">Today</option><option value="Active">Last Week </option><option value="Cancelled">Last 30 Days</option></select></form>
                                    </div>
                                    <h6 class="element-header">RFQs</h6>
                                    <div class="element-content">
                                        <div class="tablo-with-chart">
                                            <div class="row">
                                                <div class="col-sm-5 col-xxl-4">
                                                    <div class="tablos">
                                                        <div class="row mb-xl-2 mb-xxl-3">
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">24</div>
                                                                    <div class="label">Pending RFQs</div>
                                                                    <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">12</div>
                                                                    <div class="label">RFQ's closed this Month</div>
                                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">52</div>
                                                                    <div class="label">Partially pending RFQs</div>
                                                                    <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">7</div>
                                                                    <div class="label">RFQ's in last month</div>
                                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 col-xxl-8">
                                                    <!--START - Chart Box-->
                                                    <div class="element-box pl-xxl-5 pr-xxl-5">
                                                        <div class="el-tablo bigger highlight bold-label">
                                                            <div class="value">253</div>
                                                            <div class="label">Monthly RFQ Trend</div>
                                                        </div>
                                                        <div class="el-chart-w"><canvas height="170px" id="rfqChart" width="600px"></canvas></div>
                                                    </div>
                                                    <!--END - Chart Box-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END - Grid of tablo statistics-->
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12">
                                <!--START - Grid of tablo statistics-->
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end"><select class="form-control form-control-sm rounded"><option value="Pending">Today</option><option value="Active">Last Week </option><option value="Cancelled">Last 30 Days</option></select></form>
                                    </div>
                                    <h6 class="element-header">Orders</h6>
                                    <div class="element-content">
                                        <div class="tablo-with-chart">
                                            <div class="row">
                                                <div class="col-sm-5 col-xxl-4">
                                                    <div class="tablos">
                                                        <div class="row mb-xl-2 mb-xxl-3">
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">24</div>
                                                                    <div class="label">Pending RFQs</div>
                                                                    <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">12</div>
                                                                    <div class="label">RFQ's closed this Month</div>
                                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">52</div>
                                                                    <div class="label">Partially pending RFQs</div>
                                                                    <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">7</div>
                                                                    <div class="label">RFQ's in last month</div>
                                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 col-xxl-8">
                                                    <!--START - Chart Box-->
                                                    <div class="element-box pl-xxl-5 pr-xxl-5">
                                                        <div class="el-tablo bigger highlight bold-label">
                                                            <div class="value">58</div>
                                                            <div class="label">Monthly Order Trend</div>
                                                        </div>
                                                        <div class="el-chart-w"><canvas height="170px" id="orderChart" width="600px"></canvas></div>
                                                    </div>
                                                    <!--END - Chart Box-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END - Grid of tablo statistics-->
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12">
                                <!--START - Grid of tablo statistics-->
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end"><select class="form-control form-control-sm rounded"><option value="Pending">Today</option><option value="Active">Last Week </option><option value="Cancelled">Last 30 Days</option></select></form>
                                    </div>
                                    <h6 class="element-header">Products Quoted & Ordered till date</h6>
                                    <div class="element-content">
                                        <div class="tablo-with-chart">
                                            <div class="row">
                                                <div class="col-sm-5 col-xxl-4">
                                                    <div class="tablos">
                                                        <div class="row mb-xl-2 mb-xxl-3">
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">24</div>
                                                                    <div class="label">Products Quoted</div>
                                                                    <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">12</div>
                                                                    <div class="label">Products Delivered</div>
                                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">52</div>
                                                                    <div class="label">Products Rejected</div>
                                                                    <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                                                    <div class="value">7</div>
                                                                    <div class="label">Products in total</div>
                                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 col-xxl-8">
                                                    <!--START - Chart Box-->
                                                    <div class="element-box pl-xxl-5 pr-xxl-5">
                                                        <div class="el-tablo bigger highlight bold-label">
                                                            <div class="value">1858</div>
                                                            <div class="label">New Products Added</div>
                                                        </div>
                                                        <div class="el-chart-w"><canvas height="170px" id="productChart" width="600px"></canvas></div>
                                                    </div>
                                                    <!--END - Chart Box-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END - Grid of tablo statistics-->
                            </div>
                        </div>
                        @include('frontend.includes.chat')
                    </div>
</div>
@endsection
@section('script')
<script>
  if ($("#rfqChart").length) {
      var rfqChart = $("#rfqChart");

      // line chart data
      var lineData = {
        labels: ["1", "5", "10", "15", "20", "25", "30", "35"],
        datasets: [{
          label: "RFQs",
          fill: false,
          lineTension: 0.3,
          backgroundColor: "#fff",
          borderColor: "#047bf8",
          borderCapStyle: 'butt',
          borderDash: [],
          borderDashOffset: 0.0,
          borderJoinStyle: 'miter',
          pointBorderColor: "#fff",
          pointBackgroundColor: "#141E41",
          pointBorderWidth: 3,
          pointHoverRadius: 10,
          pointHoverBackgroundColor: "#FC2055",
          pointHoverBorderColor: "#fff",
          pointHoverBorderWidth: 3,
          pointRadius: 5,
          pointHitRadius: 10,
          data: [27, 20, 44, 24, 29, 22, 43, 52],
          spanGaps: false
        }]
      };

      // line chart init
      var myLineChart = new Chart(rfqChart, {
        type: 'line',
        data: lineData,
        options: {
          legend: {
            display: false
          },
          scales: {
            xAxes: [{
              ticks: {
                fontSize: '11',
                fontColor: '#969da5'
              },
              gridLines: {
                color: 'rgba(0,0,0,0.05)',
                zeroLineColor: 'rgba(0,0,0,0.05)'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                beginAtZero: true,
                max: 65
              }
            }]
          }
        }
      });
    }
</script>
<script>
  if ($("#orderChart").length) {
      var orderChart = $("#orderChart");

      // line chart data
      var lineData = {
        labels: ["1", "5", "10", "15", "20", "25", "30", "35"],
        datasets: [{
          label: "Orders",
          fill: false,
          lineTension: 0.3,
          backgroundColor: "#fff",
          borderColor: "#047bf8",
          borderCapStyle: 'butt',
          borderDash: [],
          borderDashOffset: 0.0,
          borderJoinStyle: 'miter',
          pointBorderColor: "#fff",
          pointBackgroundColor: "#141E41",
          pointBorderWidth: 3,
          pointHoverRadius: 10,
          pointHoverBackgroundColor: "#FC2055",
          pointHoverBorderColor: "#fff",
          pointHoverBorderWidth: 3,
          pointRadius: 5,
          pointHitRadius: 10,
          data: [27, 20, 44, 24, 29, 22, 43, 52],
          spanGaps: false
        }]
      };

      // line chart init
      var myLineChart = new Chart(orderChart, {
        type: 'line',
        data: lineData,
        options: {
          legend: {
            display: false
          },
          scales: {
            xAxes: [{
              ticks: {
                fontSize: '11',
                fontColor: '#969da5'
              },
              gridLines: {
                color: 'rgba(0,0,0,0.05)',
                zeroLineColor: 'rgba(0,0,0,0.05)'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                beginAtZero: true,
                max: 65
              }
            }]
          }
        }
      });
    }
</script>
<script>
  if ($("#productChart").length) {
      var productChart = $("#productChart");

      // line chart data
      var lineData = {
        labels: ["1", "5", "10", "15", "20", "25", "30", "35"],
        datasets: [{
          label: "Products",
          fill: false,
          lineTension: 0.3,
          backgroundColor: "#fff",
          borderColor: "#047bf8",
          borderCapStyle: 'butt',
          borderDash: [],
          borderDashOffset: 0.0,
          borderJoinStyle: 'miter',
          pointBorderColor: "#fff",
          pointBackgroundColor: "#141E41",
          pointBorderWidth: 3,
          pointHoverRadius: 10,
          pointHoverBackgroundColor: "#FC2055",
          pointHoverBorderColor: "#fff",
          pointHoverBorderWidth: 3,
          pointRadius: 5,
          pointHitRadius: 10,
          data: [27, 20, 44, 24, 29, 22, 43, 52],
          spanGaps: false
        }]
      };

      // line chart init
      var myLineChart = new Chart(productChart, {
        type: 'line',
        data: lineData,
        options: {
          legend: {
            display: false
          },
          scales: {
            xAxes: [{
              ticks: {
                fontSize: '11',
                fontColor: '#969da5'
              },
              gridLines: {
                color: 'rgba(0,0,0,0.05)',
                zeroLineColor: 'rgba(0,0,0,0.05)'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                beginAtZero: true,
                max: 65
              }
            }]
          }
        }
      });
    }
</script>
@endsection
 