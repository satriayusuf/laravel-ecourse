<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta lang="id"> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{Auth::user()->name}} - Laris</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">



    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Laris
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a href="/home" class="nav-link mr-3">Beranda</a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('pemograman')}}" class="nav-link mr-3">Pemograman</a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('desain')}}" class="nav-link mr-3">Desain</a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('indexhasil')}}" class="nav-link mr-3">Hasil</a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('pengaturan')}}" class="nav-link mr-3">Pengaturan</a>
                          </li>
                    </ul>
                 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
 
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">

                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Keluar') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</div>
    <main class="py-3">
        @yield('content')
    </main>
<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/ruang-admin.min.js')}}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js')}}"></script>
@yield('js')
</body>
</html>
