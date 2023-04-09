<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('style/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('style/assets/img/apple-touch-icon.pn') }}g" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

</head>

<body>

  @include('layouts.header')
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('data_barang') }}">
          <i class="bi bi-person"></i>
          <span>Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('barang_keluar') }}">
          <i class="bi bi-person"></i>
          <span>Transactions</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('lowStok') }}">
          <i class="bi bi-person"></i>
          <span>Low Stock</span>
        </a>
      </li>

      <li class="nav-heading">Product</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('#producIn') }}">
          <i class="bi bi-person"></i>
          <span>Product In</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('#producOut') }}">
          <i class="bi bi-person"></i>
          <span>Product Out</span>
        </a>
      </li>

      <li class="nav-heading">Laporan</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('laporan') }}">
          <i class="bi bi-person"></i>
          <span>Laporan</span>
        </a>
      </li>

      <li class="nav-heading">Users</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('user-profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  @yield('content')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <script>
    let table = new DataTable('#myTable', {
    responsive: true
    });
  </script>
</body>

</html>