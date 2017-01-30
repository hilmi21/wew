<html>
<head>
<title>IAM A Gamer</title>
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
</head>
<body>
<div id="header">
</div>
<div id="menu">
<ul>
  <li><a href="/homeadmin">Home</a></li>
  <li><a href="/data">Game List</a></li>
  <li><a href="/data/create">Input Produk</a></li>
  <li><a href="/user">user</a></li>
  <li><a href="/transaksi">Data Transaksi</a></li>
  <li><a href="/galeri">Gallery</a></li>
  <li><a href="/news">News</a></li>
  <li><a href="/contact">Contact</a></li>
  <li><a href="/about">About</a></li>
  <!-- Authentication Links -->
            @if (Auth::guest())
  <li><a href="{{ url('/register') }}">Register</a></li>
            @else
  <li style="float:right"><a class="active" href="{{ url('/logout') }}">Logout</a></li>
            @endif
</ul>
</div>
</div>
<div id="content">
<h1>Transaksi Berhasil Dilakukan</h1>
</div>


<div id="footer">
</div>

</body>
</html>