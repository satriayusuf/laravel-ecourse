@extends('layouts.app')

@section('content')
<div class="container">
	<a href="/home" class="btn btn-primary mt-3 mb-3"><i class="fas fa-hand-point-left"></i> Kembali ke Beranda</a>
	<h3>Pengaturan</h3>
	<div class="card shadow mt-3">
		<div class="mt-3">
			<div class="container-fluid">
				<form action="{{ route('pengaturanupdate', Auth::user()->id)}}" enctype="multipart/form-data" method="post">
					@csrf
					<div class="form-group">
						<label for="exampleInputPassword">Nama</label>
						<input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword">Email</label>
						<input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
					</div>
					<button type="submit" class="float-right btn btn-primary mt-2 mb-2">Ubah</button>
				</form>
			</div>
		</div>
		<div class="mt-3">
			<div class="container">
			<h3>Ubah Password</h3>
			</div>
			<div class="container-fluid">
				<form action="{{ route('pengaturanpassword', Auth::user()->id)}}" enctype="multipart/form-data" method="post">
					@csrf
					<div class="form-group">
						<label for="exampleInputPassword">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Ubah Password">
					</div>
 					<button type="submit" class="float-right btn btn-primary mt-2 mb-2">Ubah Password</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection