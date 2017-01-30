@extends('layouts.new.dataadmin')

@section('title', 'GregetHouse')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Form Pembelian</h1>
    <div class="container">
    <form action="{{ url('data') }}" method="POST" enctype="multipart/form-data">
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
    <td><input type="text" name="nama"></td>
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
    <td><p>Alamat :</p></td>
    <td><textarea name="alamat" rows="8" cols="80"></textarea></td>
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
    </div>


@endsection
