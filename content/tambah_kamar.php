<?php
if (isset($_POST['submit'])) {
  $idkamar = $_POST['idkamar'];
  $tipe_kamar = $_POST['tipe_kamar'];

  $result = mysqli_query($connect, "INSERT INTO ruang_kamar (idruang_kamar, id_tipe_kamar, `status`) VALUES ('$idkamar', '$tipe_kamar', '1')");
  header("location: ruang_kamar.php");
}
?>
<?php
$tipe_kamar = mysqli_query($connect, "SELECT * FROM tipe_kamar");
$last_id = mysqli_query($connect, "SELECT idruang_kamar FROM ruang_kamar ORDER BY idruang_kamar DESC");
$res_id = mysqli_fetch_assoc($last_id);
?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Ruang Kamar</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Masukkan No Kamar</label>
                  <input type="text" name="idkamar" nama="idkamar" class="form-control border-input" placeholder="No Kamar" value="<?php echo $res_id['idruang_kamar'] + 1 ?>" autofocus required="">
                </div>
                <div class="form-group">
                  <label">Pilih Tipe Kamar</label>
                    <select name="tipe_kamar" id="" class="form-control">
                      <option>Pilih Tipe Kamar</option>
                      <?php while ($res = mysqli_fetch_assoc($tipe_kamar)) : ?>
                        <option value="<?php echo $res['idtipe_kamar']; ?>"><?php echo $res['nama']; ?> </option>
                      <?php endwhile; ?>
                    </select>
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary" type="submit" name="submit">Tambah Ruang Kamar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>