@extends('layouts.new.resultuser')

@section('title', 'IAM A Gamer')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>



    <p>Di sini Kita Mempunya Game Seru Untuk Anda !!</p>
    <hr>
    <div class="container">
    <form action="{{ url('queryuser') }}" method="GET">
                <center>
                <input type="text" class="validate" name="q">
                <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Cari <i class="material-icons right">Produk</i></button>
                </center>
     </form>
       @if (count($hasil))
<div class="card-panel green white-text">Hasil pencarian : <b>{{$query}}</b></div>
<div class="table-responsive">
    <table class="table table-hover table-bordered">
    <thead align="center">
           <tr>
               <th>No</th>
               <th>Kode Game</th>
               <th>Nama Game</th>
               <th>Harga</th>
               <th>Foto Game</th>
               <th>Aksi</th>
           </tr>
       </thead>
    @foreach($hasil as $data)
    <tr>
       <td align="center">{{ $data->id }} </td>
       <td> {{ $data->kode_produk }}</td>
       <td> {{ $data->nama_produk }} </td>
       <td> {{ $data->harga }} </td>
       <td><img src="{{ url('uploadgambar') }}/{{ $data->file_gambar }}" width="200" height="200"></td>
       <td><a href="/viewuser/{{ $data->id }}"><input type="submit" name="submit" value="view"></a></td>
    </tr>
  @endforeach


{{ $hasil->render() }}

@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
@endif
        </div>
</div>



@endsection

