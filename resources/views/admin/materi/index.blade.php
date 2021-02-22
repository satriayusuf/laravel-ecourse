@extends('layouts.admin')

@section('content')
<div class="container">
	<a href="{{route('admin.materitambah')}}" class="btn btn-primary">Tambah Materi</a>
	<div class="row">
		@foreach($mat as $p)
		<div class="col-sm-6 col-md-4 col-lg-4 mt-3">
			<div class="card card-materi-admin shadow" style="width: 18rem;">
				
				@if($p->foto)
				<img src="{{asset('img/'.$p->foto)}}" class="w-100" alt="">
				@endif
				<div class="container-fluid">	
					<p class="font-materi-nama badge"><b>{{ $p->nama }} </b></p>
					<br>
					<p class="font-materi-kategori badge">{{ $p->kategori }}</p>
					
					<div class="row">
						<div class="col-6">
							<a href="/admin/materi/hapus/{{$p->id}}" class="btn mt-3 mb-3 ml-2 btn-danger">Hapus</a>
						</div>
						<div class="col-6">
							<a href="/admin/materi/edit/{{$p->id}}" class="btn mt-3 mb-3 mr-2 btn-warning float-right">Ubah</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!-- <a href="{{route('admin.materitambah')}}" class="btn btn-primary">Tambah Materi</a>
@foreach($mat as $p)
<div class="card shadow" style="width: 18rem;">
	@if($p->foto)
	<img src="{{asset('img/'.$p->foto)}}" class="w-100" alt="">
	@endif
	{{ $p->nama }}
	{{ $p->isi }}
	{{ $p->video }}
	{{ $p->kategori }}

	<a href="/admin/materi/hapus/{{$p->id}}" class="btn btn-danger">Hapus</a>
	<a href="/admin/materi/edit/{{$p->id}}" class="btn btn-warning">Update</a>
</div>
@endforeach -->
@endsection