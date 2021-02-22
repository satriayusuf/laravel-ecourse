@extends('layouts.admin')

@section('content')
<div id="container-wrapper">
	<div class="container">
		<div class="card card-hasil-admin ml-3 shadow mb-4">
			<div class="card-header font-hasil-admin py-3">Hasil Proses Pembelajaran</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordeed" id="example">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Hasil</th>
								<th>Status</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($hasil as $p)
							<tr>
								<td>{{$p->namauser}}</td>
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
									<a href="{{asset('hasilpembelajaran/'.$p->dokumenhasil)}}" class="btn btn-primary">
										<span class="fas fa-download"></span> File
									</a>
									<button type="button" class="btn btn-warning" style="color: #fff" data-toggle="modal" data-target="#exampleModal{{ $p->id }}">
										<span class="fas fa-pen-square"></span> Ubah
									</button>
								</td> 	
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@foreach($hasil as $p)
<form action="/admin/hasil/aksi/{{$p->id}}" method="post">
	{{ csrf_field() }}
	{{ method_field('put') }}
	<div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Hasil Proses Pembelajaran Siswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="text" class="form-control" disabled name="namahasil" value="{{$p->namahasil}}">
					<br>
					<select class="form-control" name="status">
						<option value="{{$p->status}}">{{$p->status}}</option>
						<option value="lulus">Lulus</option>
						<option value="gagal">Gagal</option>
					</select>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</div>
		</div>
	</div>
</form>
@endforeach

@endsection
@section('js')
<script>
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').trigger('focus')
	});

	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
@stop