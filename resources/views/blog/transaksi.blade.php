@extends('layouts.new.dataadmin')

@section('title', 'IAM A Gamer')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>



    <hr>
    <div class="container">
     </form>
        @if($pembelian->count())
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                <thead align="center">
                       <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>kode Game</th>
                           <th>Jumlah Barang</th>
                           <th>Total Pembayaran</th>
                           <th>Tanggal</th>
                           <th>Aksi</th>
                       </tr>
                   </thead>
                  @foreach($pembelian as $beli)
                       <tr>
                          <td align="center">{{ $beli->id }} </td>
                          <td> {{ $beli->nama }}</td>
                          <td> {{ $beli->kode_produk }} </td>
                          <td> {{ $beli->jumlah }} </td>
                          <td> {{ $beli->jumlah_pembayaran }}</td>
                          <td> {{ $beli->created_at }}
                          <td>
                            <form action="/transaksi/{{ $beli->id }}" method="post">
                            <input type="submit" name="submit" value="delete">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            </form>
                            <a href="/pelanggan/{{ $beli->id }}"><input type="submit" name="submit" value="view"></a>
                          </td>

                       </tr>
                   @endforeach
                </table>
                <ul class="pagination">
                  {!! $pembelian->render() !!}
                </ul>
            </div>
        @endif
        </div>
</div>



@endsection
