
<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Jamu Kromengan</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href={{asset("assets/css/style-starter.css")}}>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<script src={{asset("script.js")}}></script>
  </head>
  <body id="home">
<section class=" w3l-header-4 header-sticky">
	<!--header-->
	<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<a class="navbar-brand" href="{{route('home')}}">
					<span class=""></span> Jamu Kromengan
				</a>
				<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html">
				<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					
				</button>
	  
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
							<a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
						<li class="nav-item">
							<a class="nav-link" href="{{route('about')}}">About</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	  </header>
	<!--/header-->
</section>

<script src={{asset("assets/js/jquery-3.3.1.min.js")}}></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src={{asset("assets/js/bootstrap.min.js")}}></script>
<!-- //bootstrap working-->
<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
	  var scroll = $(window).scrollTop();
  
	  if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	  } else {
		$("#site-header").removeClass("nav-fixed");
	  }
	});
  
	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
	  $("header").toggleClass("active");
	});
	$(document).on("ready", function () {
	  if ($(window).width() > 991) {
		$("header").removeClass("active");
	  }
	  $(window).on("resize", function () {
		if ($(window).width() > 991) {
		  $("header").removeClass("active");
		}
	  });
	});
  </script>
  <!--//MENU-JS-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->


<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
	<div class="about-inner about ">
		<div class="container">   
		<div class="breadcrumbs-sub">
				
		</div>
		</div>

	</div>
</section>
<!-- breadcrumbs //-->

<section class="w3l-recent-work">
	<div class="jst-two-col">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 ">
					<label for="inputName" class="form-label">Nama</label>
					<input type="text" class="form-control" id="name" placeholder="Nama lengkap" required>
					<div class="form-text">
						<br>
						<label for="inputNumber" class="form-label">No Telepon</label>
						<input type="text" class="form-control" id="number" placeholder="Mohon masukkan nomer telepon anda" required>
						<div class="form-text">
							<br>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mohon isi alamat secara lengkap" id="addres" required></textarea>
							</div>
							<button type="submit" value="bayar" class="btn btn-success" id="tombol">Pesan</button>
						</div> 
					</div> <!-- form-text -->
				</div> <!-- col-lg-6 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- jst-two-col -->
</section>


  <section class="w3l-footer-29-main w3l-copyright">
	<div class="container">
	  <div class=" bottom-copies text-center">
		<p class="copy-footer-29">© 2020 cutlery. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
	  </div>
	</div>
  </section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>
