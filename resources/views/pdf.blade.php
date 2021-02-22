<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html" charset="utf-8">

    <title>{{Auth::user()->name}}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
      body{
        background: url('sertifikat/126.png');
        background-repeat: no-repeat;
        background-size: 100%;
      }

        
      </style>
  </head>
  <body>
    <h1 style="text-align: center; margin-top: 360px; color:#505050;">{{Auth::user()->name}}</h1>
    <div class="container">
       <p>Selamat Atas Lulus nya mengerjakan Program Pembelajaran <u>{{$hasil->namahasil}}</u> Pada Aplikasi Laris. </p>
    </div>
</body>
</html>
