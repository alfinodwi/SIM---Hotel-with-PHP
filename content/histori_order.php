<?php
$bayar = mysqli_query($connect, "SELECT * FROM `histori_order`");
while ($res = mysqli_fetch_assoc($bayar)) {
  $pemesanan[] = $res;
}
?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pelanggan</h1>
    </div>

    <div class="section-body">
      <h2 class="section-title">Pembayaran</h2>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Pembayaran</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <?php $i = 1; ?>
                  <?php foreach ($pemesanan as $k => $v) : ?>
                    <tr>
                      <th><?php echo $i++; ?></th>
                      <th><?php echo $v['nama']; ?> ( <?php echo $v['no_ktp']; ?> )</th>
                      <th><?php echo $v['biaya']; ?></th>
                      <th><?php echo $v['tgl_check_in']; ?></th>
                      <th><?php echo $v['tgl_check_out']; ?></th>
                      <th><?php echo ucfirst($v['status_order']); ?>

                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>