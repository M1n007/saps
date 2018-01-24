<?php
session_start();
if (empty($_SESSION['username'])) {
  header("Location: ../index.php");
}
?>
<?php require_once('../tpl/header.php'); ?>

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <?php require_once('../tpl/sidebar.php'); ?>
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">


          <!-- Main content -->
          <section class="content">

              <!-- Small boxes (Stat box) -->
              <?php
              if ($_SESSION['level'] == "admin") {
               ?>
              <div class="row">
                  <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-aqua">
                          <div class="inner">
                              <h3>
                                  <?php
                                    $pegawai = mysqli_query($konek, "select * from pegawai");{
                                   ?>
                                   <font>
                                     <?php
                                        echo mysqli_num_rows($pegawai);
                                        }
                                      ?>
                                   </font>
                              </h3>
                              <p>
                                  Pegawai
                              </p>
                          </div>
                          <div class="icon">
                              <i class="fa fa-user"></i>
                          </div>
                          <a href="pegawai.php" class="small-box-footer">
                              More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                      </div>
                  </div><!-- ./col -->
                  <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-green">
                          <div class="inner">
                              <h3>
                                  10
                              </h3>
                              <p>
                                  Surat Masuk
                              </p>
                          </div>
                          <div class="icon">
                              <i class="fa fa-share"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                              More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                      </div>
                  </div><!-- ./col -->
                  <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-yellow">
                          <div class="inner">
                              <h3>
                                  10
                              </h3>
                              <p>
                                Surat Keluar
                              </p>
                          </div>
                          <div class="icon">
                              <i class="fa fa-reply"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                              More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                      </div>
                  </div><!-- ./col -->
                  <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-red">
                          <div class="inner">
                              <h3>
                                  10
                              </h3>
                              <p>
                                  Dispotition
                              </p>
                          </div>
                          <div class="icon">
                              <i class="fa fa-check"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                              More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                      </div>
                  </div><!-- ./col -->
                  <?php
                }else{
                  ?>
                  <div class="row">
                      <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-green">
                              <div class="inner">
                                  <h3>
                                      10
                                  </h3>
                                  <p>
                                      Surat Masuk
                                  </p>
                              </div>
                              <div class="icon">
                                  <i class="fa fa-share"></i>
                              </div>
                              <a href="#" class="small-box-footer">
                                  More info <i class="fa fa-arrow-circle-right"></i>
                              </a>
                          </div>
                      </div><!-- ./col -->
                      <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-yellow">
                              <div class="inner">
                                  <h3>
                                      10
                                  </h3>
                                  <p>
                                    Surat Keluar
                                  </p>
                              </div>
                              <div class="icon">
                                  <i class="fa fa-reply"></i>
                              </div>
                              <a href="#" class="small-box-footer">
                                  More info <i class="fa fa-arrow-circle-right"></i>
                              </a>
                          </div>
                      </div><!-- ./col -->
                      <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-red">
                              <div class="inner">
                                  <h3>
                                      10
                                  </h3>
                                  <p>
                                      Dispotition
                                  </p>
                              </div>
                              <div class="icon">
                                  <i class="fa fa-check"></i>
                              </div>
                              <a href="#" class="small-box-footer">
                                  More info <i class="fa fa-arrow-circle-right"></i>
                              </a>
                          </div>
                      </div><!-- ./col -->
                      <?php
                }
                   ?>
              </div><!-- /.row -->
          </section><!-- /.content -->
    </aside>
</div><!-- ./wrapper -->


<!-- tampilan popup kirim surat -->
<div id="myMod" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center><font><b>Kirim Surat</b></font></center>
      </div>
      <div class="modal-body">
        <form method="" action="">
          <div class="form-group">
            <label>No Surat :</label>
            <input class="form-control" type="number" placeholder="masukan nomer surat"/>
            <label>Subject :</label>
            <input class="form-control" type="text" placeholder="masukan subject"/>
            <label>Isi Surat :</label>
            <input class="form-control" type="text" placeholder="masukan isi surat"/>
            <label>File Surat :</label>
            <input type="file"/>
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Send</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php require_once('../tpl/footer.php'); ?>
