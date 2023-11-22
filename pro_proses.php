<?php

require_once "inc/Koneksi.php";
require_once "app/Projek.php";

$pro = new App\Projek();

if (isset($_POST['btn_simpan'])) {
    $pro->simpan();
    header("location:index.php?hal=pro_tampil");
}

if (isset($_POST['btn_update'])) {
    $pro->update();
    header("location:index.php?hal=pro_tampil");
}