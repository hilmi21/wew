@extends('layouts.new.dataadmin')

@section('title', 'GregetHouse')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Edit Data</h1>
    <hr>
    <h3>Data Produk</h3>
    <div class="container">
    <form action="/data/{{$data->id}}" method="post"  enctype="multipart/form-data">
    <p>Kode Produk :</p><input type="text" name="kode_produk" value="{{ $data->kode_produk }} "><br>
    <p>Nama Produk :</p><input type="text" name="nama_produk" value="{{ $data->nama_produk }} "><br>
    <p>Spek Produk :</p><textarea name="spek" rows="8" cols="80">{{ $data->spek }}</textarea><br>
    <p>Harga Produk :</p>    <input type="text" name="harga" value="{{ $data->harga }} "><br>
    <p>Link You Tube  :</p>  <input type="text" name="youtube" value="{{ $data->youtube }} "><br>
    <hr>
    <img src="{{ url('uploadgambar') }}/{{ $data->file_gambar }}" width="200" height="200">
    <p>Foto Produk  :</p>    <input type="file" name="file_gambar"><br>
    <hr>
    <center>
        <input type="submit"  value="edit">
    </center>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">
    </form>
    </div>


@endsection
