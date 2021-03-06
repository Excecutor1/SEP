<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Beranda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
    <!-- jvectormap CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="style/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/normalize.css">
    <!-- charts CSS
        ============================================ -->
        <link rel="stylesheet" href="style/css/c3.min.css">
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
        <!-- auto refresh -->
        <!-- ================================================================================ -->
        <script type="text/javascript">
            $(document).ready(function(){
              var auto_refresh=setInterval(function(){
                $('#belumCetak').load('admin/jumlah1').fadeIn("slow");
                $('#sudahCetak').load('admin/jumlah2').fadeIn("slow");
            },200);
          });
      </script>


      <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img style="max-width: 100px" src="style/img/logo_sep.png" alt="..." class="img-circle profile_img">
                </a>
                <br>
                <strong>AS</strong>
                <span style="color: black"><h4 class="welcome-admin">Selamat Datang</h4>
                    <h3 style="color: black">- <?php echo $this->pengguna['nama_pengguna'] ?> -</h3></span>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="admin" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>
                        <li class="nav-item"><a href="belumCetak" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-clock-o"></i> <span class="mini-dn">File Belum Cetak</span> </a>
                        </li>
                        <li class="nav-item"><a href="sudahCetak" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-ok"></i> <span class="mini-dn">File Sudah Cetak</span> <span class="indicator-right-menu mini-dn"></i></span></a>
                        </li>
                        <li class="nav-item"><a href="saldo" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-usd"></i> <span class="mini-dn">Saldo</span> <span class="indicator-right-menu mini-dn"></i></span></a>                             
                        </li>


                    </li>

                    <?php if($this->level==1){
                        echo '<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Data Karyawan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-right"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="karyawan">Daftar Karyawan</a>
                        <a href="daftar">Tambah Karyawan</a>
                        </div>
                        </li>';
                    }
                    ?>
                    <?php if($this->level==2){
                        echo '<li class="hidden nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Data Karyawan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-right"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="karyawan">Daftar Karyawan</a>
                        <a href="daftar">Tambah Karyawan</a>
                        </div>
                        </li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Header top area start-->
    <div class="content-inner-all">
        <div class="header-top-area">
            <div class="fixed-header-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-1 col-md-6 col-sm-6 col-lg-12">
                            <div class="admin-logo logo-wrap-pro">
                                <a href="#"><img src="img/logo/log.png" alt="" />
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-11 col-md-11 col-sm-8 col-lg-12">
                            <div class="header-right-info">
                                <ul class="nav navbar-nav mai-top-nav header-right-menu">   
                                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                        <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                            <div class="notification-single-top">
                                                <h1>Notifikasi</h1>
                                            </div>
                                            <div class="notification-view">
                                                <a href="#">Lihat Semua Notifikasi</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                            <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                            <span class="admin-name"><?php echo $this->pengguna['nama_pengguna'] ?></span>
                                            <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                        </a>
                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                            <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                            </li>
                                            <li><a href="logout" onclick="return confirm('Apakah anda yakin ingin keluar?')"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Keluar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header top area end-->

        <!-- Header Judul-->
        <!-- ================================================================================ -->
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <h3 class="header-navigator">Administrator / Saldo</h3>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- CONTENT -->
        <!-- ================================================================================ -->
        <div class="row" style="margin-bottom: 3%">


            <div class="col-lg-6">
                <div class="sparkline8-list basic-res-b-30 shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Cek ID Pengguna & Nama Pengguna</h1>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                    <div class="basic-login-inner">
                                        <form action="saldo/cek" method="POST">
                                            <div class="form-group-inner col-lg-4">
                                                <label>ID Pengguna</label>
                                                <input type="text" required="" name="id_pengguna" class="form-control" placeholder="<?php echo $this->id_pengguna; ?>">
                                            </div>
                                            <div class="form-group-inner col-lg-5">
                                                <label>Nama Pengguna</label>
                                                <input type="text" required="" name="nama_pengguna" class="form-control" placeholder="<?php echo $this->nama_pengguna; ?>">
                                            </div>
                                            <div class="login-btn-inner col-lg-3" style="margin-top: 5%">
                                                <div class="inline-remember-me">
                                                    <button class="btn btn-sm btn-primary pull-right login-submit-cs" name="cek" type="submit">Cek Akun</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php echo $this->alert ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-lg-6">
                <div class="sparkline8-list basic-res-b-30 shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Top UP</h1>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> -->
                                    <div class="basic-login-inner">
                                        <form action="saldo/topup/<?php echo $this->id_pengguna; ?>" method="POST">
                                            <div class="form-group-inner col-lg-8">
                                                <label>Isi Jumlah Top up</label>
                                                <input type="number" required="" name="jumlahTopup" class="form-control">
                                            </div>
                                            <div class="login-btn-inner col-lg-4" style="margin-top: 5%">
                                                <div class="inline-remember-me">
                                                    <button class="btn btn-sm btn-primary pull-right login-submit-cs" name="topup" type="submit">Top UP!</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">

                <div class="col-lg-12">
                    <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
                        <h2>Transaksi TOP UP</h2>
                        <div id="tabel" class="table-responsive">
                            <table class="table table-striped  bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <td>Id Transaksi</td>
                                        <td>Jenis Transaksi</td>
                                        <td>Nama Pengguna</td>
                                        <td>Jumlah Top Up</td>
                                        <td>Waktu</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($transaksi as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['id_transaksi'] ?></td>
                                            <td><?php echo $row['jenis_transaksi'] ?></td>
                                            <td><?php echo $row['nama_pengguna'] ?></td>
                                            <td><?php echo $row['topup'] ?></td>
                                            <td><?php echo $row['waktu'] ?></td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





            </div>
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
    <!-- scrollUp JS
        ============================================ -->
        <script src="style/js/wow/wow.min.js"></script>
    <!-- counterup JS
        ============================================ -->
        <script src="style/js/counterup/jquery.counterup.min.js"></script>
        <script src="style/js/counterup/waypoints.min.js"></script>
        <script src="style/js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
        ============================================ -->
        <script src="style/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="style/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="style/js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
        ============================================ -->
        <script src="style/js/peity/jquery.peity.min.js"></script>
        <script src="style/js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
        <script src="style/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="style/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
        <script src="style/js/flot/Chart.min.js"></script>
        <script src="style/js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
        ============================================ -->
        <script src="style/js/data-table/bootstrap-table.js"></script>
        <script src="style/js/data-table/tableExport.js"></script>
        <script src="style/js/data-table/data-table-active.js"></script>
        <script src="style/js/data-table/bootstrap-table-editable.js"></script>
        <script src="style/js/data-table/bootstrap-editable.js"></script>
        <script src="style/js/data-table/bootstrap-table-resizable.js"></script>
        <script src="style/js/data-table/colResizable-1.5.source.js"></script>
        <script src="style/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
        <script src="style/js/main.js"></script>
    </body>

    </html>