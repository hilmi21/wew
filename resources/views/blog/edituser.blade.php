@extends('layouts.master')

@section('title', 'GregetHouse')

@section('content')
    <h1>Edit User</h1>
    <h2>User</h2>

    <form action="/user/{{$user->id}}" method="post">
        <p>Nama :</p><input type="text" name="nama" value="{{ $user->nama }} " ><br>
        <p>Password :</p>    <input type="text" name="password" value="{{ $user->password }} "><br>
        <p>Umur :</p>    <input type="text" name="umur" value="{{ $user->umur }} " ><br>
        <p>Seberapa Greget :</p>    <textarea name="seberapa_greget" rows="8" cols="80">{{ $user->seberapa_greget}}</textarea><br>
    <hr />
    <center>
        <input type="submit" name="submit" value="edit">
    </center>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    </form>


@endsection
