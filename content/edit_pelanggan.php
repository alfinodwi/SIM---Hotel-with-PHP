<?php
if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_ktp = $_POST['no_ktp'];
  $telepon = $_POST['telepon'];

  $result = mysqli_query($connect, "UPDATE pelanggan SET nama = '$nama', alamat = '$alamat', no_ktp = '$no_ktp', telepon = '$telepon' WHERE pelanggan.idpelanggan = $id;");

  header("Location: pelanggan.php");
}

$id = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM pelanggan WHERE idpelanggan=$id");

while ($res = mysqli_fetch_array($result)) {
  $nama = $res['nama'];
  $alamat = $res['alamat'];
  $no_ktp = $res['no_ktp'];
  $telepon = $res['telepon'];
}

?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pelanggan</h1>
    </div>

    <div class="section-body">
      <h2 class="section-title">Jumlah Pelanggan</h2>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control border-input" placeholder="Nama" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                  <label>No KTP</label>
                  <input type="text" name="no_ktp" class="form-control border-input" placeholder="No KTP" value="<?php echo $no_ktp; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control border-input" placeholder="Alamat" value="<?php echo $alamat; ?>">
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
                    <input type="text" name="telepon" class="form-control border-input" placeholder="No Telp" value="<?php echo $telepon; ?>">
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" name="update" class="btn btn-primary">Update Pelanggan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
</div>