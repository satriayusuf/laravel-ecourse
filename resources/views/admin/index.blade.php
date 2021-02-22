@extends('layouts.admin')
<style>
    .matadmin{
        color: white;
        background-color: #6777ef;
        text-align: center;
        padding: 10px 10px 10px 10px;
    }
    .count{
        font-size: 30px;
        font-weight: 600px;
        color: #6777ef;
    }
    .selamat{
        background-color: #6777ef;
    }
    .kataselamat{
        font-size: 23px;
        color: white;
    }
</style>
@section('content')
<div class="selamat">
    <div class="container">
        <div class="row">
            <div class="col-8  mt-2 mb-3">
                <h4 class="kataselamat mt-3">Selamat Datang {{Auth::user()->name}}</h4>
            </div>
        </div>  
    </div>
</div>
<div class="mt-5">
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h3 class="matadmin">Materi</h3>
            <div class="card-body">
               <div class="nomor text-center">
                <p class="count">{{$materi}}</p>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <h3 class="matadmin">Proses Belajar</h3>
        <div class="card-body">
           <div class="nomor text-center">
            <p class="count">{{$hasil}}</p>
        </div>
    </div>
</div>
</div>
<div class="col-md-12">
    <div class="card mt-3">
        <h3 class="matadmin">Murid</h3>
        <div class="card-body">
           <div class="nomor text-center">
            <p class="count">{{$akun}}</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
