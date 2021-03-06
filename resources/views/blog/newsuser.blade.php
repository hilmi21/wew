@extends('layouts.new.datauser')

@section('title', 'IAM A Gamer')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>



    <hr>
    <div class="container">
        @if($news->count())
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                <thead align="center">
                       <tr>
                           <th>No</th>
                           <th>Game</th>
                           <th>Judul</th>
                           <th>Foto Game</th>
                           <th>Tanggal</th>
                           <th>Aksi</th>
                       </tr>
                   </thead>
                  @foreach($news as $new)
                       <tr>
                          <td align="center">{{ $new->id }} </td>
                          <td> {{ $new->game }}</td>
                          <td> {{ $new->judul }} </td>
                          <td> <img src="{{ url('uploadgambar') }}/{{ $new->gambar }}" width="200" height="200"></td>
                          <td> {{ $new->tanggal }} </td>
                          <td>
                            <a href="{{ $new->link }}"><input type="submit" name="submit" value="View"></a>
                          </td>

                       </tr>
                   @endforeach
                </table>
                <ul class="pagination">
                {!! $news->render() !!}
                </ul>
            </div>
        @endif
        </div>
</div>



@endsection
