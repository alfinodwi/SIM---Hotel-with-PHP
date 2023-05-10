<!-- Main Content -->
<?php
$kamar = mysqli_query($connect, "SELECT * FROM ruang_kamar");
$jumlah_kamar = mysqli_num_rows($kamar);

$laporan = mysqli_query($connect, "SELECT * FROM histori_order");
$jumlah_laporan = mysqli_num_rows($laporan);
?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Login Sebagai</h4>
            </div>
            <div class="card-body">
              Admin
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-clock"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Waktu</h4>
            </div>
            <div class="card-body">
              <span class="status blued"> <?= date("d.m.y") ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Data Kamar</h4>
            </div>
            <div class="card-body">
              <span class="status blued"> <?php echo $jumlah_kamar; ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="far fa-file-alt"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Laporan</h4>
            </div>
            <div class="card-body">
              <span class="status blued"> <?php echo $jumlah_laporan; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>