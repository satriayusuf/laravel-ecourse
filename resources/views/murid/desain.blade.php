@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@foreach($pem as $p)
		@if($p->kategori == 'desain')
		<div class="col-lg-4 col-md-6 row justify-content-center mt-3">
			<a href="/materi/{{$p->id}}" class="card-new">
				<div class="card card-newww shadow-sm ">
					@if($p->foto)
					<img src="{{asset('img/'.$p->foto)}}" class="card-img-top img-kategori"  alt="">
					@endif
					<div class="card-body">
						<h5 class="card-title">{{$p->nama}}</h5>
						<p class="card-text">
							<div class="d-flex">
								<p style="color: blue;">{{$p->kategori}} &nbsp;</p>
							</div>
						</p>
					</div>
					<center>
						<p class="text-muted text-center" style="font-size: 12px;">Di Unggah Pada &nbsp;{{$p->created_at}}</p>
					</center>
				</div>
			</a>
		</div>
		@endif
		@endforeach
	</div>
</div>
@endsection