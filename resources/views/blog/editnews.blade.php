@extends('layouts.new.dataadmin')

@section('title', 'IAM A Gamer')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Edit Data</h1>
    <hr>
    <h3>Data News</h3>
    <div class="container">
    <form action="/news/{{$news->id}}" method="post"  enctype="multipart/form-data">
    <p>Game :</p><input type="text" name="game" value="{{ $news->game }} "><br>
    <p>Judul :</p><input type="text" name="judul" value="{{ $news->judul }} "><br>
    <p>Tanggal :</p><input type="text" name="tanggal" value="{{ $news->tanggal }} "><br>
    <p>Link :</p>    <input type="text" name="link" value="{{ $news->link }} "><br>
    <hr>
    <img src="{{ url('uploadgambar') }}/{{ $news->gambar }}" width="500" height="500">
    <p>Foto Game  :</p>    <input type="file" name="gambar"><br>
    <hr>
    <center>
        <input type="submit"  value="edit">
    </center>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">
    </form>
    </div>


@endsection
