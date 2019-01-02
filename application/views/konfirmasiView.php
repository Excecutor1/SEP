<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Konfirmasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="style/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/normalize.css">
    <!-- form CSS
        ============================================ -->
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Header top area start-->



        <div class="wrapper-pro">


            <!-- login Start-->
            <div class="login-form-area mg-t-baru mg-b-baru">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div style="background-color: #f7ba86; border: 0px;" class="login-bg">                                                     
                                <form>

                                    <div class="form-group-inner">
                                        <div id="tabel" class="table-responsive">
                                            <?php
                                            $i=0; 
                                            foreach ($cetak as $row) {?>
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#"><b>No. <?php $i++; echo $i; ?></b></a></li>

                                                </ul>
                                                <!-- <?php  ?> -->
                                                <div class="panel panel-default">
                                                   <div class="panel-heading">Waktu Cetak</div>
                                                   <div class="panel-body"><?php echo $row['waktu']; ?></div>
                                                   <div class="panel-heading">Berkas</div>
                                                   <div class="panel-body"><?php echo $row['berkas']; ?></div>
                                                   <div class="panel-heading">Status</div>
                                                   <div class="panel-body">
                                                    <?php if($row['id_status']==1){
                                                        echo "<div class='alert alert-danger' role='alert'>
                                                    ".$row['status']."</div>";
                                                }else{
                                                    echo "<div class='alert alert-success' role='alert'>
                                                    ".$row['status']."</div>";
                                                } ?></div>

                                               </div>
                                           <?php }; ?>

                                           

                                       </div>

                                   </div>
                               </form>
                           </div>



                       </div>


                   </div>
               </div>
               <!-- login End-->
           </div>
       </div>
       <!-- Footer Start-->


       <!-- Footer End-->
    <!-- jquery
        ============================================ -->
        <script src="style/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
        <script src="style/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
        <script src="style/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
        <script src="style/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
        <script src="style/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
        <script src="style/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
        ============================================ -->
        <script src="style/js/jquery.form.min.js"></script>
        <script src="style/js/jquery.validate.min.js"></script>
        <script src="style/js/form-active.js"></script>
    <!-- main JS
        ============================================ -->
        <script src="style/js/main.js"></script>
    </body>

    </html>