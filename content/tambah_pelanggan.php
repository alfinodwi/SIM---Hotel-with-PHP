<?php
$pelanggan = mysqli_query($connect, "SELECT * FROM pelanggan ORDER BY idpelanggan DESC");
?>
<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $no_ktp = $_POST['no_ktp'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];

  $result = mysqli_query($connect, "INSERT INTO pelanggan (nama, alamat, no_ktp, telepon) VALUES ('$nama', '$alamat', '$no_ktp', '$telepon')");
  header("location: pelanggan.php");
}
?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pelanggan</h1>
    </div>
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control border-input" placeholder="Nama" value="" required="">
                  <div class="invalid-feedback">
                    What's your name?
                  </div>
                </div>
                <div class="form-group">
                  <label>No KTP</label>
                  <input type="text" name="no_ktp" class="form-control border-input" placeholder="No KTP" value="" required="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control border-input" placeholder="Alamat" value="" required="">
                  </input>
                </div>
                <div class="form-group">
                  <label>No Telepon</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-phone"></i>
                      </div>
                    </div>
                    <input type="text" name="telepon" class="form-control border-input" placeholder="No Telp" value="" required="">
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" name="submit" class="btn btn-primary">Tambah Pelanggan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>