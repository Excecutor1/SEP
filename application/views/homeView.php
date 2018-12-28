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
            
                <!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->
                <li><a href="cekData">cek data</a></li>
                <li><a href="#work" class="smoothScroll">BERANDA</a></li>
                <li><a href="#about" class="smoothScroll">TENTANG</a></li>
                <li><a href="#team" class="smoothScroll">CETAK</a></li>
                <li><a href="#plan" class="smoothScroll">HARGA</a></li>
                <li><?php 
                            if ($this->online == 1){
                                echo '<a href="logout" class="smoothScroll">LOGOUT</a>';
                                
                            }else{
                                echo '<a href="login" class="smoothScroll">LOGIN</a>';
                            } ?>
                                
                </li>
            </ul>
        </div>

    </div>
</section>


<!-- Homepage section
================================================== -->
<div id="home">
	<div class="site-slider" >
        <img class="img-responsive" src="style/adventure/images/picture.jpg" ">
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

			<!-- Section title
			================================================== -->

			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title" >
					<h5 class="wow bounceIn">SEP Online</h5>
					<h1 class="color-white" >Apa yang bisa anda lakukan di sini?</h1>
					<hr>
					<p class="color-white">Cetak semua dokumen anda secara online tanpa mengantri dengan semua fasilitas yang ada di SEP (Setengah Enam Pagi)</p>
				</div>
			</div>


			<!-- Work Owl Carousel section
			================================================== -->
			<div id="owl-work" class="owl-carousel">

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<i style="color: black" class="fa fa-print fa-3x"></i>
						<h3>CETAK PAPER</h3>
						
						<p>Cetak Dokumen anda secara online disini</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<i style="color: black" class="icon-tablet fa-3x"></i>
						<h3>FINISHING</h3>
						
						<p>Pilih segala bentuk finishing yang tersedia sesuai dengan keinginan</p>
				</div>

				<div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<i style="color: black" class="fa fa-money fa-3x"></i>
						<h3>CEK HARGA</h3>
						
						<p>Cek Harga semua layanan di SEP dan sesuaikan dengan kebutuhan</p>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- About section
================================================== -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">Setengah Enam Pagi</h5>
					<h1 class="color-white">Apa Itu SEP?</h1>
					<hr>
					<p class="color-white">SEP adalah...</p>
				</div>
			</div>

			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<h2 style="color: black">WHY CHOOSE US?</h2>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          							Very Fast Respon
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
        						<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt mollit anim id.</p>
      						</div>
   						 </div>
 					 </div>

    				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          							High Quality Team
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
        						<p class="color-white">Nullam vehicula tincidunt ultrices. Curabitur id magna velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pretium tortor ultrices ligula dictum placerat. Donec eget augue sapien. Curabitur vel orci magna. Sed id eros consequat nibh congue euismod.</p>
      						</div>
   						 </div>
 					 </div>

 					 <div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          							Special Awards
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
        						<p class="color-white">Morbi pellentesque nisl at sapien congue facilisis. Proin consequat pharetra hendrerit. Aliquam vulputate, ligula ut pellentesque molestie, dolor nisi semper augue, sit amet porta risus sem non sapien. Cras vel pulvinar sapien, in consequat purus. Aliquam at varius augue.</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div>

		</div>
	</div>
</section>


<!-- team section
================================================== -->
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">WE ARE READY</h5>
					<h1 class="color-white">OUR TEAM</h1>
					<hr>
					<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
					<button onclick="window.location.href='uploadFile'" class="btn-primary">Cetak</button>
				</div>
			</div>
		</div>
	</div>
</section>


		


<!-- Plan section
================================================== -->
<section id="plan" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 wow fadeInUp">
				<div class="section-title">
					<h5 class="wow bounceIn">Temukan kenyamananmu</h5>
					<h1 class="color-white">HARGA</h1>
					<hr>
					<p class="color-white">SEP (Setengah Enam Pagi) Menawarkan kualitas bahan yang baik dengan harga yang terjangkau.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="plan">
					<h2 class="plan-title">Villager</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$500 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>4 days 3 nights</li>
						<li>Explore Forest</li>
						<li>Visit Waterfalls</li>
						<li>Group of 10 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
				<div class="plan">
					<h2 class="plan-title">Tourer</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$800 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>8 days 7 nights</li>
						<li>Explore Mountains</li>
						<li>Touring Villages</li>
						<li>Group of 15 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="plan">
					<h2 class="plan-title">Explorer</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$1,400 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>12 days 11 nights</li>
						<li>Multiple Cities</li>
						<li>Unique Experiences</li>
						<li>Group of 20 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
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
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">

				<h2 class="wow bounceIn">ADVENTURE STUDIO</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-github wow fadeIn" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="1.6s"></a></li>
				</ul>
				<p>Copyright &copy; 2016 Adventure Studio 
                
                | Design: <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Tooplate</a></p>

			</div>
		</div>
	</div>
</footer>


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