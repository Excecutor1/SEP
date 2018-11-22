<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Belum Cetak - SEP</title>

    <!-- Bootstrap -->
    <link href="style/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="style/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="style/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="style/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="style/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="style/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="style/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- ajax -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

    <!-- Custom Theme Style -->
    <link href="style/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin - SEP</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $this->pengguna['namaPengguna'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="home"><i class="fa fa-home"></i>Beranda</a></li>
                  <li><a href="belumCetak"><i class="fa fa-paper-plane-o"></i>File Belum di Cetak</a></li>
                  <li><a href="sudahCetak"><i class="fa fa-check"></i>File Sudah di Cetak</a></li>
                  <?php if($this->level==1){
                        echo '<li><a><i class="fa fa-group"></i> Karyawan <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="karyawan">Daftar Karyawan</a></li>
                          <li><a href="daftar">Tambah Karyawan</a></li>
                        </ul>
                        </li>';
                        }
                  ?>
                  <?php if($this->level==2){
                        echo '<li class="hidden"><a><i class="fa fa-group"></i> Karyawan <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><a href="karyawan">Daftar Karyawan</a></li>
                            <li><a href="daftar">Tambah Karyawan</a></li>
                          </ul>
                          </li>';
                        }
                  ?>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="page-title">
              <div class="title_left">
                <h3>File yang belum di cetak</h3>
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
                            <th>No. Berkas</th>
                            <th>Layanan</th>
                            <th>Pengguna</th>
                            <th>Tinta</th>
                            <th>Status</th>
                            <th>Kertas</th>
                            <th>Berkas</th>
                            <th>Salinan</th>
                            <th>Halaman di Cetak</th>
                            <th>Komentar</th>
                            <th>Aksi</th>
                            
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach($hasil as $row){ ?>
                          <tr class="even pointer">
                  <?php $this->id = $row['ID_CETAK'];?>
                  <td><?php echo $row['ID_CETAK']; ?></td>
                  <td><?php echo $row['NAMA_LAYANAN']; ?></td>
                  <td><?php echo $row['NAMA_LENGKAP']; ?></td>
                  <td><?php echo $row['JENIS_TINTA']; ?></td>
                  <td><?php echo $row['NAMA_STATUS']; ?></td>
                  <td><?php echo $row['JENIS_KERTAS']; ?></td>
                  <td><?php echo $row['BERKAS']; ?></td>
                  <td><?php echo $row['SALINAN']; ?></td>
                  <td><?php echo $row['CETAK_HALAMAN']; ?></td>
                  <td><?php echo $row['KOMENTAR']; ?></td>
                  <td><button class="btn btn-primary btn-round"><?php echo "<a style='color:white' href='belumCetak/lihatFile/".$this->id."'>Cetak</a>"?></button>
                  <button class="btn btn-success btn-round"><?php echo "<a style='color:white' href='belumCetak/selesaiCetak/".$this->id."'>Selesai</a>"?></button>
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
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin ingin keluar?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="login/logout">Keluar</a>
          </div>
        </div>
      </div>
    </div>

        <!-- jQuery -->
    <script src="style/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="style/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="style/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="style/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="style/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="style/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="style/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="style/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="style/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="style/vendors/Flot/jquery.flot.js"></script>
    <script src="style/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="style/vendors/Flot/jquery.flot.time.js"></script>
    <script src="style/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="style/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="style/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="style/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="style/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="style/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="style/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="style/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="style/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="style/vendors/moment/min/moment.min.js"></script>
    <script src="style/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="style/build/js/custom.min.js"></script>
  
  </body>
</html>
