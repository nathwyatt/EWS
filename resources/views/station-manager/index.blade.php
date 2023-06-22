@extends('layouts.stations')

@section('content')

<div class="container">
  
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="card-header justify-content-between text-center ">
          <h2> {{Auth::user()->Station->name }} station </h2>
          <div class="date-range-report ">
           <span></span>
          </div>
    </div>
       </div>
  </div>
 
  <div class="row">
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner ">
                <p class="card-text text-yellow">{{ $numfarmers }}</p>

                <p class="card-text text-yellow">community</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{'/community'}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       
        
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p class="card-text card-hover">{{ $numdata }}</p>

                <p class="card-text ">River data</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{'/stationdata'}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner ">
                <p class="card-text text-yellow">{{$unreadNotificationsCount}}</p>
                <p class="card-text text-yellow">notifications</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{'/datanotification'}}" class="small-box-footer">More details <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
     </div>
    
 
  <div class="row">
    <div class="col-md-12">
        <div class="small-box ">
            <a href="{{'/stationdata'}}"  class="badge  bg-light text-center">Data at {{ Auth::user()->station->name }} station</a>
            @if (!empty($data))
                @php $latestData = $data->latest('created_at')->first(); @endphp
                <div class="container">
                    {{ $latestData->created_at }}
                    <div class="row">
                        <div class="col-lg-3 col-3">
                            <div class="small-box" style="background-color: rgba(54, 162, 235, 0.6);">
                                <h1 class="badge text-center">Water level</h1>
                                <div class="inner">
                                    {{ $latestData->water_level }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-3">
                            <div class="small-box" style="background-color: rgba(255, 99, 132, 0.6);">
                                <h1 class="badge text-center">Temperature</h1>
                                <div class="inner">
                                    <p class="card-text">{{ $latestData->temperature }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-3">
                            <div class="small-box" style="background-color: rgba(255, 206, 86, 0.6);">
                                <h1 class="badge text-center">Humidity</h1>
                                <div class="inner">
                                    <p class="card-text">{{ $latestData->hummidity }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-3">
                            <div class="small-box" style="background-color: rgba(75, 192, 192, 0.6);">
                                <h1 class="badge text-center">Soil moisture</h1>
                                <div class="inner">
                                    <p class="card-text">{{ $latestData->soil_moisture }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <a href="{{'/stationdata'}}" class="small-box-footer bg-light">All Station_data records <i class="fas fa-arrow-circle-right bg-light"></i></a>
        </div>
    </div>
</div>

  
  <div class="row">
    <div class="col-md-6">
        <div class="small-box bg-white">
            <a href="{{'/community'}}" class="badge bg-white text-center">farmers around {{ Auth::user()->station->name }}</a>
            <div class="container">
             <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>farmerID</th>
                              <th>first name</th>
                              <th>last name</th>
                              <th>Email</th>
                              <th>phone</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($com as $key => $com)
                              <tr>
                                  <td>{{$com->id}}</td>
                                  <td>{{ $com->fname }}</td>
                                  <td>{{ $com->lname }}</td>
                                  <td>{{ $com->email }}</td>
                                  <td>{{ $com->phone }}</td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="small-box bg-white">
            <a href="" class="badge bg-white text-center">Chart for {{ Auth::user()->station->name }} data</a>
      
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <script>
              var ctx = document.getElementById('myChart').getContext('2d');

              var chart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: {!! json_encode($timeData) !!},
                      datasets: [
                          {
                              label: 'Temperature',
                              data: {!! json_encode($temperatureData) !!},
                              backgroundColor: 'rgba(255, 99, 132, 0.6)',
                          },
                          {
                              label: 'Water Level',
                              data: {!! json_encode($waterLevelData) !!},
                              backgroundColor: 'rgba(54, 162, 235, 0.6)',
                          },
                          {
                              label: 'Soil Moisture',
                              data: {!! json_encode($soilMoistureData) !!},
                              backgroundColor: 'rgba(75, 192, 192, 0.6)',
                          },
                          {
                              label: 'Humidity',
                              data: {!! json_encode($humidityData) !!},
                              backgroundColor: 'rgba(255, 206, 86, 0.6)',
                          },
                      ]
                  },
                  options: {
                      responsive: true,
                      scales: {
                          x: {
                              stacked: true,
                          },
                          y: {
                              beginAtZero: true,
                          }
                      },
                      plugins: {
                          title: {
                              display: true,
                              text: 'Station Data Comparison'
                          }
                      }
                  }
              });
          </script>
            <style>
            .custom-bg-info-40 {
              background-color: rgba(135, 206, 235, 0.4);
            }
            </style>
              <script>
          $(document).ready(function() {
              $('#example1').DataTable({
                  responsive: true,
                  paging: true,
                  pageLength:5
              });
          });
      </script>
        </div>
    </div>
</div>

    </div>


 
</div>

@endsection