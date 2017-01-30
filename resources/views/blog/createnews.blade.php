@extends('layouts.new.dataadmin')

@section('title', 'IAM A Gamer')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Create Berita News</h1>
    <div class="container">
    <form action="{{ url('news') }}" method="POST" enctype="multipart/form-data">
    <p>Game :</p><input type="text" name="Game" ><br>
    <p>Judul :</p>    <input type="text" name="Judul"><br>
    <p>Tanggal :</p>    <input type="text" name="tanggal"><br>
    <p>Link Game :</p>    <input type="text" name="link"><br>
    <p>Foto  :</p>    <input type="file" name="gambar"><br>
    <hr />
    <center>
        <input type="submit" value="create">
    </center>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    </form>
    </div>


@endsection
