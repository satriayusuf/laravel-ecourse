@extends('layouts.admin')

@section('content')
<div class="card shadow">
	<div class="card-header font-hasil-admin">Pengaturan Akun</div>
	<div class="container mt-2">
	<form action="{{ route('pengaturanpwadmin', Auth::user()->id)}}" enctype="multipart/form-data" method="post">
		@csrf
		<div class="form-group">
			<label for="exampleInputPassword">Ubah Password</label>
			<input type="password" class="form-control" name="password" placeholder="Ubah Password">
		</div>
		<button type="submit" class="float-right btn btn-primary mt-2 mb-2">Ubah Password</button>
	</form>
	</div>
</div>
@endsection