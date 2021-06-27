
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
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
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
						<li class="nav-item active">
							<a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item @@about__active">
							<a class="nav-link" href="{{route('about')}}">About</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	  </header>
	<!--/header-->
</section>

<div class="modal fade" id="modal_buat_pesanan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pembuatan Pesanan</h4>
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
        <button type="submit" class="btn btn-primary" onclick="">Buat Pesanan</button>
      </div>
    </form>

    
    <!-- /.modal-content -->
    </div>
  <!-- /.modal-dialog -->
  </div>
</div>

<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
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

<section class="w3l-hero-headers-9" id="home">
  <div class="slide text-center header11" data-selector="header11">
      <div class="container">
          <div class="banner-text ">
              <h3 class=" "> Selamat Datang di <br>Website Penjualan Jamu Desa Kromengan</h3>
          </div>
      </div>

  </div>
</section>

<section class="w3l-covers-18">
        <div class="covers-main ">
            <div class="container">
              <div class="main-titles-head ">
                <h3 class="header-name ">
                  Macam-macam Jamu
                </h3>
                <p class="tiltle-para  ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
                <div class="gallery-image row">
                	@foreach($produk as $prd => $pr)
                  <div class="img-box col-lg-3 col-md-6 col-sm-6">
                    <img src="{{ asset('foto_produk/'.$pr->gambar) }}" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="{{route('about')}}">{{ $pr->nama }}</a></h5>
                    <p class="para">{{ $pr->deskripsi }}.</p>
                    <br>
                    <a href="#pesan" class="btn btn-primary tombol" onclick="buat_pesanan( {{ $pr->id }} )">Order</a>
                  </div>
                  @endforeach

                  {{--  
                  <div class="img-box col-lg-4 col-md-6 col-sm-6">
                    <img src="assets/images/herbal bottle.jpeg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="{{route('about')}}">Garlic Roast Chicken</a></h5>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                    <br>
                    <a href="{{route('checkout')}}" class="btn btn-primary tombol">Order</a>
                  </div>
                  <div class="img-box col-lg-4 col-md-6 col-sm-6">
                    <img src="assets/images/herbal bottle.jpeg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="about.html">Butter pecan caramel</a></h5>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                    <br>
                    <a href="{{route('checkout')}}" class="btn btn-primary tombol">Order</a>
                  </div>
                    <div class="img-box col-lg-4 col-md-6 col-sm-6">
                      <img src="assets/images/herbal bottle.jpeg" alt="product" class="img-responsive ">
                      <h5 class="my-2"><a href="about.html">Stuffed Baby Eggplant</a></h5>
                      <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                      <br>
                      <a href="{{route('checkout')}}" class="btn btn-primary tombol">Order</a>
                    </div>
                    <div class="img-box col-lg-4 col-md-6 col-sm-6">
                      <img src="assets/images/herbal bottle.jpeg" alt="product" class="img-responsive ">
                      <h5 class="my-2"><a href="about.html">Classic Key Lime Pie </a></h5>
                      <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                      <br>
                      <a href="{{route('checkout')}}" class="btn btn-primary tombol">Order</a>
                    </div>
                    <div class="img-box col-lg-4 col-md-6 col-sm-6">
                      <img src="assets/images/herbal bottle.jpeg" alt="product" class="img-responsive ">
                      <h5 class="my-2"><a href="about.html">Classic Stuffed PEPPERS</a></h5>
                      <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                      <br>
                      <a href="{{route('checkout')}}" class="btn btn-primary tombol">Order</a>
                    </div>
                    --}}
                  </div>
                  <div class="row">
                  	<div class="img-box col-lg-12">
                  		{{ $produk->links() }}
                  	</div>
                  </div>
                </div>
            </div>
        </div>
    </section>

<section class="w3l-footer-29-main">
	<div class="footer-29 py-5 text-center">
	  <div class="container">
		<div class="footer-list-29 footer-1 ">
				<h2><a href="index.html" class="footer-logo"><span class="fa fa-cutlery"></span> cutlery </a></h2>
				<p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe qui repellat nam vero consectetur dicta eos suscipit. Numquam at minus architecto asperiores cupiditate. At molestias laborum voluptatibus numquam aperiam in.</p>
	
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

	const buat_pesanan = (p) => {
	  $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
	  $.ajax({
	   // type: "POST",
	    timeout: 50000,
	   // url: 'pengaturan/logs',
	    url: '/order/'+p,
	    async: true,
	    //data: {isi:new FormData($('#store_form')[0])},
	    success: function (res) {
	      console.log(res);
	      $(`#modal_buat_pesanan .modal-dialog .modal-body`).html('');
	      $(`#modal_buat_pesanan .modal-dialog .modal-body`).html(res);
	      $(`#modal_buat_pesanan`).modal('show');
	    },
	    error: function (res, textstatus) {
	      if (textstatus === "timeout") {
	        notice('Response Time Out', 'error');
	      } else {
	        notice(res.responseJSON.message, 'error');
	      }
	    }
	  });
}

$('#pesanan_form').submit(function(e) {
 // $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
  e.preventDefault();
  var formData = new FormData(this);
  $.ajax({
    type:'POST',
    url: "/pesanan/store",
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    success: (data) => {
      this.reset();
      $('#token').val('{{ csrf_token() }}')
      alert('Order has been created successfully');
      $('#kode').html(data);
      //$("#tb_products").DataTable().reload();
      //produk_fetch(0);
      console.log(data);
    },
    error: function(data){
      console.log(data);
      }
  });
});

</script>
<!-- /move top -->
</body>

</html>
