<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Product</title>

  <!-- Favicons -->
  <link href="{{url('img/favicon.png')}}">
  <link href="{{url('img/apple-touch-icon.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{url('aos/aos.css')}}">
  <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{url('glightbox/css/glightbox.min.css')}}">
  <link rel="stylesheet" href="{{url('remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{url('swiper/swiper-bundle.min.css')}}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{url('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{url('css/vertical-layout-light/style.css')}}">
    <link rel="stylesheet" href="{{url('vendors/sweetalert2/sweetalert2.min.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
    @section('include-css')

    @show

    @yield('custom-css')
</head>

<body>

    <div class="container-scroller">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

  <!-- Vendor JS Files -->
  <script src="{{url('aos/aos.js')}}"></script>
  <script src="{{url('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('isotope-layout/isotope.pkgd.min.js')}}"></script>
    <!-- plugins:js -->
    <script src="{{url('vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{url('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{url('js/dataTables.select.min.js')}}"></script>
    <script src="{{url('vendors/sweetalert2/sweetalert2.min.js')}}"></script>
    
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('js/off-canvas.js')}}"></script>
    <script src="{{url('js/hoverable-collapse.js')}}"></script>
    <script src="{{url('js/template.js')}}"></script>
    <script src="{{url('js/settings.js')}}"></script>
    <script src="{{url('js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{url('js/dashboard.js')}}"></script>
    <script src="{{url('js/Chart.roundedBarCharts.js')}}"></script>
@section('include-js')

@show

@yield('custom-js')
</body>

</html>