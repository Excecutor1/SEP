<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<!-- Template site title
   ================================================== -->
	<title>Pengaturan Cetak</title>

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
   
    <link rel="stylesheet" href="style/css/form.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="style/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body class="materialdesign">

  <section  class="preloader">

  <div class="sk-rotating-plane"></div>

</section>




        
        <section id="about" class="parallax-section " style="padding-top: 6.8%; padding-bottom: 8%;">
  <div class="container">
    <div class="row">

      <div class="col-md-6 col-sm-12 mg-t-baru mg-b-baru">
        <h3 class="color-white">OUR STORY</h3>
        <h2>ADVENTURE STUDIO</h2>
        <p class="color-white">Adventure is free Bootstrap theme by <a rel="nofollow" href="http://www.tooplate.com" target="_parent">tooplate</a>. Download, edit, and use this layout for your website. Feel free to modify or remove anything to meet your desire. Excepteu sunt in culpa qui officia deserunt mollit.</p>
        <p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt mollit anim id.</p>
      </div>
  
            <!-- login Start-->
    <div class="login-form-area mg-t-baru mg-b-baru">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-6"></div>
                            
                            <div class="col-lg-6">
                                <div class="login-bg">            
                                <div class="form-group-inner">
                          <p class="message-mg-rt "><strong>Upload File</strong> </p>
                    <div>
                        <?php echo $error;?>
                       <?php echo form_open_multipart('mulaiCetak/do_upload');?>
                        <div class="login-bg" style="color: black; padding-bottom: 10px">
                          <div class="form-group-inner">
                            <div class="row">
                          <div class="col-xs-9"><input type="file" name="userfile" size="20" /></div>
                          <div class="col-xs-2"><input type="submit" value="upload" /></div>
                          <?php echo $namaFile;?>

                        </div>
                      </div>  
                      </div>
                        </form>
                    </div>
                                </div>                       
                                <form role="form" action="mulaiCetak/upload" method="POST">
                                    <div class="form-group-inner">
                                    <p class="message-mg-rt "><strong>Pengaturan File</strong> </p>
                                    <div class="row">
                                      <!-- <div class="col-lg-12"> -->

                                        <div class="col-xs-8 center-block" style="float: none;">
                                            <div class="col-lg-3">
                                                   <label  class="login2 pull-right pull-right-pro">Warna</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="form-select-list">
                                                                        <select  class="form-control custom-select-value" name="text">
                                                                          <option value="0">Pilih</option>
                                                                            <?php foreach($warna as $row){
                                                                              echo "<option>".$row['warna']."</option>";}
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                          </div>
                                                         </div>
                                  <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-xs-8 center-block" style="float: none;">
                                            <div class="col-lg-3">
                                                   <label class="login2 pull-right pull-right-pro">Kertas</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="text">
                                                                          <option value="0">Pilih</option>
                                                                            <?php foreach($kertas as $row){
                                                                              echo "<option>".$row['kertas']."</option>";}
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                        </div>
                                    <!-- </div> -->
                                    </div>
                                  </div>

                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-xs-8 center-block" style="float: none;">
                                            <div class="col-lg-3">
                                                   <label class="login2 pull-right pull-right-pro">Finishing</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="text">
                                                                          <option value="0">Pilih</option>
                                                                            <?php foreach($finishing as $row){
                                                                              echo "<option>".$row['finishing']."</option>";}
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                        </div>
                                    <!-- </div> -->
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-xs-8 center-block" style="float: none;">
                                            <div class="col-lg-3">
                                                   <label class="login2 pull-right pull-right-pro">Salinan</label>
                                                                </div>
                                                                <div class="col-xs-8">
                                                                    <div class="form-select-list">
                                                                            <input type="number" class="form-control" name="salinan" style="color: #000">
                                                                        </select>
                                                                    </div>
                                                                </div>
                                        </div>
                                    <!-- </div> -->
                                    </div>
                                  </div>  
                                    <div class="row">
                                      <!-- <div class="col-xs-3"> </div> -->
                                        <div class="col-xs-8 center-block" style="float:none">
                                            <div class="login-button-pro" style="text-align: center">
                                                
                                                <input type="submit" class="login-button login-button-lg" name="btn_log" value="Cetak"/>
                                               
                                            </div>
                                        </div>
                                        <!-- <div class="col-xs-3"> </div> -->
                                    </div>
                                </div>
                            </div>
                        </form>

                        
                        
                    </div>
                    
                   
                </div>
            </div>
       

     

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