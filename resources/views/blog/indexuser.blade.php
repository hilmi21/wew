@extends('layouts.new.datauser')

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
        @if($produk->count())
                <table>
                       <tr>
                           <th>No</th>
                           <th>Kode Game</th>
                           <th>Nama Game</th>
                           <th>Harga</th>
                           <th>Foto Game</th>
                           <th>Aksi</th>
                       </tr>
                  @foreach($produk as $pro)
                       <tr>
                          <td align="center">{{ $pro->id }} </td>
                          <td> {{ $pro->kode_produk }}</td>
                          <td> {{ $pro->nama_produk }} </td>
                          <td> {{ $pro->harga }} </td>
                          <td> <img src="{{ url('uploadgambar') }}/{{ $pro->file_gambar }}" width="200" height="200"></td>
                          <td><a href="/viewuser/{{ $pro->id }}"><input type="submit" name="submit" value="view"></a></td>

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
