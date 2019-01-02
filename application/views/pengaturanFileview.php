<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pengaturan File</title>
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

         
            <!-- Pengaturan file form -->
            <!-- ============================================================ -->
            <div class="login-form-area mg-t-baru mg-b-baru">
                <div class="container-fluid">
                    
                    <!-- Notifikasi ERROR dan nama file -->
                    <!-- ================================================================ -->
                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div class="login-bg">
                                <div class="row">
                                    <?php echo $error ?>
                                    <br>
                                    <?php echo $nama_file;?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Container Form -->
                    <!-- ================================================================ -->
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div class="login-bg">            

                                <!-- Form -->
                                <!-- ================================================================ -->
                                <form role="form" action="pengaturanFile/simpan" method="POST">
                                    
                                    <!-- Pilihan Warna -->
                                    <!-- ================================================================ -->
                                    <div class="form-group-inner">
                                        <p class="message-mg-rt "><strong>Pengaturan File</strong> </p>
                                        <div class="row">
                                            <div class="col-xs-12 center-block" style="float: none;">
                                                <div class="col-lg-3">
                                                    <label  class="login2 pull-right pull-right-pro">Warna</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-select-list">
                                                        <select  class="form-control custom-select-value" name="id_warna">
                                                            <option value="0">Pilih</option>
                                                            <?php foreach($warna as $row){
                                                                echo "<option value='".$row['id_warna']."'>".$row['warna']."</option>";}
                                                                ?>
                                                            </select>
                                                        </div>                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Kertas -->
                                        <!-- ================================================================ -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-xs-12 center-block" style="float: none;">
                                                    <div class="col-lg-3">
                                                        <label class="login2 pull-right pull-right-pro">Kertas</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-select-list">
                                                            <select required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" class="form-control custom-select-value" name="id_kertas">
                                                                <option value="0">Pilih</option>
                                                                <?php foreach($kertas as $row){
                                                                    echo "<option value='".$row['id_kertas']."'>".$row['kertas']."</option>";}
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Pilihan FInishing -->
                                            <!-- ================================================================ -->
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 center-block" style="float: none;">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Finishing</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="form-select-list">
                                                                <select required="" class="form-control custom-select-value" name="id_finishing">
                                                                    <option value="0">Pilih</option>
                                                                    <?php foreach($finishing as $row){
                                                                        echo "<option value='".$row['id_finishing']."'>".$row['finishing']."</option>";}
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Salinan -->
                                                <!-- ================================================================ -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-xs-12 center-block" style="float: none;">
                                                            <div class="col-lg-3">
                                                                <label class="login2 pull-right pull-right-pro">Salinan</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-select-list">
                                                                    <input required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" type="number" class="form-control" name="salinan" style="color: #000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Keterangan -->
                                                <!-- ================================================================ -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-xs-12 center-block" style="float: none;">
                                                            <div class="col-lg-3">
                                                                <label class="login2 pull-right pull-right-pro">Keterangan</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="form-select-list">
                                                                    <textarea cols="1" rows="5" style="vertical-align: top; resize: none;" type="text" class="form-control" name="keterangan"placeholder="Contoh : Semua halaman | diprint hanya halaman 3 | di print hanya halaman 2 dan 3" style="color: #000"></textarea> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-xs-12 center-block" style="float: none;">
                                                        <input type="checkbox" name="konfirmasiFile" required="harus di centang"> File yang saya upload sudah benar
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                                </div>         

                                                <!-- Tombol Cetak -->
                                                <!-- ================================================================ -->                     
                                                <div class="row">
                                                    <div class="col-xs-12 center-block" style="float:none">
                                                        <div class="login-button-pro" style="text-align: center">
                                                         <input type="submit" class="login-button login-button-lg" name="btn_cetak" value="Cetak" onclick="return confirm('Apakah data yang anda masukan sudah benar?')"/>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </form>
                                 <!-- Form Selesai -->
                                 <!-- ================================================================ -->          
                             </div>                 
                         </div>
                     </div>

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