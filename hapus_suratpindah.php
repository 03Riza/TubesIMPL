<?php
require_once('koneksi.php');

$id=mysqli_real_escape_string($koneksi,$_GET['id']);



$aksi=mysqli_query($koneksi,"DELETE from tb_ketpindah where no_ket='$id'");



header("location:tampil_suratpindah.php");

?>