<?php

$id = $_GET['id'];

$cat = new App\Kategori();
$rows = $cat->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=cat_tampil">Kembali</a>
</div>