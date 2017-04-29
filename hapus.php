<?php

include "koneksi.php";
include "class_anggota.php";
$db = new Config();
$db->koneksi();
$dt = new Anggota();
if (isset($_GET['aksi']) == "hapus") {
    $dt->hapusdata($_GET['id']);
}
?>