<?php
$pelanggan = mysqli_query($connect, "SELECT idpelanggan, nama, no_ktp FROM `pelanggan`");
$tipe_kamar = mysqli_query($connect, "SELECT * FROM tipe_kamar");
$ruang_kamar = mysqli_query($connect, "SELECT * FROM ruang_kamar WHERE status = 1");
while ($res = mysqli_fetch_assoc($ruang_kamar)) {
  $idruang_kamar_arr[] = $res;
}
?>
<?php $include_js = "kamar = " . json_encode($idruang_kamar_arr); ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pemesanan Kamar</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <form method="post" action="proses_pesan.php">
            <div class="card-header">
              <h4>Entry Pemesanan Kamar</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
                <div class="col-sm-12 col-md-7">
                  <input type="number" class="form-control border-input" placeholder="" value="1" min="1" name="jml_kamar" id="jml_kamar" readonly>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Check In</label>
                <div class="col-sm-12 col-md-7">
                  <input type="date" class="form-control border-input" name="tgl_check_in" value="" required="">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Check Out</label>
                <div class="col-sm-12 col-md-7">
                  <input type="date" class="form-control border-input" name="tgl_check_out" value="" required="">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Tipe Kamar</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="idtipe_kamar" id="idtipe_kamar" required="">
                    <option value="">Pilih Tipe Kamar</option>
                    <?php while ($res = mysqli_fetch_assoc($tipe_kamar)) : ?>
                      <option value="<?php echo $res['idtipe_kamar']; ?>"><?php echo $res['nama']; ?> ( Rp. <?php echo $res['harga'] ?> )</option>
                    <?php endwhile; ?>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih No Kamar</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control" multiple="" data-height="100%" name="idruang_kamar[]" id="idruang_kamar" required="">
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pelanggan</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="idpelanggan_lama" id="" required="">
                    <option>Pilih Pelanggan</option>
                    <?php while ($res = mysqli_fetch_assoc($pelanggan)) : ?>
                      <option value="<?php echo $res['idpelanggan']; ?>"><?php echo $res['nama']; ?> ( <?php echo $res['no_ktp']; ?> )</option>
                    <?php endwhile; ?>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button type="submit" class="btn btn-primary">Pesan Kamar</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
</div>
</section>
</div>