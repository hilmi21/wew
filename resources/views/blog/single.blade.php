@extends('layouts.master')

@section('title', 'GregetHouse')

@section('content')
    <h1>Welcome to GregetHouse</h1>
    <h2>No Greget No Life</h2>
    <p>Hanya Orang Greget Lah Yang pastas Di sini</p>

    <h2>{{ $data->kode_produk }} :v</h2>
    <hr>
    <P>
    {{$data->spek}}
    </P>



@endsection
