<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>File Belum Cetak</title>
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img style="max-width: 100px" src="style/img/logo_sep.png" alt="..." class="img-circle profile_img">
                    </a>
                 
                    <br>
                    <strong>AS</strong>
                    <span style="color: black"><h4 class="welcome-admin">Selamat Datang</h4>
                <h3 style="color: black">- <?php echo $this->pengguna['namaPengguna'] ?> -</h3></span>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="admin" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"></span></a>
                            </li>
                        <li class="nav-item"><a href="belumCetak" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-remove"></i> <span class="mini-dn">File Belum Cetak</span> </a>
                            </li>
                        <li class="nav-item"><a href="sudahCetak" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-ok"></i> <span class="mini-dn">File Sudah Cetak</span> <span class="indicator-right-menu mini-dn"></i></span></a>
                           
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
                                                <ul class="notification-menu">
                                                    <li>
                                                        
                                                    </li>
                                                   
                                                </ul>
                                                <div class="notification-view">
                                                    <a href="#">Lihat Semua Notifikasi</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name"><?php echo $this->pengguna['namaPengguna'] ?></span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                                </li>
                                                <li><a href="logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Keluar</a>
                                                </li>
                                            </ul>
                                        </li>
                                       
                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                                <div class="tab-content">
                                                   <div id="Projects" class="tab-pane fade">
                                         </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                              <h3 class="header-navigator">Administrator / File yang belum di cetak</h3>
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
           
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->

            <!-- auto refresh -->
                  <script type="text/javascript">
                    $(document).ready(function(){
                      var auto_refresh=setInterval(function(){
                        $('#belumCetak').load('admin/jumlah1').fadeIn("slow");
                        $('#sudahCetak').load('admin/jumlah2').fadeIn("slow");
                        },500);
                    });
                  </script>
          
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
           
            <!-- income order visit user End -->
             <!-- page content -->
        <div class="right_col" role="main">
          <div class="page-title">
              <div class="title_left">
                
              </div>
            </div>
            <div class="clearfix"></div>
          <!-- top tiles -->
                  <script type="text/javascript">
                    $(document).ready(function(){
                      var auto_refresh=setInterval(function(){
                        $('#tabel').load('belumCetak/tabel').fadeIn("slow");
                        },500);
                    });
                  </script>

          <div class="mb-3">
                <div class="x_panel">
                  <div class="x_content">
                    <div id="tabel" class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>ID Transaksi</th>
                            <th>Pengguna</th>
                            <th>Status</th>
                            <th>Harga Total</th>
                            <th>Detail</th>
                            
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach($hasil as $row){ ?>
                          <tr class="even pointer">
                            <?php $this->id = $row['id_transaksi'];?>
                                <td><?php echo $row['id_transaksi']; ?></td>
                                <td><?php echo $row['nama_pengguna']; ?></td>
                                <td><?php echo $row['id_status']; ?></td>
                                <td>Harga Total</td>
                                <td>
                                            <div class="col-lg-12">
                                                <div class="modal-bootstrap modal-login-form">
                                                    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Detail</a>
                                                </div>
                                                <div id="zoomInDown1" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-login-form-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="basic-login-inner modal-basic-inner">
                                                                                <h3>Detail</h3> <br> 
                                                                                <form action="#">
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">Warna</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text" class="form-control" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">Kertas</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text" class="form-control" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">Finishing</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text" class="form-control" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">Salinan</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text" class="form-control" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="login-btn-inner">
                                                                                        
                                                                                        <div class="row">
                                                                                            <div class="col-lg-10"></div>
                                                                                            <div class="col-lg-2">
                                                                                                <div class="login-horizental">
                                                                                                    <button class="btn btn-primary btn-round"><?php echo "<a style='color:white' href='belumCetak/lihatFile/".$this->id."'>Cetak</a>"?></button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </di>
                                    </td>
                               
                                 </tr>
                          <?php }; ?>
                        </tbody>
                      </table>
                      
                    </div>
                  </div>
                </div>
              </div>
          <!-- /top tiles -->

          
        </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chat Box End-->
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