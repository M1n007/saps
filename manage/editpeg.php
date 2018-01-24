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
            <center><font><b>Details Data Pegawai</b></font></center>
            <?php
              if (isset($_GET['tambah'])) {
             ?>
              <form method="" action="post">
                  <div class="form-group">
                    <?php
                    $query = $konek->query("SELECT max(no_peg) as maxKode FROM pegawai");
                    $data  = mysqli_fetch_array($query);
                    $noPeg = $data['maxKode'];

                    $noUrut = (int) substr($noPeg, 4, 4);
                    $noUrut++;

                    $char = "PEG";
                    $newID = $char . sprintf("%03s", $noUrut);
                     ?>
                    <label>No. Peg :</label>
                    <input class="form-control" type="text" name="nopeg" value="<?php echo $newID;?>"  readonly/>
                    <label>Nama :</label>
                    <input class="form-control" type="text" name="namapeg" placeholder="masukan nama pegawai"  />
                    <label>Jabatan :</label>
                    <input class="form-control" type="text" name="jabpeg"  placeholder="masukan jabatan pegawai" />
                    <label>Alamat :</label>
                    <input class="form-control" type="text" name="alamatpeg" placeholder="masukan alamat pegawai"/>
                    <label>Telp :</label>
                    <input class="form-control" type="number" name="telppeg" placeholder="masukan no telp pegawai"/>
                    <label>Kelamin :</label>
                    <select class="form-control">
                      <option class="form-control" name="kelaminpeg">
                        laki-laki
                      </option>
                      <option class="form-control" name="kelaminpeg">
                        perempuan
                      </option>
                    <select>
                    <label>Level :</label>
                    <select class="form-control">
                      <option class="form-control" name="levelpeg">
                        admin
                      </option>
                      <option class="form-control" name="levelpeg">
                        user
                      </option>
                    <select>
                    <label>Username :</label>
                    <input class="form-control" type="text" name="userpeg" value="masukan username untuk pegawai"/>
                    <label>Password :</label>
                    <input class="form-control" type="text" name="passpeg" value="masukan password untuk pegawai"/>
                  </div>
                  <div class="modal-footer">
                    <a href="pegawai.php" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary" name="tambah">Tambah</button>
                  </form>
                <?php
              }else{
                ?>
                <form method="" action="get">
                <?php
                  if (isset($_GET['details'])) {
                    $no_peg= $_GET['details'];
                    $tampil = $konek->query("select * from pegawai where no_peg='$no_peg'");
                    $tam = $tampil->fetch_array(MYSQLI_BOTH);
                  }
                ?>
                    <div class="form-group">
                      <label>No. Peg :</label>
                      <input class="form-control" type="text" name="nopeg" value="<?php if (isset($_GET['details'])) { echo $tam['1']; }?>"  readonly/>
                      <label>Nama :</label>
                      <input class="form-control" type="text" name="namapeg" value="<?php if (isset($_GET['details'])) { echo $tam['2']; }?>"  />
                      <label>Jabatan :</label>
                      <input class="form-control" type="text" name="jabpeg" value="<?php if (isset($_GET['details'])) { echo $tam['3']; }?>" />
                      <label>Alamat :</label>
                      <input class="form-control" type="text" name="alamatpeg" value="<?php if (isset($_GET['details'])) { echo $tam['4']; }?>"/>
                      <label>Telp :</label>
                      <input class="form-control" type="number" name="telppeg" value="<?php if (isset($_GET['details'])) { echo $tam['5']; }?>"/>
                      <label>Kelamin :</label>
                      <input class="form-control" type="text" name="kelaminpeg" value="<?php if (isset($_GET['details'])) { echo $tam['6']; }?>"/>
                      <label>Level :</label>
                      <select class="form-control">
                        <option class="form-control" name="levelpeg">
                          admin
                        </option>
                        <option class="form-control" name="levelpeg">
                          user
                        </option>
                      <select>
                      <label>Username :</label>
                      <input class="form-control" type="text" name="userpeg" value="<?php if (isset($_GET['details'])) { echo $tam['8']; }?>"/>
                      <label>Password :</label>
                      <input class="form-control" type="text" name="passpeg" value="<?php if (isset($_GET['details'])) { echo $tam['9']; }?>"/>
                    </div>
                    <div class="modal-footer">
                      <a href="pegawai.php" class="btn btn-primary">Kembali</a>
                      <button class="btn btn-primary" name="edit">Edit</button>
                    </form>
                    <?php
              }
                 ?>
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
