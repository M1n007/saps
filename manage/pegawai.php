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
                <div class="col-lg-3 table-responsive">
                  <form action="editpeg.php" method="get">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>alamat</th>
                        <th>Telp</th>
                        <th>Kelamin</th>
                        <th>Aksi</th>
                        <th><a href="editpeg.php?tambah"><font class="glyphicon glyphicon-plus"></font></a></th>
                      </tr>
                    </thead>
                    <?php
                      $query = mysqli_query($konek, "select * from pegawai limit 3");{
                      while ($t = mysqli_fetch_array($query)) {
                     ?>
                    <tbody>
                      <tr>
                        <td><?php echo $t['1']; ?></td>
                        <td><?php echo $t['2']; ?></td>
                        <td><?php echo $t['3']; ?></td>
                        <td><?php echo $t['4']; ?></td>
                        <td><?php echo $t['5']; ?></td>
                        <td><?php echo $t['6']; ?></td>
                        <td>
                          <a href="editpeg.php?details=<?php echo $t['1']; ?>"><font class="fa fa-reply"></font></a>
                          <a href="?delete=<?php echo $t['1']; ?>"><font class="glyphicon glyphicon-trash"></font></a>
                        </td>
                      </tr>
                    </tbody>
                    <?php
                        }
                      }
                     ?>
                    <tr>
                      <th><a href="index.php"><font class="fa fa-hand-o-left">Kembali</font></a></th>
                    <tr>
                  </table>
                </form>
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
