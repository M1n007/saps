<!-- tampilan popup kirim surat -->
<div id="myMod" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center><font><b>Kirim Surat</b></font></center>
      </div>
      <div class="modal-body">
        <?php
          if (isset($_POST['kirim'])) {
            $dari = $_POST['dari'];
            $untuk = $_POST['untuk'];
            $isi = $_POST['isi'];

            $kirim = "insert into pesan(dari, untuk, isi) values('$dari', '$untuk', '$isi')";
            $kirim1 = $konek->query($kirim);

            if ($kirim1) {
              echo "berhasil send data";
            }else{
              echo "gagal kirim data";
            }

          }
         ?>
        <form method="POST" action="">
          <div class="form-group">
            <label>From :</label>
            <input class="form-control" type="text" name="dari" value="<?php echo $_SESSION['username']; ?>" readonly/>
            <label>To :</label>
            <input class="form-control" type="text" name="untuk" placeholder="masukan subject"/>
            <label>Isi :</label>
            <input class="form-control" type="text" name="isi" placeholder="masukan isi surat"/>
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-dismiss="modal">Batal</button>
        <button class="btn btn-primary" name="kirim">Send</button>
      </form>
      </div>
    </div>
  </div>
</div>
