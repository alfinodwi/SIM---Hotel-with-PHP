<?php if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') : ?>
  <?php include_once('content/hapus_ruang_kamar.php'); ?>
<?php endif; ?>

<?php include_once('lib/header.php'); ?>
<div id="app">
  <div class="main-wrapper">
    <div class="navbar-bg"></div>
    <?php include_once('lib/sidebar.php'); ?>
    <?php include_once('lib/navbar.php'); ?>
    <?php if (isset($_GET['aksi']) && $_GET['aksi'] == 'edit') : ?>
      <?php include_once('content/edit_ruang_kamar.php'); ?>
    <?php else : ?>
      <?php include_once('content/ruang_kamar.php'); ?>
    <?php endif; ?>
    <?php include_once("lib/footer-top.php"); ?>
  </div>
</div>
<?php include_once('lib/footer.php'); ?>