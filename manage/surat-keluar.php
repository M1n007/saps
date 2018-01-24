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
    <aside class="right-side container-fluid">
        <!-- Main content -->
          <section class="content">
            <div class="row">
                <div class="col-lg-3">
                  surat keluar
                </div>
            </div>
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
