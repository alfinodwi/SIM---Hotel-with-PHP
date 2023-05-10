<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Hotel</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
        <a href="index.php"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Master Kamar</li>
      <li class="" <?php echo (basename($_SERVER['PHP_SELF']) == 'ruang_kamar.php') ? 'active' : ''; ?>"">
        <a href="ruang_kamar.php"><i class="fas fa-columns"></i> <span>Kamar</span></a>
      </li>
      <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'tipe_kamar.php') ? 'active' : ''; ?>">
        <a href="tipe_kamar.php"><i class="fas fa-th"></i> <span>Tipe Kamar</span></a>
      </li>
      <li class="menu-header">Master Pelanggan</li>
      <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'pelanggan.php') ? 'active' : ''; ?>">
        <a href="pelanggan.php"><i class="far fa-user"></i> <span>Pelanggan</span></a>
      </li>
      <li class="menu-header">Transaksi</li>
      <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'pembayaran.php') ? 'active' : ''; ?>">
        <a href="pembayaran.php"><i class="fas fa-exclamation"></i> <span>Transaksi</span></a>
      </li>
      <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'histori_order.php') ? 'active' : ''; ?>">
        <a href="histori_order.php"><i class="far fa-file-alt"></i> <span>Laporan Transaksi</span></a>
      </li>
      <br>
      <li class="">
        <a href="about.php"><i class="fas fa-ellipsis-h"></i> <span>About Hotel</span></a>
      </li>
    </ul>
  </aside>
</div>