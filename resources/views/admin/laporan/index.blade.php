@extends('layouts.admin')

@section('content')

<div id="container-wrapper">
	<div class="container">
		<div class="card card-hasil-admin ml-3 shadow mb-4">
			<div class="card-header font-hasil-admin py-3">Laporan Kegiatan Pembelajaran</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordeed" id="example">
						<thead>
							<tr>
								<th>Nama Siswa</th>
								<th>Kegiatan</th>
								<th>Tanggal</th>
							</tr>
						</thead>
						<tbody>
							@foreach($laporan as $p)
							<tr>
								<td>{{$p->namauser}}</td>
								<td>{{$p->kegiatan}}</td>
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