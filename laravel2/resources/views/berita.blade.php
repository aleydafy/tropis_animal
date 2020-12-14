<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Tropis Animals in The World</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wild Nature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="assets/assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/assets2/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="assets/assets2/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- pop-up-box -->
<link rel="stylesheet" type="text/css" href="assets/assets2/css/jquery.lightbox.css">
<script src="assets/assets2/js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.news-grid1 a').lightbox(); 
  });
</script>
<!-- //pop-up-box -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
<div class="banner">
	<nav class="navbar navbar-expand-lg navbar-light bg-transparant navbar-default">
		<div class="logo">
			<a class="navbar-brand" href="/">Tropis <span>Animals</span></a>
				<div class="leaf">
					<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
				</div>
		</div>
		<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/">Beranda</a></li>
				<li><a href="/profile">Tentang</a></li>
				<li class="active"><a href="/berita">Berita</a></li>
				<li><a href="/galeri">Galeri</a></li>
				<li><a href="/kontak">Kontak</a></li>
			</ul>
		</div>
	</nav>
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-info">
								<h1>Hewan Tropis di Dunia</h1>
								<p>Hewan yang berada tinggal di hutan tropis, seperti hutan Negara Indonesia.</p>
							</div>
						</li> 
						<li>
							<div class="banner-info">
								<h1>Hutan Tropis</h1>
								<p>Habitat hutan tropis terbesar adalah Hutan Amazon di Amerika Selatan. 
                           Hutan tropis merupakan tempat yang tingkat keanekaragaman hayatinya 
                           paling tinggi karena ditinggali hewan berbagai jenis dan ukuran.</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h1>Ekosistem Hutan Hujan Tropis</h1>
								<p>Ekosistem hutan hujan tropis secara geografis terletak diantara 23°27’ 
                           Lintang Utara dan 23°27’ Lintang Selatan yang meliputi wilayah Asia 
                           Selatan dan Asia Tenggara, Australia bagian Utara, sebagian besar wilayah 
                           Afrika, Kepulauan Pasifik, Amerika Tengah dan sebagian besar wilayah Amerika Selatan.</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!--FlexSlider-->
				<link rel="stylesheet" href="assets/assets2/css/flexslider.css" type="text/css" media="screen" />
				<script defer src="assets/assets2/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
	<!--End-slider-script-->
		</div>
	</div>
<!-- //banner -->
<div class="boostrap-icons">
	<div class="container">
	<div class="col-md-6 boostrap-icons-right"><br>
			<img src="assets/img/david-clode-AtCChdVhAmA-unsplash.png" alt=" " class="img-responsive" style="width: 450px;"/>
		</div>
		<div class="col-md-6 boostrap-icons-left">
			<div class="boostrap-icons-grids">
				<div class="col-xs-10 boostrap-icons-grid">
					<h2>{{ $beritaTerbaru['judul'] }}</h2>
					<p class="tentang">{{ $beritaTerbaru['konten'] }}</p>   
				</div>
				<div class="clearfix"> </div>
				<br><br>
				<div class="donates1">
					<a href="/profile">Selanjutnya</a>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //boostrap-icons -->
<!-- boostrap-icons -->
<div class="boostrap-icons">
	<div class="container">
		<div class="boostrap-icons-grids">
				<h3 style="font-size: 15px;margin: 0;text-transform: capitalize;color: #537bc4;font-family: 'Abril Fatface', cursive;">BERITA</h3>
				<h2 style="color: black;font-size: 25px;margin: 1em 0 0;font-family: 'Abril Fatface', cursive;">Baca Berita Terbaru Kami <br> Dalam Tropis Animals</h2><br>
			<div class="row">
				@foreach($berita as $item)
				<div class="col-md-4 mb-3">
					<div class="card" style="width: 20rem;">
                        <img src="{{ Storage::url('public/blogs/').$item->image }}" class="img-fluid">
						<div class="card-body">
							<h5 class="card-title">{{ $item->judul }}</h5>
							<p class="card-text">{{ $item->konten }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<!-- //boostrap-icons -->
<!-- footer -->

<div class="copy">
	<div class="footer">
		<div class="footer-grids">
		  <div class="container">
			  <div class="col-md-3 footer-grid">
					<h4>Services</h4>
					<ul>
						<li><a href="#">rerum hic tenetur</a></li>
						<li><a href="#">molestiae non recusandae</a></li>
						<li><a href="#">voluptates repudiandae</a></li>
						<li><a href="#">necessitatibus saepe</a></li>
						<li><a href="#">debitis aut rerum</a></li>
					</ul>
			  </div>
			 <div class="col-md-3 footer-grid">
					<h4>Information</h4>
				   <ul>
						<li><a href="#">quibusdam et aut</a></li>
						<li><a href="#">Testimonals</a></li>
						<li><a href="#">Archives</a></li>
						<li><a href="about.html">Our Staff</a></li>
				  </ul>
			 </div>
			 <div class="col-md-3 footer-grid">
					<h4>More details</h4>
					<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="contact.html">Privacy Policy</a></li>
						<li><a href="contact.html">Terms &amp; Condition</a></li>
						<li><a href="contact.html">Site map</a></li>
					</ul>
			 </div>
			 <div class="col-md-3 footer-grid contact-grid">
					<h4>Contact us</h4>
					<ul>
						<li><span class="c-icon"> </span>Newyork Still Road.</li>
						<li><span class="c-icon1"> </span><a href="mailto:info@example.com">mail@example.com</a></li>
						<li><span class="c-icon2"> </span>756 gt globel Place</li>
					</ul>
					<ul class="social-icons">
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="thumb"> </a></li>
					</ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		</div>
	</div>
		 <p>Copyright © 2015 Wild Nature. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="assets/assets2/js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>