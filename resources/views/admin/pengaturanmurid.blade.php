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
								<th>Email</th>
								<th>Status</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($akun as $p)
							<tr>
								<td>{{$p->name}}</td>
								<td>{{$p->email}}</td>
								<td>
									{{$p->level}}
								</td>
								<td>
									<button type="button" class="btn btn-primary" style="color: #fff" data-toggle="modal" data-target="#exampleModal{{ $p->id }}">
										<span class="fas fa-pen-square"></span> Ganti Kata Sandi
									</button>
								</td> 	
							</tr>
						</tbody>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@foreach($akun as $p)
<form action="/admin/update/pengaturanmurid/{{$p->id}}" method="post">
	{{ csrf_field() }}
	{{ method_field('post') }}
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
					<label for="name" class="mt-3">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Ubah Password">
					<br>
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