@extends('layouts.app')

@section('content')
<!-- <h1>HASILL</h1>
<p>{{Auth::user()->id}}</p>
@foreach($hasil as $d)
@if($d->id_user == Auth::user()->id )

<div class="card shadow mt-2">
	{{$d->namahasil}}
	{{$d->status}}
	@if($d->status == 'lulus')
	@if($d->sertifikat == 'iya')
	<a class="btn btn-primary" href="/pdf/{{$d->id}}" class="btn btn-sm btn-danger"> Cetak</a>
	@else
	<a class="btn btn-secondary">Sertifikat Tidak Tersedia </a>
	@endif
	@elseif($d->status == 'gagal')
	<a class="btn btn-warning" href="/deletehasil/{{$d->id}}">Maaf Kamu belum lulus, klik disini untuk mengulangi pelajaran</a>
	@else
	<a class="btn btn-secondary">Lagi ditinjau ngab </a>
	@endif
</div>
@endif

@endforeach -->

	<div class="container">
		<div class="card card-hasil-admin ml-3 shadow mb-4">
			<div class="card-header font-hasil-admin">Hasil Proses Pembelajaran</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordeed" id="example">
						<thead>
							<tr>
								<th>Materi</th>
								<th>Status</th>
								<th>Sertifikat</th>
								<th>File Hasil</th>
							</tr>
						</thead>
						<tbody>
							@foreach($hasil as $p)
							@if($p->id_user == auth()->user()->id)
							<tr>
								<td>{{$p->namahasil}}</td>
								<td>
									@if($p->status == 'lulus')
									<span class="badge badge-success">{{$p->status}}</span>
									@elseif($p->status == 'gagal')
									<span class="badge badge-danger">{{$p->status}}</span>
									@else
									<span class="badge badge-warning">{{$p->status}}</span>
									@endif
								</td>
								<td>
									@if($p->status == 'gagal')
									<a class="btn btn-warning" href="/deletehasil/{{$d->id}}"><i class="fas fa-redo"></i> Ulangi Pelajaran</a>
									@elseif($p->status == 'lulus')
										@if($p->sertifikat == 'iya')
									<a class="btn btn-success" href="/pdf/{{$d->id}}" target="_blank" class="btn btn-sm btn-danger"> 
									<i class="fas fa-print"></i>
									Sertifikat</a>
								</td>
								<td>
									<a href="{{asset('hasilpembelajaran/'.$p->dokumenhasil)}}"  class="btn btn-primary">
										<span class="fas fa-download"></span> File
									</a>
								</td>
										@else
									<a class="btn btn-secondary">Sertifikat Tidak Tersedia </a>
								</td>
								<td>
									<a href="{{asset('hasilpembelajaran/'.$p->dokumenhasil)}}" class="btn btn-primary">
										<span class="fas fa-download"></span> File
									</a>
								</td>
										@endif
								</td>
								<!-- <td>
									<a href="{{asset('hasilpembelajaran/'.$p->dokumenhasil)}}"  class="btn btn-primary">
										<span class="fas fa-download"></span> File
									</a>
								</td> -->
									@else
								<td>
									<a href="{{asset('hasilpembelajaran/'.$p->dokumenhasil)}}" class="btn btn-primary">
										<span class="fas fa-download"></span> File
									</a>
									@endif
								</td> 	
							</tr>
						@endif
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
@stop