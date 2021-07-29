
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
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
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
						<li class="nav-item @@home__active">
							<a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="{{route('about')}}">About</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="{{route('about')}}">Cek Pesanan</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	  </header>
	<!--/header-->
</section>


<!-- //bootstrap working-->
<!--/MENU-JS-->

<!-- disable body scroll which navbar is in active -->


<!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner about ">
            <div class="container">   
            
					</div>

   		</div>
    </section>
<!-- breadcrumbs //-->

<section class="w3l-recent-work">
	<div class="jst-two-col">
		<div class="container">
			<div class="row" style="margin-bottom: 40px;">
				<div class="my-bio col-lg-4">
					<h3>Cari Pesanan</h3>
					<form id="form_cari">
					<div class="form-group">
			          <label for="exampleInputEmail1">Cari Menggunakan </label>
			          <select class="form-control" name="tipe" id="tipe">
			          	<option value="1">Nomor/Kode Pemesanan</option>
			          	<option value="2">Nama Pemesan</option>
			          	<option value="3">Nomor Hp Pemesan</option>
			          </select>
			        </div>
			        <div class="form-group">
			          <label for="exampleInputPassword1">Nilai Pencarian</label>
			          <input id="nilai" type="text" class="form-control" name="hp" id="exampleInputEmail1" placeholder="Masukkan Nilai Pencarian" value="" required="">
			        </div>
			        <div class="form-group">
			        	<button type="submit" class="btn btn-primary">Mulai Pencarian</button>
			        	
			        		<button type="button" class="btn btn-success" id="xx" disabled="">Buka WA</button>
			        </div>
			        <div class="form-group">
			        	<label for=""><u><strong>Penting!</strong></u> </label>
			        	<label for="">Nomor Rekening Pembayaran 1 : <strong>XXXXXXXX</strong> </label>
			        	<label for="">Atas Nama : <strong>XXXXXXXX</strong> </label>
			        	<label for="">Nomor Rekening Pembayaran 2 : <strong>XXXXXXXX</strong> </label>
			        	<label for="">Atas Nama : <strong>XXXXXXXX</strong> </label>
			        </div>
			        </form>
			        
				<p class="para mb-3"></p>
				</div>
				<div class="col-lg-8" id="detail_pesanan">
					Silahkan Mencari Pesanan Dengan Nomor Pesanan / Nama Pemesan / No. Hp Pemesan 
				<img src="" alt="product" class="img-responsive about-me" style="width:100%;">
				</div>
			</div>	
		</div>
		<div class="container"></div>
	</div>
</section>

<section class="w3l-footer-29-main">
	<div class="footer-29 py-5 text-center">
	  <div class="container">
		<div class="footer-list-29 footer-1 ">
				<h2><a href="{{route('home')}}" class="footer-logo"><span class="fa fa-cutlery"></span> cutlery </a></h2>
				
	
		  </div>
		<div class="row footer-top-29">

		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Address</h6>
				<ul>
					<li><p><span class="fa fa-map-marker"></span> Estate Business, #32841 block, #221DRS Real estate business building, UK.</p></li>
				</ul>
		  </div>
		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Opening Hours</h6>
				<ul>
						<li><p><span>Mon-Fri:</span> 9AM-11PM</p></li>
					<li><p><span>Sat-Sun:</span> 10AM-1PM</p></li>
				</ul>
		  </div>
		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Contact Us</h6>
				<ul>
					<li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
					<li><a href="mailto:corporate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span> cutlery-mail@support.com</a></li>
				</ul>
		  </div>
		</div>
	</div>
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
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE dDataTable) -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
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
	$("#form_cari").submit(function(e){
		e.preventDefault();
	  $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
      $.ajax({
       type: "POST",
        timeout: 50000,
       // url: 'pengaturan/logs',
        url: '/pesanan/cari/',
        async: true,
        data: {'_token':'{{ csrf_token() }}',tipe:$('#tipe').val(),nilai:$('#nilai').val()},
        success: function (res) {
          $(`#detail_pesanan`).html('');
          $(`#detail_pesanan`).html(res);
          $(`#tbl_bayar`).show();

          //$(`#modal_detail_pesanan`).modal('show');
        },
        error: function (res, textstatus) {
          if (textstatus === "timeout") {
            notice('Response Time Out', 'error');
          } else {
            notice(res.responseJSON.message, 'error');
          }
        }
      });
	});
	$( "#xx" ).click(function() {
	  $("#modal_bayar").modal("show");
	}); 
</script>
<!-- /move top -->

<div class="modal fade" id="modal_bayar">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Bayar Pesanan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="pesanan_form" enctype="multipart/form-data">
      <div class="modal-body">
        <!-- /.card-header -->
        
          <!-- /.card-body -->
      
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success" onclick="">Buat Pesanan</button>
      </div>
    </form>

    
    <!-- /.modal-content -->
    </div>
  <!-- /.modal-dialog -->
  </div>
</div>
</body>

</html>
