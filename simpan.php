<?php

//panggil koneksi database
include "koneksiIKM.php";

//menampilkan data database
$tampil = mysqli_query($koneksi, "SELECT * from db_ikm limit 1");
$data = mysqli_fetch_array($tampil);

//menampung data ke dalam variabel
$id_ikm = $data['id_ikm'];
$puas = $data['puas'];
$cukup = $data['cukup'];
$kurang = $data['kurang'];

//mengambil nilai keterangan
$keterangan = $_GET['ket'];

//menambahkan di setiap nilai
if(isset($keterangan)){
	if($keterangan == "puas") {
		$puas = $puas + 1;
		$query = "UPDATE db_ikm SET puas= '$puas' where id_ikm = '$id_ikm' ";
	}
	elseif($keterangan == "cukup") {
		$cukup = $cukup + 1;
		$query = "UPDATE db_ikm SET cukup= '$cukup' where id_ikm = '$id_ikm' ";
	}
	elseif($keterangan == "kurang") {
		$kurang = $kurang + 1;
		$query = "UPDATE db_ikm SET kurang= '$kurang' where id_ikm = '$id_ikm' ";
	}

	//update data sesuai query
	mysqli_query($koneksi, $query);
	echo "<script>alert('Terima kasih, anda telah memberikan penilaian kepada pelayanan kami.');
	document.location='ikm.php'</script>";
}
?>