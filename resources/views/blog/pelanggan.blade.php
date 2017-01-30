@extends('layouts.new.dataadmin')

@section('title', 'IAM A Gamer')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>
    <hr>

    <p>Nama : {{ $pelanggan->nama }}</p>
    <p>Nomor Ktp : {{ $pelanggan->nomor_ktp }}</p>
    <p>Foto Ktp : </p>
    <img src="{{ url('uploadgambar') }}/{{ $pelanggan->foto_ktp }}" width="200" height="200">
    <p>No Hp: {{ $pelanggan->no_hp }}</p>
    <p>Alamat : {{ $pelanggan->alamat }}</p>
    <p>Kode Game : {{ $pelanggan->kode_produk }}</p>
    <p>Harga Game : {{ $pelanggan->harga }}</p>
    <p>Jumlah Barang : {{ $pelanggan->jumlah }}</p>
    <p>Total Pembayaran : {{ $pelanggan->jumlah_pembayaran }}</p>
    <p>Tanggal Transaksi : {{ $pelanggan->created_at }}</p>
    <p>Via : {{ $pelanggan->via }}</p>
   
    <hr>
                



@endsection
