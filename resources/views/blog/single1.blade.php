@extends('layouts.masterhome')

@section('title', 'Welcome To The Hell !')

@section('content')
    <h1>Selamat Datang Di BLog Ini</h1>
    <h2> {{ $blog->tittle }} !! </h2>
    <hr />
    <p>
            {{ $blog->description}}
    </p>


@endsection
