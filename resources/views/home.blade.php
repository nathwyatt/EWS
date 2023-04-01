


@extends('layouts.dashboard')

@section('content')
    <!-- Main content -->
    <section class="content">

      @php
        $user = Auth::user()->id;
       
if ($user == Auth::user()->hasRole("Station-manager")) {
  return view('station-manager.index');
}
        
      @endphp
      
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p class="card-text">{{ $numStations }}</p>

                <p>stations</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{'stations'}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       
        
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <p class="card-text">{{ $numRoles }}</p>

                <p>roles</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{'/roles'}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p class="card-text">{{ $numUsers }}</p>
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{'/users'}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <p class="card-text">1</p>

                <p>Bar Chart</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            {{-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  charts
                </h3>
                <div class="card-body">
                <canvas id="myChart"></canvas>
                </div>
                <div class="card-tools">
                </div> --}}
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">charts</h4>
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                    <script>
                    var xValues = ["Jan", "Feb", "Mar", "Ap", "Jun"];
                    var yValues = [55, 49, 44, 24, 15];
                    var barColors = ["red", "green","blue","orange","brown"];
                    
                    new Chart("myChart", {
                      type: "bar",
                      data: {
                        labels: xValues,
                        datasets: [{
                          backgroundColor: barColors,
                          data: yValues
                        }]
                      },
                      options: {
                        legend: {display: false},
                        title: {
                          display: true,
                          text: "User registration Chart"
                        }
                      }
                    });
                    </script>
                  </div>
                </div>
            
                  <!-- /.direct-chat-msg -->

          </section>
        </div> 
      </div>
    </section>    
    
 @endsection>
          

 