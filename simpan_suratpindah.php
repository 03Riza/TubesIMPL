<?php
  require_once('koneksi.php');

       if(@$_POST['simpan']){

       //Mengambil data dari form tambah staff
       	$no=mysqli_real_escape_string($koneksi,$_POST['txtno']);
        $nik=mysqli_real_escape_string($koneksi,$_POST['txtnik']);
       	$nokk=mysqli_real_escape_string($koneksi,$_POST['txtnokk']);
		$nokk=mysqli_real_escape_string($koneksi,$_POST['txtnokk']);
		$nokkk=mysqli_real_escape_string($koneksi,$_POST['txtpindah']);
        $tgl=mysqli_real_escape_string($koneksi,$_POST['txt_tglpermohonan']);
       	
       	
       	
       	$perintah="INSERT INTO tb_ketpindah (no_ket,nik,nomor_kk,ket,tgl) VALUES('$no','$nik','$nokk','$nokkk','$tgl')";
	$aksi=mysqli_query($koneksi,$perintah) or die (mysqli_error($koneksi));

	if($aksi){
		echo"<script>alert('Berhasil disimpan')</script>";
		echo"<script>location='tampil_suratpindah.php';</script>";
	
	}else{
		echo "Error:".$perintah."<br>".mysqli_error($koneksi);
	}
}