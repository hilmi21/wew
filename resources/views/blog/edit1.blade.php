@extends('layouts.master')

@section('title', 'Welcome To The Hell !')

@section('content')
    <h1>Selamat Datang Di Edit BLog Ini</h1>

    <form action="/blog/{{ $blog->id }}" method="post">

    <P>Tittle   :</P>    <input type="text"  name="tittle"  value="{{ $blog->tittle }}"> <br>
    <p>Description:</p>    <textarea name="description" rows="8" cols="80">{{ $blog->description}}</textarea> <br>

        <input type="submit" name="submit" value="edit">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
    </form>

@endsection
