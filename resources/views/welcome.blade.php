<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LARIS - Online Nuris</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <style>
        @media screen and (max-width: 500px){
            .nav-item{
                margin-right: 20px;
            }
            .navbar-toggler{
                color: white;
            }
            #text1{
                font-size: 23px;
            }
            #text2{
                font-size: 28px;
            }
            .mobile{
                width: 250px;
            }
            #title-sec2{
                font-size: 30px;
                margin-top: 40px;
            }
            .capt-sect2{
                font-size: 20px;
            }
            .title-sec3{
                font-size: 30px;
            }
            .swiper-container{
                display: none;
            }
            .title-sec4{
                font-size: 22px;
            }
            .sec4-image{
                display: none;
            }
            .title-sec5{
                font-size: 20px;
                font-weight: 600px;
            }
            .capt-sec5{
                font-size: 15px;
            }
            .sec5-image{
                display: none;
            }
            .capt-sec4{
                font-size: 18px;
                color: white;
            }
            .btn-sec4{
             background-color: transparent;
             border-radius: 5px;
             border-style: solid;
             border-color: white;
             font-size: 15px;
             color: white;
             padding: 5px 5px 5px 5px;
            }
            .btn-sec4:focus{
             background-color: white;
             color: #ff9683;
             padding: 5px 5px 5px 5px;
             font-size: 15px;
             border-radius: 5px;
             border-style: solid;
             border-color: white;
            }
        }

        .capt-sec4{
            color: white;
        }
    </style>

</head>
<body>
    <!-- navbar -->
    <nav id="navbar" class="navbar navbar-mobile navbarjing navbar-expand-md">
        <div class="container-fluid">
            <p id="judulnav" class="mt-3">LARIS</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                =
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-link">
                        <a href="#welcome" class="nav-item mr-5">Beranda</a>
                    </li>
                    <li class="nav-link ">
                        <a href="#price" class="nav-item mr-5">Persyaratan Umum</a>
                    </li>
                    <li class="nav-link ">
                        <a href="#pertanyaan" class="nav-item">Tentang</a>
                    </li>
                </ul> -->

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-link">
                        <a class="nav-item" href="{{ url('/home') }}">Beranda</a>
                    </li>
                    @else
                    <li class="nav-link">
                        <a class="nav-item login shadow-sm" href="{{ route('login') }}">Masuk</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-link">
                        <a class="nav-item" href="{{ route('register') }}">Daftar</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </ul>
                <!-- closed right -->
            </div>
        </div>
    </nav>
    <!-- endnavbar -->
    <!-- section1 -->
    <section id="sec1">
        <div class="container sec1">
            <center>
                <br><br>
                <p id="text1">Gerakan Produktif</p>
                <div>
                    <p id="text2">#Anti Rebahan</p>
                    <img src="{{ asset('img/2.png') }}" class="mobile" alt="">
                </div>
            </center>
        </div>
    </section>
    <!-- endsection1 -->
    <!-- section2 -->
    <section id="sec2" class="mt-3">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-4">
                    <!-- class="w-auto h-100 mb-5" -->
                    <img src="{{ asset('img/Saly-1.png') }}" class="mobile"  alt="">
                </div>
                <div class="col-lg-3 col-md-4"></div>
                <div class="col-12 col-lg-4 col-md-4">
                    <p id="title-sec2">Ayo Tingkatkan <br> Skill Setinggi Langit</p>
                    <p id="capt-sec2">Dengan LARIS, Anda dapat belajar untuk meningkatkan skill yang Anda inginkan. Tidak hanya kelas pemrograman, ada juga kelas desain yang membuat anda menjadi kreatif.</p>
                    <a href="/register">
                        <Button class="btn" >
                            <div class="container">Ayo Gabung
                            </div>
                        </Button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- endsection2 -->
    <section id="sec3">
        <div class="container">
            <p class="title-sec3 judul-materi-mobile text-center mt-5">Materi Terbaru</p>

            <!-- mobile -->
            <!-- materi -->
        <div class="mt-mobile">
            @if($materi->count() > 0)
            @foreach($materi as $u)
            <div class=" row justify-content-center">
                    <div class="card mt-3 shadow" style="width: 18rem; border:none;">
                        @if($u->foto)
                        <img src="{{asset('img/'.$u->foto)}}" class="card-img-top" style="object-fit: cover; width: 100%; height: 50vw;" alt="">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$u->nama}}</h5>
                            <p class="card-text">
                                <div class="d-flex">
                                    <p style="color: blue;">{{$u->kategori}} &nbsp;</p>

                                </div>
                            </p>
                        </div>
                        <center>
                            <p class="text-muted text-center" style="font-size: 12px;">Di Unggah Pada &nbsp;{{$u->created_at}}</p>
                        </center>
                    </div>
                <!-- endcard -->
            </div>
            @endforeach
            @endif
        </div>

            <!-- endmobile -->


            <div class="swiper-container">
            <div class="swiper-wrapper">
                @if($materi->count() > 0)
                @foreach($materi as $u)
                <div class="swiper-slide">
                        <div class="card card-neww " style="width: 18rem;">
                            @if($u->foto)
                            <img src="{{asset('img/'.$u->foto)}}" class="card-img-top" style="object-fit: cover; width: 100%; height: 15vw;" alt="">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{$u->nama}}</h5>
                                <p class="card-text">
                                    <div class="d-flex">
                                        <p style="color: blue;">{{$u->kategori}} &nbsp;</p>

                                    </div>
                                </p>
                            </div>
                            <center>
                                <p class="text-muted text-center" style="font-size: 12px;">Di Unggah Pada &nbsp;{{$u->created_at}}</p>
                            </center>
                        </div>
                    <!-- endcard -->
                </div>
                @endforeach
                @endif
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- endmateri -->




</div>
</section>
<br><br><br><br>
<section id="sec4">
    <div class="container-fluid mt-5">
        <div class="se4">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-12 col-lg-7  mt-5">
                        <h1 class="title-sec4">Terus Melangkah <br> Jalanmu Masih Panjang!!</h1>
                        <h3 class="capt-sec4">Ayo bergabung dengan LARIS untuk menemani dan membantu kamu melangkah untuk masa depan</h3>
                        <br> <br>
                        <a href="/register"><button class="btn-sec4">Daftar Sekarang</button></a>
                        <br>
                    </div>
                    <div class="col-3 col-lg-2">
                        <br>
                    </div>
                    <div class="col-8 col-lg-3">
                        <img src="{{asset ('img/4.png')}}" class="w-100 sec4-image" alt="">
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section id="sec5" class="mt-5">
    <div class="container-fluid">
        <div class="mt-5">
            <div class="bg-sec5 shadow">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-12 mt-5">
                            <h1 class="title-sec5">Tentang LARIS</h1>
                            <p class="capt-sec5 mt-5">LARIS (Online Nuris) Merupakan Online Course Untuk 
                                Siswa - Siswi  SMK NURUL ISLAM, Berbasis Website 
                                kini belajar lebih mudah dan nyaman dengan materi
                                pembelajaran terbaru dan pastinya mudah dipahami
                            oleh Siswa - Siswi SMK NURUL ISLAM</p>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12 mt-5">
                            <img src="{{asset('img/5h.png')}}" class="w-100 sec5-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sec6">
    <br><br><br>
    <footer class="mt-5">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 mt-3">
                        <h3 class="title-sec6 mt-3">Kontak</h3>
                        <div class="d-flex mt-4">
                            <i class="fab fa-2x fa-whatsapp" style="color: white;"></i><p style="color: white;font-size: 18px; padding-left: 5px; padding-right: 5px;">+62 838 1727 4882</p>
                        </div>
                        <div class="d-flex mt-2">
                            <i class="far fa-2x fa-envelope" style="color: white;"></i><p style="color: white;font-size: 18px; padding-left: 5px; padding-right: 5px;">larisschool@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 mt-3">
                        <h3 class="row justify-content-center title-sec6 mt-3">Kategori</h3>
                        <a >
                            <div class="box shadow text-center color-primary">
                                Pemrograman
                            </div>
                        </a>
                        <a >
                            <div class="box shadow text-center color-primary">
                                Desain
                            </div>
                        </a>
                    </div>
                    <div class="col-1">
                        &nbsp;
                    </div>
                    <div class="col-12 col-lg-4 ml-auto mt-3">
                       <!--  <h3 class="title-sec6 mt-3">Masukan</h3>
                        <input type="text" class="form-control inputduar shadow mt-3" placeholder="Nama Lengkap">
                        <textarea name="" id="" class="form-control mt-3" placeholder="Masukan"></textarea>
                        <a href="#" class="buttona"> Kirim </a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-botom mt-5">
            Design By Satria
        </div>
    </footer>
</section>

<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>
</body>
</html>
