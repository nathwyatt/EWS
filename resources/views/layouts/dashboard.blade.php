
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="image/icon.png">

  <title>EWS Muvumba</title>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/ews.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">

  <!-- charts -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>


  <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



<link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
   <link rel="stylesheet" href="/../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="image/icon.jpg" alt="EWSLogo" height="60" width="60">
  </div>
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item dropdown">
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-globe"></i> Lang
            </button>
            <div class="dropdown-menu" aria-labelledby="langDropdown">
              <a class="dropdown-item" href="locale/en"><i class="fas fa-flag-usa"></i> @lang('public.english')</a>
              <a class="dropdown-item" href="locale/fr"><i class="fas fa-flag-france"></i>  @lang('public.french')</a>
            </div>
          </div>
      </li>
    </ul>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Help
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">FAQ</a>
            <a class="dropdown-item" href="#">Support</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Contact</a>
          </div>
        </li>
      </ul>
      <!-- SEARCH FORM -->
      <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
      </div>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/image/icon.jpg" alt="EWSLogo"  alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Munanira
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        @php
            $notifications = session('notifications');
        @endphp

        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge  badge-warning navbar-badge">{{ $notifications ? $notifications->count() : 0 }}</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            @if ($notifications)
                <span class="dropdown-item dropdown-header">{{ $notifications->count() }} Notifications</span>
                <div class="dropdown-divider"></div>

                @foreach ($notifications as $notification)
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i>
                        @if (isset($notification->data['message']))
                            {{ $notification->data['message'] }}
                        @else
                            Default message
                        @endif
                        <span class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                @endforeach
            @else
                <a href="#" class="dropdown-item">
                    No new notifications
                </a>
                <div class="dropdown-divider"></div>
            @endif
        </div>
    </li>

      
    <li class="dropdown user-menu">
      <div href="#" class="dropdown-toggle nav-link " data-toggle="dropdown">
        <img src="/avatars/{{Auth::user()->avatar}}" class="user-image img-size-50 img-circle mr-3" alt="User Image" />
        <span class="d-none d-lg-inline-block" style="">{{Auth::user()->name}}</span>
      </div>
      <ul class="dropdown-menu dropdown-menu-right">
        <!-- User image -->
        <li class="dropdown-header bg-dark">
          <img src="/avatars/{{Auth::user()->avatar}}" class="img-circle img-size-50 img-circle mr-3" alt="User Image" />
          <div class="d-inline-block">
            <div class="nav-item">
            {{Auth::user()->name}} 
            </div>
            <div class=" nav-item">
            <small >{{ Auth::user()->email}}</small>
            </div>
          </div>
        </li>

        <li>
          <a href="{{'/profile'}}" class="dropdown-item">
            <i class="mdi mdi-account "></i> My Profile
          </a>
        </li>
       
        <li class="right-sidebar-in">
          <a href="javascript:0"class="dropdown-item"> 
            <i class="mdi mdi-settings "></i> Setting </a>
        </li>

        <li class="right-sidebar-in">
          <li class="nav-item">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            <i class="mdi mdi-logout"></i> Log Out </a>
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          </li>
            
        </li>
      </ul>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->
</div>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="/image/icon.jpg" alt="EWSLogo"  class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-family: 'Aclonica'; color:#9cff69">EWS </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{'home'}}" class="nav-link dark">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            @lang('public.dashboard')

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p style="font-family: 'Bokor'">
                            @lang('public.management') 
                            <i class="right fas fa-angle-left "></i>
                            {{-- <span class="badge badge-dark right">3</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('user-list')
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-family: 'Bokor'">@lang('user-management')</p>
                            </a>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <a href="{{ route('stations.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-family: 'Bokor'">@lang('station-management')</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-family: 'Bokor'">@lang('roles-management')</p>
                            </a>
                        </li>
                        <!-- Add other words and their English names here -->
                    </ul>
                </li>
                <!-- Other menu items -->
                <!-- Data -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p style="font-family: 'Bokor'">
                            @lang('public.data')
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-family: 'Bokor'">Bushoga station</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-family: 'Bokor'">Nsheke station</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Chart -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p style="font-family: 'Bokor'">
                            @lang('public.chart') 
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('charts.bar_chart') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-family: 'Bokor'">Bar charts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-family: 'Bokor'">Flot</p>
                            </a>
                        </li>

                    </ul>
                </li>
                 <!-- Notification -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>
                        <p style="font-family: 'Bokor'">
                            @lang('public.notification') 
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ ('/notifications') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="font-family: 'Bokor'">sents notification</p>
                            </a>
                        </li>
                        

                    </ul>
                </li>
                <!-- Profile -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p style="font-family: 'Bokor'">
                            @lang('public.profile') 
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{'/profile'}}" class="nav-link">
                                <p style="font-family: 'Bokor'">view profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                {{-- <h1 class="m-0">@lang(public.dashboard)</h1> --}}
              </div><!-- /.col -->
             
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
<main>
    @yield('content')
</main>

<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- ews App -->
<script src="/dist/js/ews.js"></script>

<script src="/dist/js/pages/dashboard.js"></script>
{{-- charts --}}
<script src="/https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- Include jQuery -->
<script src="/https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include Select2 JS -->
<script src="/https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="/../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/../../plugins/jszip/jszip.min.js"></script>
<script src="/../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="/../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="/../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
      // Get the current hour
      var currentHour = new Date().getHours();

// Select the day and night icons
var dayIcon = document.querySelector('.day-icon');
var nightIcon = document.querySelector('.night-icon');

// Check if it's day or night
if (currentHour >= 6 && currentHour < 18) { // Between 6 AM and 6 PM
    dayIcon.style.display = 'inline-block'; // Show day icon
    nightIcon.style.display = 'none'; // Hide night icon
} else { // Otherwise (nighttime)
    dayIcon.style.display = 'none'; // Hide day icon
    nightIcon.style.display = 'inline-block'; // Show night icon
}
</script>
</body>
</html>