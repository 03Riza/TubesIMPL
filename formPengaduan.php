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
    <h1>Pengaduan Penduduk</h1>
      <ol class="breadcrumb">
        <li class="active"></li>
      </ol>
  </div>
</div>

<form action="simpanPengaduan.php" method="POST">
  
<div class="form-group">
    <label>Tanggal Pengaduan</label>
    <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= date('Y-m-d'); ?>">
</div>

<div class="form-group">
    <label>No Telpon</label>
    <input type="text" name="no_telp" class="form-control">
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control">
</div>

<div class="form-group">
    <label>Pengaduan</label>
    <textarea name="pengaduan" class="form-control" required></textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">SIMPAN</button>
</div>

<div class="form-group">
    <a href="tampilData.php">Lihat Pengaduan</a>
</div>
