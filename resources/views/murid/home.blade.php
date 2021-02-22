@extends('layouts.app')

@section('content')
<div class="container">
	<section id="selamatmobile">
		<div class="alert alert-primary">
			<marquee > Selamat Datang {{Auth::user()->name}} Semangat Belajarnya ya !!</marquee>
		</div>
	</section>
	<!-- endmobille -->
	<section id="selamat" class="mt-3">
		<!-- selamat -->
		<div class="selamat">
			<div class="container">
				<div class="row">
					<div class="col-8  mt-3 mb-3">
						<h4 class="kataselamat mt-3">Selamat Datang</h4>
						<h2 class="kataselamat">{{Auth::user()->name}}</h2>
						<h3 class="kataselamat">Semangat Belajarnya ya !!</h3>
					</div>
					<div class="col-4  mt-3 row justify-content-center">
						<img src="{{asset('img/selamat.png')}}" class="w-50" alt="">
					</div>
				</div>	
			</div>
		</div>
		<!-- endselamat -->
	</section>
	<section id="materiterbaru" class="mt-4">
		<!-- materi -->
		<p class="mt-3 judul-materi-mobile">Materi Terbaru</p>
		<div class="mt-mobile">
			@if($materi->count() > 0)
			@foreach($materi as $u)
			<div class=" row justify-content-center">
				<a href="/materi/{{$u->id}}" class="card-new">
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
				</a>
				<!-- endcard -->
			</div>
			@endforeach
			@endif
		</div>
		<!-- endmobile -->
		<!-- Swiper -->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				@if($materi->count() > 0)
				@foreach($materi as $u)
				<div class="swiper-slide">
					<a href="/materi/{{$u->id}}" class="card-new">
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
					</a>
					<!-- endcard -->
				</div>
				@endforeach
				@endif
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>
		<!-- endmateri -->
	</section>
	<section id="mba" class="mt-5">
		<!-- mba -->
		<div class="mt-5">
			<p class="title-today">Mau Belajar Apa Kamu Hari ini?</p>
			<center>
				<div class="d-flex mt-4">
					<a href="/pemrograman" class="card-new">
						<div class="card card-kategori">
							<img src="{{asset('img/'.$u->foto)}}" class="card-img-top img-kategori" style="" alt="">
							<div class="card-body">
								<h5 class="card-title text-center">Pemrograman</h5>
							</div>
						</div>
					</a>
					<a href="/desain" class="card-new ml-3">
						<div class="card card-kategori">
							<img src="{{asset('img/'.$u->foto)}}" class="card-img-top img-kategori" style="" alt="">
							<div class="card-body">
								<h5 class="card-title text-center">Desain</h5>
							</div>
						</div>
					</a>
				</div>
			</center>
		</div>
		<!-- endmba -->
	</section>
</div>
<br>
<hr>
<footer id="footer" class="footer mt-5" >
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
				<h1 class="kenapalaris">Kenapa Laris cocok untuk Kamu ?</h1>
				<h5 class="mt-3">Belajar Ngoding dan Desain
				kini terasa menjadi mudah dan menyenangkan</h5>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
				<div class="mt-3 kudufloat">
					<h3 class="data-kenapa"><i class="fas fa-check-circle ceklis"></i> Materi Up to Date </h3>
					<h3 class="data-kenapa"><i class="fas fa-check-circle ceklis"></i> Sertifikat Kelulusan </h3>
					<h3 class="data-kenapa"><i class="fas fa-check-circle ceklis"></i> Bahasa Indonesia </h3>
					<h3 class="data-kenapa"><i class="fas fa-check-circle ceklis"></i> Akses Kelas Selama-lamanya </h3>
				</div>
			</div>
		</div>
		<hr class="mt-5 mb-5">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h1 class="mt-3 mb-3"> Laris</h1>
				<p>Laris (Online Nuris) Merupakan E-course yang diciptakan oleh siswa SMK Nurul Islam yang bertujuan untuk membantu siswa agar lebih produktif dalam meningkatkan skill belajar mereka </p>
			</div>
		</div>
	</div>
	<hr class="mt-5 mb-5">
	<p class="text-center ">Design By <a href="https://instagram.com/satriayusufdwiputra21" target="_blank">Satria Yusuf Dwi Putra</a></p>

</footer>
</div>
@endsection