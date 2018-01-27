<?php
  if (isset($_POST['kirim'])) {
    $kode_surat= $_POST['kdsur'];
    $no_surat = $_POST['nosur'];
    $tanggal = $_POST['tglsur'];
    $jenis = $_POST['jnssur'];
    $dari = $_POST['dari'];
    $untuk = $_POST['untuk'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $kirim = "insert into pesan(kde_surat, no_surat, tgl_surat, jenis_surat, dari, untuk, judul, isi) values('$kode_surat', '$no_surat', '$tanggal', '$jenis', '$dari', '$untuk', '$judul', '$isi')";
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
            <?php
            $query = $konek->query("SELECT max(kde_surat) as maxKode FROM pesan");
            $data  = mysqli_fetch_array($query);
            $noSur = $data['maxKode'];

            $noUrut = (int) substr($noSur, 4, 4);
            $noUrut++;

            $char = "SURAT";
            $noSur = $char . sprintf("%03s", $noUrut);
             ?>
            <label>Kode Surat :</label>
            <input class="form-control" type="text" name="kdsur" value="<?php echo $noSur; ?>" readonly/>
            <label>No Surat :</label>
            <input class="form-control" type="text" name="nosur" value=""/>
            <label>Tanggal & waktu Surat:</label>
            <input class="form-control" type="text" name="tglsur" value="<?php echo date("Y-m-d H:i:s"); ?>" readonly/>
            <label>Jenis Surat:</label>
            <input class="form-control" type="text" name="jnssur" value=""/>
            <label>From :</label>
            <input class="form-control" type="text" name="dari" value="<?php echo $_SESSION['username']; ?>" readonly/>
            <label>To :</label>
            <input class="form-control" type="text" name="untuk" placeholder="masukan nama penerima"/>
            <label>Subject :</label>
            <input class="form-control" type="text" name="judul" placeholder="masukan subject"/>
            <label>Isi :</label>
            <textarea class="form-control" type="text" name="isi" placeholder="masukan isi surat"></textarea>
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
