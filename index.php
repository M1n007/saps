<?php
include 'assets/configuration/konek.php';
session_start();
error_reporting(0);
if ($_SESSION['username']) {
  header('Location: manage/index.php');
}
?>
<html>
  <head>
    <title>Simple Aplikasi Pengarsipan Surat</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  	<!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">-->
  </head>
<body class="body-ingin">

<div class="container">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><center><font><b><font color="purple"><</font> <font color="#1abc9c">S</font>A<font color="#1abc9c">P</font>S <font color="purple">/></font></b></font></center></h4>
          </div>
          <div class="modal-body">
            <?php
              if (isset($_POST['login'])) {
                $username = $_POST['userlog'];
                $password = $_POST['passlog'];
                $level = $_POST['levellog'];

                $query = mysqli_query($konek, "select * from pegawai where username='$username' and password='$password' and level='$level'");
                $coba = mysqli_num_rows($query);
                if ($coba==TRUE) {
                  $_SESSION['username'] = $username;
                  $_SESSION['level'] = $level;
                  header("Location: manage/index.php");
                }else{
                  ?><center><font class="alert alert-danger modal-title">Login gagal, periksa kembali informasi login anda.</font></center>
                  <?php
                }
              }
             ?>
            <form method="post" action="">
              <div class="form-group">
                <label>Username :</label>
                <input type="text" class="form-control" name="userlog" placeholder="masukan username..." />
              </div>
              <div class="form-group">
                <label>Password :</label>
                <input type="text" class="form-control" name="passlog" placeholder="masukan Password..." />
              </div>
              <div class="form-group">
                <label>Select Level :</label>
                <select name="levellog" class="form-control">
                  <option name="levellog" class="form-control">admin</option>
                  <option name="levellog" class="form-control">user</option>
                </select>
              </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success" name="login">Log-In</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Lupa Akun ?</button>
            </form>
          </div>
        </div>
      </div>
      <br>
      <center><font>Copyright &copy; <?php echo date('Y'); ?>. AnCreator</font></center>
  </div>

<!-- tampilan popup -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button><br>
        </div>
        <div class="modal-body">
          Contact Administrator untuk mengatasi masalah anda saat login.
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">Ok</button>
        </div>
    </div>
  </div>
</div>

</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
</html>
