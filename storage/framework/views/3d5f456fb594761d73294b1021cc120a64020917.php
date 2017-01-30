<html>
<head>
<title>IAm a Gamer</title>
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
            <?php if(Auth::guest()): ?>
  <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
            <?php else: ?>
  <li style="float:right"><a class="active" href="<?php echo e(url('/logout')); ?>">Logout</a></li>
            <?php endif; ?>
</ul>
</div>
<div id="content">
<?php echo $__env->yieldContent('content'); ?>
</div>

<div id="footer">
</div>



</body>
</html>