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
                  <form action="" method="get">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Kode</th>
                          <th>No Surat</th>
                          <th>Tanggal Surat</th>
                          <th>Jenis Surat</th>
                          <th>Pengirim</th>
                          <th>Judul</th>
                        </tr>
                      </thead>
                      <?php
                        $user = $_SESSION['username'];
                        $tampilkan = mysqli_query($konek, "select * from pesan where untuk='$user' and status=1");{
                          while ($r = mysqli_fetch_array($tampilkan)) {
                       ?>
                      <tbody>
                        <tr>
                          <td><?php echo $r['1']; ?></td>
                          <td><?php echo $r['2']; ?></td>
                          <td><?php echo $r['3']; ?></td>
                          <td><?php echo $r['4']; ?></td>
                          <td><?php echo $r['5']; ?></td>
                          <td><?php echo $r['7']; ?></td>
                        </tr>
                      </tbody>
                      <?php
                          }
                        }
                       ?>
                    </table>
                  </form>
                </div>
            </div>
          </section><!-- /.content -->
    </aside>
</div><!-- ./wrapper -->

<?php require_once('../tpl/pesan.php'); ?>
<?php require_once('../tpl/footer.php'); ?>
