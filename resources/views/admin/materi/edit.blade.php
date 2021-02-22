@extends('layouts.admin')

@section('content')
<div>
	<form action="/admin/materi/update/{{$mater->id}}" method="post" enctype="multipart/form-data">

		{{ csrf_field() }}
		{{ method_field('PUT') }}


		<div class="form-group">
			<label>Nama Materi</label>
			<input type="text" name="nama" class="form-control" value="{{$mater->nama}}">
			@if($errors->has('nama'))
			<div class="text-danger">
				{{ $errors->first('nama')}}
			</div>
			@endif
		</div>

		<div class="form-group">
			<label>Video Materi</label>
			<input type="text" name="video" class="form-control" value="{{$mater->video}}">
			@if($errors->has('video'))
			<div class="text-danger">
				{{ $errors->first('video')}}
			</div>
			@endif
		</div>

		<div class="form-group">
			<label>Foto Materi</label>
			<input type="file" name="foto" class="form-control" value="{{$mater->foto}}">
			@if($errors->has('foto'))
			<div class="text-danger">
				{{ $errors->first('foto')}}
			</div>
			@endif
		</div>

		<div class="form-group">
			<label>isi Materi</label>
			<textarea name="isi" class="form-control"> {{$mater->isi}}</textarea>
			@if($errors->has('isi'))
			<div class="text-danger">
				{{ $errors->first('isi')}}
			</div>
			@endif
		</div>

		<div class="form-group">
			<label>Kategori</label>
			<select name="kategori" class="form-control">
				<option value="{{$mater->kategori}}">{{$mater->kategori}}</option>
				<option value="pemrograman">Pemrograman</option>
				<option value="desain">Desain</option>
			</select>
			@if($errors->has('kategori'))
			<div class="text-danger">
				{{ $errors->first('kategori')}}
			</div>
			@endif
		</div>

		<div class="form-group">
			<label>Sertifikat</label>
			<select name="sertifikat" class="form-control">
				<option value="{{$mater->sertifikat}}">{{$mater->sertifikat}}</option>
				<option value="iya">Iya</option>
				<option value="tidak">Tidak</option>
			</select>
			@if($errors->has('sertifikat'))
			<div class="text-danger">
				{{ $errors->first('sertifikat')}}
			</div>
			@endif
		</div>

		<input type="submit" class="btn btn-success" value="Tambahkan">
		<a href="{{route('admin.materi')}}" class="btn btn-warning">Kembali</a>
	</form>
</div>
@endsection