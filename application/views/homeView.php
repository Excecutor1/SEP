<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<!-- Template site title
		================================================== -->
		<title>Beranda</title>

		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
<!--

Template 2078 Adventure

http://www.tooplate.com/view/2078-adventure

-->
	<!-- Bootstrap CSS
		================================================== -->
		<link rel="stylesheet" href="style/adventure/css/bootstrap.min.css">

	<!-- Animate CSS
		================================================== -->
		<link rel="stylesheet" href="style/adventure/css/animate.min.css">

	<!-- Font Icons
		================================================== -->
		<link rel="stylesheet" href="style/adventure/css/font-awesome.min.css">
		<link rel="stylesheet" href="style/adventure/css/et-line-font.css">

	<!-- Nivo Lightbox CSS
		================================================== -->
		<link rel="stylesheet" href="style/adventure/css/nivo-lightbox.css">
		<link rel="stylesheet" href="style/adventure/css/nivo_themes/default/default.css">

	<!-- Owl Carousel CSS
		================================================== -->
		<link rel="stylesheet" href="style/adventure/css/owl.theme.css">
		<link rel="stylesheet" href="style/adventure/css/owl.carousel.css">

	<!-- BxSlider CSS
		================================================== -->
		<link rel="stylesheet" href="css/bxslider.css">

   	<!-- Main CSS
   		================================================== -->
   		<link rel="stylesheet" href="style/adventure/css/style.css">

	<!-- Google web font
		================================================== -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
		
	</head>

	<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section
	================================================== -->
	<section  class="preloader">

		<div class="sk-rotating-plane"></div>

	</section>


<!-- Navigation section
	================================================== -->
	<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#home" class="smoothScroll "><img src="./style/adventure/logo_sep.png" width="96px" height="60px" /></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#work" class="smoothScroll">BERANDA</a></li>
					<li><a href="#about" class="smoothScroll">TENTANG</a></li>
					<li><a href="#team" class="smoothScroll">CETAK</a></li>
					<li><a href="#plan" class="smoothScroll">HARGA</a></li>

					
					
						<!-- cek apakah user sudah login -->
						<?php 
						if ($this->login == 1){
							$konfirmasi = "Apakah anda yakin ingin keluar?";
							echo '<li><a href="riwayat">AKUN SAYA</a></li>';
							echo '<li><a href="logout" class="smoothScroll">LOGOUT</a></li>';
						}
						else{
							echo '<li><a href="login" class="smoothScroll">LOGIN</a></li>';
						}
						?>                
					
				</ul>
			</div>

		</div>
	</section>


<!-- Homepage section
	================================================== -->
	<div id="home">
		<div class="site-slider" >
			<img class="img-responsive" src="style/adventure/images/sep.jpg" ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="slider-caption">
							<h2 style="font-size:4vw; color: white">Selamat Datang di Percetakan SEP 3</h2>

							<p style="color: white">Keep calm and Stay Woles.</p>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.site-slider -->
	</div>


<!-- Work section
	================================================== -->
	<section id="work" class="parallax-section">
		<div class="container">
			<div class="row">

			<!-- Apa yang dapat di lakukan
				================================================== -->

				<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
					<div class="section-title" >
						<h5 style="color: #f9f2d2" class="wow bounceIn">SEP Online</h5>
						<h1 class="color-white" >Apa yang Bisa Anda Lakukan di Sini?</h1>
						<hr>
						<p class="color-white">Cetak Semua Dokumen Anda Secara Online Tanpa Mengantri dengan Semua Fasilitas yang Ada di SEP (Setengah Enam Pagi)</p>
					</div>
				</div>


			<!-- Yang bisa dilakukan di SEP
				================================================== -->
				<div id="owl-work" class="owl-carousel">

					<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<i style="color: black" class="fa fa-print fa-3x"></i>
						<h3>CETAK PAPER</h3>
						
						<p style="color: black">Cetak Dokumen Anda Secara Online disini</p>
					</div>

					<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
						<i style="color: black" class="icon-tablet fa-3x"></i>
						<h3>FINISHING</h3>
						
						<p style="color: black">Pilih Segala Bentuk Finishing yang Tersedia Sesuai dengan Keinginan</p>
					</div>

					<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
						<i style="color: black" class="fa fa-money fa-3x"></i>
						<h3>CEK HARGA</h3>
						
						<p style="color: black">Cek Harga Semua Layanan di SEP dan Sesuaikan dengan Kebutuhan</p>
					</div>
				</div>

			</div>
		</div>
	</section>


<!-- Tentang SEP
	================================================== -->
	<section id="about" class="parallax-section">
		<div class="container">
			<div class="row">

			<!-- Judul
				================================================== -->
				<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
					<div class="section-title">
						<h5 style="color: #f9f2d2" class="wow bounceIn">Setengah Enam Pagi</h5>
						<h1 class="color-white">Apa Itu SEP?</h1>
						<hr>
						<p class="color-white">SEP Merupakan Salah Satu Jasa Percetakan yang Ada di Kota Jember, Percetakan tersebut </p>
					</div>
				</div>

				<!-- isi -->
				<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
					<h2 style="color: black">Bagaimana Mencetak di Website SEP?</h2>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Login
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<p style="color: #f9f2d2" class="color-white">Anda Harus Login Terlebih Dahulu Untuk Mencetak File di Website SEP ini,Jika belum Memiliki Akun Silahkan untuk Daftar Terlebih Dahulu Agar dapat Melalkukan Login </p>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										Upload File
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<p style="color: #f9f2d2" class="color-white">Pertama-Tama Upload File Yang Ingin di Cetak, Pastikan File yang Akan dicetak berformat .Pdf </p>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
										Isi Pengaturan File
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									<p style="color: #f9f2d2" class="color-white">Atur Pengaturan File Tersebut Sesuai dengan Format yang diinginkan dan Periksa Pengaturan Tersebut  Agar Tidak Terjadi Kesalahan dalam Melakukan Percetakan</p>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>


<!-- CETAK
	================================================== -->
	<section id="team" class="parallax-section">
		<div class="container">
			<div class="row">


			<!-- Judul
				================================================== -->
				<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
					<div style="margin-bottom: 0%" class="section-title">
						<h5 style="color: #f9f2d2" class="wow bounceIn">WE ARE READY</h5>
						<h1 class="color-white">Mulai Cetak</h1>
						<hr>
						<p class="color-white">Mulailah Mencetak dengan Cara Baru Melalui Website SEP, Untuk Mulai Mencetak Klik Tombol dibawah Ini</p>
						<br>
						<button onclick="window.location.href='uploadFile'" class="btn btn-primary">Cetak</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	


<!-- Harga
	================================================== -->
	<section id="plan" class="parallax-section">
		<div class="container">
			<div class="row">

			<!-- Judul
				================================================== -->
				<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 wow fadeInUp">
					<div class="section-title">
						<h5 style="color: #f9f2d2" class="wow bounceIn">Temukan kenyamananmu</h5>
						<h1 class="color-white">Harga</h1>
						<hr>
						<p class="color-white">SEP (Setengah Enam Pagi) Menawarkan kualitas bahan yang baik dengan harga yang terjangkau.</p>
					</div>
				</div>

				<!-- List Harga -->

				<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="plan" style="height: 750px;" >
						<h2 class="plan-title">Berwarna</h2>
						<div class="plan-price">
							<h1 class="plan-price-title">Low </h1>
						</div>
						<ul class="plan-list">
							<li>Rp 500,- / <small style="color: #f9f2d2">Lembar</small></li>
						</ul>
						<div class="plan-price">
							<h1 class="plan-price-title">Medium </h1>
						</div>
						<ul class="plan-list">
							<li>Rp 1000,- / <small style="color: #f9f2d2">Lembar</small></li>
						</ul>
						<div class="plan-price">
							<h1 class="plan-price-title">High</h1>
						</div>
						<ul class="plan-list">
							<li>Rp 3000,- / <small style="color: #f9f2d2">Lembar</small></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<div class="plan" style="height: 750px;" >
						<h2 class="plan-title">Hitam Putih</h2>
						<div class="plan-price">
							<h1 class="plan-price-title">Low </h1>
						</div>
						<ul class="plan-list">
							<li>Rp 300,- / <small style="color: #f9f2d2">Lembar</small></li>
						</ul>
						<div class="plan-price">
							<h1 class="plan-price-title">Medium </h1>
						</div>
						<ul class="plan-list">
							<li>Rp 700,- / <small style="color: #f9f2d2">Lembar</small></li>
						</ul>
						<div class="plan-price">
							<h1 class="plan-price-title">High</h1>
						</div>
						<ul class="plan-list">
							<li>Rp 1500,- / <small style="color: #f9f2d2">Lembar</small></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<div class="plan">
						<h2 class="plan-title">Jilid</h2>
						<div class="plan-price">
							<h1 class="plan-price-title">Jilid Mika</h1>
						</div>
						<ul class="plan-list">
							<li>Rp 2500,- | <small style="color: #f9f2d2">Tipis</small></li>
						</ul>
						<ul class="plan-list">
							<li>Rp 3000,- | <small style="color: #f9f2d2">Sedang</small></li>
						</ul>
						<ul class="plan-list">
							<li>Rp 5000,- | <small style="color: #f9f2d2">Tebal</small></li>
						</ul><div class="plan-price">
							<h1 class="plan-price-title">Jilid Soft Cover</h1>
						</div>
						<ul class="plan-list">
							<li>Rp 5000,- | <small style="color: #f9f2d2">Tipis</small></li>
						</ul>
						<ul class="plan-list">
							<li>Rp 6000,- | <small style="color: #f9f2d2">Sedang</small></li>
						</ul>
						<ul class="plan-list">
							<li>Rp 7500,- | <small style="color: #f9f2d2">Tebal</small></li>
						</ul>
					</div>
				</div>
					
				</div>
			</div>
		</div>
	</section>


<!-- Contact section
	================================================== -->


<!-- Footer section
	================================================== -->
	


<!-- Javascript 
	================================================== -->
	<script src="style/adventure/js/jquery.js"></script>
	<script src="style/adventure/js/bootstrap.min.js"></script>
	<script src="style/adventure/js/smoothscroll.js"></script>
	<script src="style/adventure/js/nivo-lightbox.min.js"></script>
	<script src="style/adventure/js/jquery.easing-1.3.js"></script>
	<script src="style/adventure/js/plugins.js"></script>
	<script src="style/adventure/js/owl.carousel.min.js"></script>
	<script src="style/adventure/js/jquery.parallax.js"></script>
	<script src="style/adventure/js/wow.min.js"></script>
	<script src="style/adventure/js/custom.js"></script>

</body>
</html>