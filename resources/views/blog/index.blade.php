@extends('layouts.new.dataadmin')

@section('title', 'IAM A Gamer')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>



    <p>Di sini Kita Mempunya Game Seru Untuk Anda !!</p>
    <hr>
    <div class="container">
    <form action="{{ url('query') }}" method="GET">
                <center>
                <input type="text" class="validate" name="q">
                <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Cari <i class="material-icons right">Produk</i></button>
                </center>
     </form>
        @if($produk->count())
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
                  @foreach($produk as $pro)
                       <tr>
                          <td align="center">{{ $pro->id }} </td>
                          <td> {{ $pro->kode_produk }}</td>
                          <td> {{ $pro->nama_produk }} </td>
                          <td> {{ $pro->harga }} </td>
                          <td> <img src="{{ url('uploadgambar') }}/{{ $pro->file_gambar }}" width="200" height="200"></td>
                          <td>
                            <a href="/data/{{ $pro->id }}/edit"><input type="submit" name="submit" value="edit"></a>
                            <form action="/data/{{ $pro->id }}" method="post">
                            <input type="submit" name="submit" value="delete">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            </form>
                            <a href="/view/{{ $pro->id }}/buy"><input type="submit" name="submit" value="view"></a>
                          </td>

                       </tr>
                   @endforeach
                </table>
                <ul class="pagination">
                {!! $produk->render() !!}
                </ul>
            </div>
        @endif
        </div>
</div>



@endsection
