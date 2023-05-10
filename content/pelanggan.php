<?php
$pelanggan = mysqli_query($connect, "SELECT * FROM pelanggan ORDER BY idpelanggan DESC");
?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pelanggan</h1>
    </div>

    <div class="section-body">
      <div class="row">

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Pelanggan</h4>
            </div>
            <div class="card-footer">
              <a href="tambah_pelanggan.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pelanggan</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php if (empty($pelanggan)) : ?>
                  <h3>Data Pelanggan kosong !</h3>
                <?php else : ?>
                  <table class="table table-bordered table-md">
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No KTP</th>
                      <th>Telepon</th>
                      <th>Aksi</th>
                    </tr>
                    <?php foreach ($pelanggan as $k => $v) : ?>
                      <tr>
                        <td><?php echo $v['idpelanggan']; ?></td>
                        <td><?php echo $v['nama']; ?> </td>
                        <td><?php echo $v['alamat']; ?> </td>
                        <td><?php echo $v['no_ktp']; ?> </td>
                        <td><?php echo $v['telepon']; ?></td>
                        <td>
                          <a href="pelanggan.php?aksi=edit&id=<?php echo $v['idpelanggan']; ?>" class="btn btn-success">Edit</a>
                          <a href="pelanggan.php?aksi=hapus&id=<?php echo $v['idpelanggan']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </table>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>