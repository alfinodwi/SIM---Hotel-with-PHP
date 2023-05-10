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

      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Kamar</h4>
          </div>
          <div class="card-footer">
            <a href="tambah_kamar.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Kamar</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php if (empty($tipe_kamar)) : ?>
                <h3>Data Tipe Kamar kosong !</h3>
              <?php else : ?>
                <table class="table table-bordered table-md">
                  <tr>
                    <th>No</th>
                    <th>Tipe Kamar</th>
                    <th>Ruang Kamar</th>
                  </tr>
                  <?php $i = 1; ?>
                  <?php foreach ($tipe_kamar as $k => $v) : ?>
                    <tr>
                      <td>
                        <?php echo $i++; ?>
                      </td>
                      <td>
                        <?php echo $v['nama']; ?>
                      </td>
                      <td>
                        <?php
                        $sql_kamar = mysqli_query($connect, "SELECT * FROM `ruang_kamar` WHERE `id_tipe_kamar` = {$v['idtipe_kamar']}");
                        ?>
                        <?php while ($res = mysqli_fetch_assoc($sql_kamar)) : ?>
                          <a href="ruang_kamar.php?aksi=edit&id=<?php echo $res['idruang_kamar']; ?>" class="badge badge-success btn-fill btn-sm"><?php echo $res['idruang_kamar']; ?></a>
                        <?php endwhile; ?>
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