<?php

$id = $_GET['id'];

$pro = new App\Projek();
$rows = $pro->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?hal=pro_tampil">Kembali</a>
</div>