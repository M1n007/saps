<?php
  if (isset($_POST['kirim'])) {
    $dari = $_POST['dari'];
    $untuk = $_POST['untuk'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $kirim = "insert into pesan(dari, untuk, judul, isi) values('$dari', '$untuk', '$judul', '$isi')";
    $kirim1 = $konek->query($kirim);

    if ($kirim1) {
      ?><script>alert('Sukses mengirim pesan')</script>
      <?php
    }else{
      ?><script>alert('Gagal mengirim pesan')</script>
      <?php
    }

  }
 ?>
<!-- tampilan popup kirim surat -->
<div id="myMod" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <center><font><b>Kirim Surat</b></font></center>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          <div class="form-group">
            <label>No Surat :</label>
            <input class="form-control" type="text" name="nosur" value="" readonly/>
            <label>Tanggal Surat:</label>
            <input class="form-control" type="text" name="tglsurat" value="" readonly/>
            <label>From :</label>
            <input class="form-control" type="text" name="dari" value="<?php echo $_SESSION['username']; ?>" readonly/>
            <label>To :</label>
            <input class="form-control" type="text" name="untuk" placeholder="masukan nama penerima"/>
            <label>Subject :</label>
            <input class="form-control" type="text" name="judul" placeholder="masukan subject"/>
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
