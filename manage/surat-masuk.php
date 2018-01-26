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
                          <th>Status</th>
                          <th>Id</th>
                          <th>Pengirim</th>
                          <th>Judul</th>
                          <th>Isi Pesan</th>
                        </tr>
                      </thead>
                      <?php
                        $user = $_SESSION['username'];
                        $tampilkan = mysqli_query($konek, "select * from pesan where untuk='$user' and status=1");{
                          while ($r = mysqli_fetch_array($tampilkan)) {
                       ?>
                      <tbody>
                        <tr>
                          <td>
                            <?php
                              if (isset($_GET['lihat'])) {
                                $query3 = mysqli_query($konek, "update pesan set status=1 where id=".$_GET['id']);;
                                if ($query3) {
                                  ?>
                                  <a href="?lihat=<?php echo $r['0']; ?>"><span class="fa fa-eye"></span></a>
                                  <?php
                                }
                              }
                             ?>
                            <a href="?lihat=<?php echo $r['0']; ?>" name><span class="fa fa-envelope"></span></a>
                          </td>
                          <td><?php echo $r['0']; ?></td>
                          <td><?php echo $r['1']; ?></td>
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
