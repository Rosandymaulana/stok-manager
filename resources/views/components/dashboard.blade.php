@extends('layouts.index')
@section('content')

<head>
  <link href="{{ asset('style/assets/css/table.css') }}" rel="stylesheet">
</head>

<body>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Products</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jmlProduct }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">In Hand</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-boxes"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $inHand }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Low Stock</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box-arrow-down"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $lowStock }}</h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">Reports</h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                          series: [{
                            name: 'Alat Kantor',
                            data: [31, 40, 28, 51, 42, 82, 56],
                          }, {
                            name: 'ELektronik',
                            data: [11, 32, 45, 32, 34, 52, 41]
                          }, {
                            name: 'Rumah Tangga',
                            data: [15, 11, 32, 18, 9, 24, 11]
                          }],
                          chart: {
                            height: 350,
                            type: 'area',
                            toolbar: {
                              show: false
                            },
                          },
                          markers: {
                            size: 4
                          },
                          colors: ['#4154f1', '#2eca6a', '#ff771d'],
                          fill: {
                            type: "gradient",
                            gradient: {
                              shadeIntensity: 1,
                              opacityFrom: 0.3,
                              opacityTo: 0.4,
                              stops: [0, 90, 100]
                            }
                          },
                          dataLabels: {
                            enabled: false
                          },
                          stroke: {
                            curve: 'smooth',
                            width: 2
                          },
                          xaxis: {
                            type: 'datetime',
                            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                          },
                          
                        }).render();
                      });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            {{-- Table --}}
            <div class="container">
              <div class="table-wrapper">
                <div class="table-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h2>Last <b>Transactions</b></h2>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Barang</th>
                      <th>Nama Barang</th>
                      <th>Jenis Barang</th>
                      <th>Stok</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>B4495C</td>
                      <td>Kursi</td>
                      <td>Rumah Tangga</td>
                      <td>7</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>C3462N</td>
                      <td>Meja</td>
                      <td>Rumah Tangga</td>
                      <td>14</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>F3331L</td>
                      <td>Pensil</td>
                      <td>Alat Kantor</td>
                      <td>37
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="clearfix">
                  <div class="hint-text">Showing <b>15</b> out of <b>125</b> entries</div>
                  <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                  </ul>
                </div>
              </div>
            </div>
            {{-- End Table --}}

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Transactions</h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '5%',
                        left: 'center'
                      },
                      series: [{
                        name: 'Access From',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                          show: false,
                          position: 'center'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: false
                        },
                        data: [{
                          value: 1048,
                          name: 'In'
                        },
                        {
                          value: 484,
                          name: 'Out'
                        },
                        {
                          value: 300,
                          name: 'In Hand'
                        }
                        ]
                      }]
                    });
                  });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates</h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="{{ asset('style/assets/img/news-1.jpg') }}" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('style/assets/img/news-2.jpg') }}" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('style/assets/img/news-3.jpg') }}" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
</body>
@endsection