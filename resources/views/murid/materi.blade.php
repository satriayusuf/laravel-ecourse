@extends('layouts.app')

@section('content')
<section id="1" class="mt-5">
	<div class="container">
			<div class="embed-responsive embed-responsive-16by9 mt-3">
				<iframe class="embed-responsive-item" onended="myFunction()" src="{{$materi->video}}" allowfullscreen></iframe>
			</div>
		<div class="card-body">
			<h1 class="mt-3">{{$materi->nama}}</h1>
			<p>{{$materi->isi}}</p>
		</div>
		@if(empty($hasil))
		<h3>Upload Hasil Pembelajaran</h3>
		<p class="text-danger">*Upload File Harus berupa ZIP / RAR</p>
		<form action="/home/aksi/{{$materi->id}}" method="post" enctype="multipart/form-data" >
			{{ csrf_field() }}
			<input type="file" name="dokumenhasil" class="float-left mt-3 form-control">
			<input type="text" style="display:none;" name="id_materi" value="{{$materi->id}}">
			<input type="text" style="display:none;" name="namahasil" value="{{$materi->nama}}">
			<input type="text" style="display: none;" name="status" value="Sedang Ditinjau">
			<input type="text" style="display: none;" name="id_user" value="{{Auth::user()->id}}">
			<input type="text" style="display: none;" name="namauser" value="{{Auth::user()->name}}">
			<input type="text" style="display: none;" name="sertifikat" value="{{$materi->sertifikat}}">
			<input type="submit" class="btn btn-primary float-right mt-3 mb-5" disabled value="Selesai">
		</form>
		@else
		<form action="/hasil">
			<input type="submit" class="btn btn-warning mt-3 mb-5" value="Lihat Hasil">
		</form>

		@endif
	</div>

</section>

<script>
	$(document).ready(
    function(){
        $('input:file').change(
            function(){
                if ($(this).val()) {
                    $('input:submit').attr('disabled',false); 
                } 
            }
            );
    });
</script>
@endsection