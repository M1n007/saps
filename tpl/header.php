<?php
include '../assets/configuration/konek.php';

?>

<html>
  <head>
    <title>Simple Aplikasi Pengarsipan Surat</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
  </head>
<body class="skin-black">
  <!-- header logo: style can be found in header.less -->
  <header class="header">
      <a href="index.php" class="logo">
          <!-- Add the class icon to your logo image or logo icon to add the margining -->
          SAPS
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
          <div class="navbar-right">
              <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <form action="" method="get">
                          <i class="fa fa-envelope" name="lihat"></i>
                          </form>
                          <span class="label label-success">
                            <?php
                            $user = $_SESSION['username'];
                            $notif = mysqli_query($konek, "select * from pesan where untuk='$user'");{
                              echo mysqli_num_rows($notif);
                             ?>
                          </span>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="header">You have <?php echo mysqli_num_rows($notif) ?> messages</li>
                          <?php
                            }
                           ?>
                          <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                <?php
                                $user = $_SESSION['username'];
                                $ps = mysqli_query($konek, "select * from pesan where untuk='$user' order by desc");{
                                  while ($ps1 = mysqli_fetch_array($ps)) {
                                 ?>
                                  <?php
                                    if (mysqli_num_rows($ps1) < 0) {
                                      ?>
                                      <li><!-- start message -->
                                          <a href="#">
                                            <p>
                                              Belum Memiliki Pesan.
                                            </p>
                                          </a>
                                      </li><!-- end message -->
                                      <?php
                                    }else{
                                      ?>
                                      <li><!-- start message -->
                                          <a href="#">
                                              <h4>
                                                <?php  echo $ps1['1']; ?>
                                              </h4>
                                              <p>
                                                <?php  echo $ps1['3']; ?>
                                              </p>
                                          </a>
                                      </li><!-- end message -->
                                      <?php
                                    }
                                   ?>
                                  <?php
                                      }
                                    }
                                   ?>
                              </ul>
                          </li>
                          <li class="footer"><a href="surat-masuk.php">See All Messages</a></li>
                      </ul>
                  </li>
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="glyphicon glyphicon-user"></i>
                          <span><?php echo $_SESSION['username']; ?> <i class="caret"></i></span>
                      </a>
                      <ul class="dropdown-menu">
                          <!-- Menu Footer-->
                          <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Ubah Password</a>
                            </div>
                              <div class="pull-right">
                                  <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                              </div>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </nav>
  </header>
