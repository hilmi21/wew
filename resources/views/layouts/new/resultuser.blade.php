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
   <li><a href="/homeuser">Home</a></li>
  <li><a href="/datauser">Game List</a></li>
  <li><a href="/galeriuser">Gallery</a></li>
  <li><a href="/newsuser">News</a></li>
  <li><a href="/contactuser">Contact</a></li>
  <li><a href="/aboutuser">About</a></li>
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
@yield('content')
</div>





</body>
</html>