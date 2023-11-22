<?php

$id = $_GET['id'];

$ta = new App\Tugas();
$rows = $ta->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=ta_tampil">Kembali</a>
</div>