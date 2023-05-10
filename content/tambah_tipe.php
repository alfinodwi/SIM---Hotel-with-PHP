<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $singkatan = $_POST['singkatan'];
  $harga = $_POST['harga'];

  $result = mysqli_query($connect, "INSERT INTO tipe_kamar ( nama, singkatan, harga) VALUES ('$nama', '$singkatan', '$harga');");
  header("location: tipe_kamar.php");
}
?>
<?php
$tipe_kamar = mysqli_query($connect, "SELECT * FROM tipe_kamar");
?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tipe Kamar</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

          <div class="card-body">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control border-input" placeholder="Nama" value="" required="">
            </div>
            <div class="form-group">
              <label>Singkatan</label>
              <input type="text" name="singkatan" class="form-control border-input" placeholder="Singkatan" value="" required="">
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="text" name="harga" class="form-control border-input" placeholder="Harga" value="" required="">
            </div>
          </div>
          <div class="card-footer text-right">
            <button type="submit" name="submit" class="btn btn-primary">Tambah Tipe Kamar</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>