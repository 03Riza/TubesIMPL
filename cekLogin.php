<?php
ob_start();
session_start();
require'koneksi.php';
if(@$_POST['login']){
	$user=mysqli_real_escape_string($koneksi,$_POST['username']);
	$pass=mysqli_real_escape_string($koneksi,md5($_POST['password']));
	$level=mysqli_real_escape_string($koneksi,$_POST['level']);
	
	if($level=='admin'){
		$sql="SELECT * FROM tb_user WHERE userID='$user' and password='$pass'";
		$query=mysqli_query($koneksi,$sql);
		if(mysqli_num_rows($query)>0){
			$row=mysqli_fetch_array($query);

			$_SESSION['userid']=$row['nama'];
			$_SESSION['level']=$level;
			$_SESSION['islogin']=true;
			header('location:home.php');
		}else{
		echo"<script>alert(' Maaf Username dan Password dan Level Tidak Cocok')</script>";
		echo"<script>location='index.php';</script>";
		
	}
		

	
}
}
?>
