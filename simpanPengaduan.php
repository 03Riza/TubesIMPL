<?php
include 'koneksiPengaduan.php';

$tglPengaduan = $_POST['tgl_pengaduan'];
$noTelpon = $_POST['no_telp'];
$Nama = $_POST['nama'];
$Pengaduan = $_POST['pengaduan'];

	$sql = "INSERT INTO pengaduan2 (tgl_pengaduan, no_telpon, nama, pengaduan)
	VALUES ('$tglPengaduan', '$noTelpon', '$Nama', '$Pengaduan')";

	include 'koneksiPengaduan.php';
	if(mysqli_query($koneksi, $sql)) {
		echo "<script>alert('Berhasil disimpan');
		window.location.assign('formPengaduan.php'); </script>";
	}else {
		echo "<script>alert('Tidak berhasil disimpan');
		window.location.assign('formPengaduan.php'); </script>";
	}

?>