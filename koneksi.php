<?php
$koneksi=new mysqli('localhost','root','Ikqbal3357','db_sipa');
if($koneksi->connect_error){
	die("Koneksi Gagal:".$koneksi->connect_error);
}

?>