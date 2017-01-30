@extends('layouts.master')

@section('title', 'GregetHouse')

@section('content')
    <h1>Input Data User</h1>

    <form action="/user" method="post">
    <p>Nama :</p><input type="text" name="nama" ><br>
    <p>Password :</p>    <input type="text" name="password"><br>
    <p>Umur :</p>    <input type="text" name="umur" ><br>
    <p>Seberapa Greget :</p>    <textarea name="seberapa_greget" rows="8" cols="80"></textarea><br>
    <hr />
    <center>
        <input type="submit" name="submit" value="create">
    </center>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    </form>


@endsection
