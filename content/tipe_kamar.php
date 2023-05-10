<?php
$tipe_kamar = mysqli_query($connect, "SELECT * FROM tipe_kamar");
?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tipe Kamar</h1>
    </div>

    <div class="section-body">
      <div class="row">

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Tipe Kamar</h4>
            </div>
            <div class="card-footer">
              <a href="tambah_tipe.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Tipe Kamar</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php if (empty($tipe_kamar)) : ?>
                  <h3>Data Tipe Kamar kosong !</h3>
                <?php else : ?>
                  <table class="table table-bordered table-md">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($tipe_kamar as $k => $v) : ?>
                      <tr>
                        <td> <?php echo $i++; ?></td>
                        <td><?php echo $v['nama']; ?> ( <?php echo $v['singkatan']; ?> )</td>
                        <td> <?php echo $v['harga']; ?></td>
                        <td>
                          <a href="tipe_kamar.php?aksi=edit&id=<?php echo $v['idtipe_kamar']; ?>" class="btn btn-warning">Edit</a>
                          <a href="tipe_kamar.php?aksi=hapus&id=<?php echo $v['idtipe_kamar']; ?>" class="btn btn-danger">Delete</a>
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