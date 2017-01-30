@extends('layouts.master')

@section('title', 'Welcome To The Hell !')

@section('content')
    <h1>Selamat Datang Di Death Arena</h1>
    <p>What The F*ck Gitu Loh</p>

    <hr>
    @foreach ($blog as $blog)
    <li>
    <a href="/blog/{{ $blog->id}}">{{ $blog->tittle }}</a>  : {{$blog->description}}
    <form action="/blog/{{ $blog->id }}" method="post">

        <input type="submit" name="submit" value="delete">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
    </form>
    </li>
    @endforeach



    <h2>Simple Pagination</h2>
    <ul class="pagination">
      <li><a href="#">«</a></li>
      <li><a href="#">1</a></li>
      <li><a class="active" href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li><a href="#">7</a></li>
      <li><a href="#">»</a></li>
    </ul>
    <h2>Next Prev Pagination</h2>
    <ul class="pagination">
    	<li><a href="#">Prev</a></li>
    	<li><a href="#">Next</a></li>
    </ul>
    <h2>Navigation</h2>
    <ul class="pagination">
    	<li><a class="active" href="#">Home</a></li>
    	<li><a href="#">Product</a></li>
    	<li><a href="#">About Us</a></li>
    </ul>

    <script src="/js/main.js"></script>
@endsection
