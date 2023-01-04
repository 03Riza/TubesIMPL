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
require'koneksi.php';

?>
 <div id="wrapper">
<?php 
include"header.php";
?>
</div>

<div id="page-wrapper">
<div class="row" id="contentInput" >
  <div class="col-lg-12">
    <h1>Hasil Pengaduan Penduduk</h1>
      <ol class="breadcrumb">
        <li class="active"></li>
      </ol>
  </div>
</div>

<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal Pengaduan</th>
        <th>No Telepon</th>
        <th>Nama</th>
        <th>Pengaduan</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
          include 'koneksiPengaduan.php';
          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
          $query = mysqli_query($koneksi, "SELECT * FROM pengaduan2");
          $no = 1;

          while($data = mysqli_fetch_array($query)) { 
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['tgl_pengaduan']; ?></td>
              <td><?php echo $data['no_telp']; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['pengaduan']; ?></td>
            </tr>
          <?php 
        } 
        ?>
    </tbody>
</table>