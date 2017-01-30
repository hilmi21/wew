<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <header>
      <nav>
        <a href="/blog">Home</a>
        <a href="/blog">Blog</a>
      </nav>
    </header>
    <br>


    @yield('content')

    <br>
    <footer>
      <p>
        &copy; SakataKuroki 2016
      </p>
    </footer>
    </body>
</html>
