<?php
$bayar = mysqli_query($connect, "SELECT * FROM `lihat_bayar`");
while ($res = mysqli_fetch_assoc($bayar)) {
  $pemesanan[] = $res;
}
?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Transaksi</h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Pembayaran</h4>
          </div>
          <div class="card-footer">
            <a href="pemesanan.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Transaksi</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php if (empty($pemesanan)) : ?>
                <h3>Data pembayaran kosong !</h3>
                <a href="pemesanan.php" class="btn btn-primary">Tambah Pemesanan</a>
              <?php else : ?>
                <table class="table table-bordered table-md">
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Biaya</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Aksi</th>
                  </tr>
                  <?php $i = 1; ?>
                  <?php foreach ($pemesanan as $k => $v) : ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $v['nama']; ?> ( <?php echo $v['no_ktp']; ?> )</td>
                      <td><?php echo $v['biaya']; ?></td>
                      <td><?php echo $v['tgl_check_in']; ?></td>
                      <td><?php echo $v['tgl_check_out']; ?></td>
                      <td>
                        <a href="proses_pembayaran.php?id=<?php echo $v['idorder']; ?>" class="btn btn-success">Bayar & Check out</a>
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
  </section>
</div>