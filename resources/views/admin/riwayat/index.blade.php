@extends('layouts.admin')

@section('content')
<!-- <div class="container">
	<div class="table table-striped"> 
		<table>
			<a href="{{route('hapussemuariwayat')}}">Hapus Semua</a>
			<thead>
				<th>nama</th>
				<th>aksi</th>
			</thead>
			@foreach($riwayat as $p)

			<tbody>
				<td>{{$p->namauser}}</td>
				<td>
					{{$p->aksi}}
				</td>
				<td>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $p->id }}">
						AKsi
					</button>
				</td>
				
			</tbody>
			 Modal
			
							 Endmodal
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</table>
	</div>
</div> -->
<div id="container-wrapper">
	<div class="container">
		<div class="card card-hasil-admin ml-3 shadow mb-4">
			<div class="card-header font-hasil-admin py-3">Riwayat</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordeed" id="example">
						<thead>
							<tr>
								<th>Nama Siswa</th>
								<th>Kegiatan</th>
								<th>Tanggal & Waktu</th>
							</tr>
						</thead>
						<tbody>
							@foreach($riwayat as $p)
							<tr>
								<td>{{$p->namauser}}</td>
								<td>{{$p->aksi}}</td>
								<td>
									{{$p->created_at}}
								</td>
							</tr>
							@endforeach

						</tbody>
					</div>
				</div>
			</div>
		</div>
	</table>
</div>
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