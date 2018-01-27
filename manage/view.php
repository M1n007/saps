<?php
session_start();
if (empty($_SESSION['username'])) {
  header("Location: ../index.php");
}
?>
<?php require_once('../tpl/header.php'); ?>

<div class="wrapper row-offcanvas row-offcanvas-left">
    <aside class="container-fluid">
        <!-- Main content -->
          <section class="content">
             <div id="mySad" class="modal fade" role="dialog">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <center><font><b>Kirim Surat</b></font></center>
                   </div>
                   <div class="modal-body">
                     <form action="" method="get">
                     <?php
                       if (isset($_GET['lihatnr'])) {
                         $idps= $_GET['lihatnr'];
                         $tampil = $konek->query("select * from pesan where id='$idps'");
                         $pow = $tampil->fetch_array(MYSQLI_BOTH);
                       }
                     ?>
                         <div class="form-group">
                           <label style="width:100px;">Pengirim </label> :
                           <label><?php if (isset($_GET['lihatnr'])) { echo $pow['1']; }?></label>
                           <br>

                           <label style="width:100px;">Judul </label> :
                           <label><?php if (isset($_GET['lihatnr'])) { echo $pow['3']; }?></label>
                           <br>

                           <label style="width:100px;">Isi Pesan </label> :
                           <label><?php if (isset($_GET['lihatnr'])) { echo $pow['4']; }?></label>
                           <br>
                         </div>
                   </div>
                   <div class="modal-footer">
                          <br>
                          <a href="surat-masuk.php" class="btn btn-primary">Kembali</a>
                          <a href="reply.php?send=<?php echo $pow['0']; ?>" class="btn btn-primary">Balas</a>
                          </form>
                   </div>
                 </div>
               </div>
             </div>
             <a href="" class="btn btn-primary" data-toggle="modal" data-target="#mySad">Kembali</a>
          </section><!-- /.content -->
    </aside>
</div><!-- ./wrapper -->
<script type="text/javascript">
$('#mySad').modal('show');
</script>
<?php require_once('../tpl/pesan.php'); ?>
<?php require_once('../tpl/footer.php'); ?>
