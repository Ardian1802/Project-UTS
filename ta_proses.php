<?php

require_once "inc/Koneksi.php";
require_once "app/Tugas.php";

$ta = new App\Tugas();

if (isset($_POST['btn_simpan'])) {
    $ta->simpan();
    header("location:index.php?hal=ta_tampil");
}

if (isset($_POST['btn_update'])) {
    $ta->update();
    header("location:index.php?hal=ta_tampil");
}