@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @foreach($materi as $p)
                    <div class="card shadow">
                        @if($p->foto)
                        <img src="{{asset('img/'.$p->foto)}}" class="w-100" alt="">
                        @endif
                        {{ $p->nama }}
                        {{ $p->isi }}
                        {{ $p->video }}
                        {{ $p->kategori }}

                        <form action="" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <input type="text" style="display:none;" name="namahasil" value="{{$p->nama}}">
                          <input type="text" style="display:none;" name="id_user" value="{{ Auth::user()->id}}">
                          <input type="text" style="display:none;" name="status" value="Sedang Ditinjau">
                          <input type="submit" class="btn btn-warning" value="Selesai">
                      </form>
                  </div>
                  @endforeach
                  <br>
              </div>

              <h1>HASILL</h1>
              <p>{{Auth::user()->id}}</p>
              @foreach($hasil as $d)
                @if($d->id_user == Auth::user()->id)

              <div class="card shadow mt-2">
                {{$d->namahasil}}
                {{$d->status}}
                @if($d->status == 'lulus')
            <a class="btn btn-primary" href="{{ route('print')}}" class="btn btn-sm btn-danger"> Print</a>
                @else
                <a class="btn btn-secondary">Lagi ditinjau ngab </a>
                @endif
            </div>
                @endif

            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
