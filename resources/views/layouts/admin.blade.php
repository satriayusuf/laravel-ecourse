 <!DOCTYPE html>
 <html lang="en">

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Admin - Laris </title>
  <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/ruang-admin.css')}}" rel="stylesheet">
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon">
          <!-- <img src="img/logo/logo2.png"> -->
          <p class="sidebar-brand-icon mt-3">Laris</p>
        </div>
        <!-- <div class="sidebar-brand-text mx-3">LARIS</div> -->
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          Master Data
        </div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="/admin/materi">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Materi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="/admin/hasil">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Proses Belajar</span>
        </a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('laporan')}}">
        <i class="fas fa-fw fa-sticky-note"></i>
        <span>Laporan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('riwayat')}}">
        <i class="fas fa-fw fa-history"></i>
        <span>Riwayat</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
          Side Menu
    </div>
    <li class="nav-item">
      <a class="nav-link" href="{{route('pengaturanadmin')}}">
        <i class="fas fa-fw fa-user-cog"></i>
        <span>Pengaturan Akun</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('pengaturanmurid')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Pengaturan Murid</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Keluar</span>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </li>
  <hr class="sidebar-divider">
 
</ul>
<!-- Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <!-- TopBar -->
    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
      <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
</nav>
<!-- Topbar -->

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
 @yield('content')
</div>
<!---Container Fluid-->
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Design by
        <b><a href="https://instagram.com/satriayusufdwiputra21" target="_blank">Satria Yusuf Dwi Putra</a></b>
      </span>
    </div>
  </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/ruang-admin.min.js')}}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js')}}"></script>

@yield('js')
</body>

</html>