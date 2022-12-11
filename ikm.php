<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Kelurahan Baros</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
     <!-- JavaScript -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
<body>
<?php
require_once('koneksi.php');

?>
 <div id="wrapper">
<?php 
include"header.php";
?>

</div>
<div id="page-wrapper">
<div class="row" id="contentInput" >
  <div class="col-lg-12">
    <h1>Instalasi Kepuasan Masyarakat</h1>
      <ol class="breadcrumb">
        <li class="active"></li>
      </ol>
  </div>
</div>

<?php
  include 'koneksiIKM.php';
  
  $tampil = mysqli_query($koneksi, "SELECT * FROM `ikm`");
  $data = mysqli_fetch_array($tampil);
?>

<!----- Container ----->
  <div class="container">
    <div class="alert alert-warning" role="alert"> 
      Pilihlah salah satu kepuasan kalian dalam pelayanan yang telah diberikan! 
    </div>

    <div class="row">
      <div class="col-md-4"> 
        <div class="bg-info box text-white">
          <div class="row">
            <div class="col-md-12">
              <h5>MEMUASKAN</h5>
              <h2>[<?=$data['puas']?>]</h2>
              <h5>Orang</h5>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>
      </div>

       <div class="col-md-4"> 
        <div class="bg-info box text-white">
          <div class="row">
            <div class="col-md-12">
              <h5>CUKUP</h5>
              <h2>[<?=$data['cukup']?>]</h2>
              <h5>Orang</h5>
            </div>
          </div>
        </div>
      </div>

       <div class="col-md-4"> 
        <div class="bg-info box text-white">
          <div class="row">
            <div class="col-md-12">
              <h5>KURANG MEMUASKAN</h5>
              <h2>[<?=$data['kurang']?>]</h2>
              <h5>Orang</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  </body>
</html>