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
            <?php if(Auth::guest()): ?>
  <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
            <?php else: ?>
  <li style="float:right"><a class="active" href="<?php echo e(url('/logout')); ?>">Logout</a></li>
            <?php endif; ?>
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