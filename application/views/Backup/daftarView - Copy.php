<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Karyawan - SEP</title>

    <!-- Bootstrap -->
    <link href="style/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="style/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="style/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="style/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="style/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" action="daftar" method="POST">
              <h1>Tambahkan</h1>
              <h1>Karyawan</h1>
          <div class="form-group">
            <input class="form-control" placeholder="Nama Lengkap" name="namaLengkap" type="text" autofocus>
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Nama Pengguna" name="namaPengguna" type="text" value="">
          </div>
            <!-- Change this to a button or input when using this as a form -->
          <div class="form-group">
            <div class="form-group">
            <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
          </div>
          <div class="form-group">
            <div class="form-group">
            <input class="form-control" placeholder="Alamat" name="alamat" type="text" autofocus>
          </div>
          <div class="form-group">
            <div class="form-group">
            <input class="form-control" placeholder="No Telepon" name="noTlp" type="text" autofocus>
          </div>
          <div class="form-group">
            <div class="form-group">
            <input class="form-control" placeholder="Kata Sandi" name="kataSandi" type="password" autofocus>
          </div>
          <div class="form-group">
              <input style="margin-left: 0px" type="submit" class="btn btn-primary btn-block" name="btn_log" value="Tambahkan"/>
            </div>
            <br>
            <br>
            <div class="form-group">
              <!-- <button class="btn btn-danger btn-block"><a style="color: white" href="karyawan">Batal</a></button> -->
              <a style="color: red" href="karyawan">Batal</a>
            </div>
              <div class="clearfix"></div>

              <div class="separator">
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> SEP</h1>
                  <p>©2018 SEP Setengah Enam Pagi</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
