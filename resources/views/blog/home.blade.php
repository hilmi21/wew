@extends('layouts.master')

@section('title', 'GregetHouse')

@section('content')

    <center><h2>Welcome to GregetHouse</h2></center>
    <h2>No Greget No Life</h2>




    <h3>Seberapa Greget Anda ?</h3>
    <p>Di sini Kita Mempunya Produk Untuk Anda Lebih Greget</p>
    <hr>
    @if($produk->count())
    <div class="container">
    <h4>Table Data</h4>
    <table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Spesifikasi Produk</th>
        <th>Harga</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($produk as $pro)
    <tr>
        <td>{{ $pro->id }}</td>
        <td><a href="/data/{{ $pro->id }}">{{ $pro->kode_produk }}</a></td>
        <td>{{ $pro->nama_produk }}</td>
        <td>{{ $pro->spek }}</td>
        <td>{{ $pro->harga }}</td>
        <td><a href="/data/{{ $pro->id }}/edit"><input type="submit" name="submit" value="edit"></a></td>
        <td>
         <form action="/data/{{ $pro->id }}" method="post">
         <input type="submit" name="submit" value="delete">{{ csrf_field() }}
         <input type="hidden" name="_method" value="DELETE">
        </td>
    </tr>
    </tbody>
    </table>
    </form>
    </div>


    @endif


    @endforeach

@endsection
