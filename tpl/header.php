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
                          <i class="fa fa-envelope"></i>
                          <span class="label label-success">4</span>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="header">You have 4 messages</li>
                          <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                  <li><!-- start message -->
                                      <a href="#">
                                          <h4>
                                              Support Team
                                          </h4>
                                          <p>Why not buy a new awesome theme?</p>
                                      </a>
                                  </li><!-- end message -->
                              </ul>
                          </li>
                          <li class="footer"><a href="#">See All Messages</a></li>
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
