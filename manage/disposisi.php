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
                  <form action="" method="get">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Pengirim</th>
                          <th>Penerima</th>
                          <th>Judul</th>
                          <th>Isi Pesan</th>
                        </tr>
                      </thead>
                      <?php
                        $tampilkan = mysqli_query($konek, "select * from pesan");{
                          while ($r = mysqli_fetch_array($tampilkan)) {
                       ?>
                      <tbody>
                        <tr>
                          <td><?php echo $r['0']; ?></td>
                          <td><?php echo $r['1']; ?></td>
                          <td><?php echo $r['2']; ?></td>
                          <td><?php echo $r['3']; ?></td>
                          <td><?php echo $r['4']; ?></td>
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
