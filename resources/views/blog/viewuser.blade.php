@extends('layouts.new.datauserr')

@section('title', 'IAM A GAMER')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css2.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>
    <hr>
    <h1>{{ $produk->nama_produk }}</h1>
    <center><img src="{{ url('uploadgambar') }}/{{ $produk->file_gambar }}" width="700" height="400"></td></center>
    <hr>
    <h3>Kode Produk :  </h3>
    <h3>{{ $produk->kode_produk }}</h3>
    <h3>Spesifikasi Produk :{{ $produk->spek }}</h3>
    <h3>Harga : {{ $produk->harga }}</h3>
    <hr>

    <h1>Form Pembelian</h1>
    <form action="{{ url('viewuser') }}" method="POST" enctype="multipart/form-data">
    <table>
    <table border="0">
    <tr>
    <td><p>Kode Game :</p></td>
    <td><input type="text" value="{{ $produk->kode_produk }}" readonly="readonly"  name="kode_produk" ></td>
    </tr>
    <tr>
    <td><p>Harga :</p></td>
    <td><input type="text" value="{{ $produk->harga }}" readonly="readonly" name="harga"></td>
    </tr>
    <tr>
    <td><P>Jumlah :</P></td>
    <td><input type="text" name="jumlah"></td>
    </tr>
    <tr>
    <td><p>Nama :</p></td>
    <td><input type="text" name="nama" value="{{ Auth::user()->name }}"></td>
    </tr>
    <tr>
    <td><p>Nomor Ktp :</p></td>
    <td><input type="text" name="nomor_ktp"></td>
    </tr>
    <tr>
    <td><p>Foto Ktp :</p></td>
    <td><input type="file" name="foto_ktp"></td>
    </tr>
    <tr>
    <td><p>No HP :</p></td>
    <td><input type="text" name="no_hp" value="{{ Auth::user()->no_hp }}"></td>
    </tr>
    <tr>
    <td><p>Alamat :</p></td>
    <td><textarea name="alamat" rows="8" cols="80">{{ Auth::user()->alamat }}</textarea></td>
    </tr>
    <tr>
    <td>Via</td>
    <td>
    <select name="via">
    <option>JNE</option>
    <option>POS INDONESIA</option>
    <option>TIKI</option>
    </select>    
    </td>
    </tr>
    </table>
    <hr />
    <center>
        <input type="submit" value="beli">
    </center>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    </form>

                



@endsection
