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

<div class="row">
          <div class="col-lg-6">

            <form role="form">

              <div class="form-group">
                <label>Masukan Nama Lengkap :</label>
                <input class="form-control" placeholder="Isi dengan nama lengkap">
              </div>

              <div class="form-group">
                <label>Masukan No.Identitas :</label>
                <input class="form-control" type="number" placeholder="Isikan dengan NIK">
              </div>

              <div class="form-group">
                <label>Masukan Tempat Lahir :</label>
                <input class="form-control" placeholder="Isikan Tempat Lahir sesuai KTP">
              </div>

              <div class="form-group">
                <label>Tanggal Lahir :</label>
                <input class="form-control" placeholder="Isikan Tgl Lahir sesuai KTP">
              </div>

              <div class="form-group">
                <label>Masukan Alamat :</label>
                <input class="form-control" placeholder="Isikan alamat sesuai KTP">
              </div>

              <div class="form-group">
                <label>Masukan Kelurahan :</label>
                <input class="form-control" placeholder="Isikan kelurahan sesuai KTP">
              </div>

              <div class="form-group">
                <label>Masukan Pekerjaan :</label>
                <input class="form-control" placeholder="Isikan Pekerjaan">
              </div>

              <div class="form-group">
                <label>Masukan Status :</label>
                <input class="form-control" placeholder="Isikan Status Perkawinan">
              </div>

              <div class="form-group">
                <label>Masukan Agama :</label>
                <input class="form-control" placeholder="Isikan Agama sesuai KTP">
              </div>

              <div class="form-group">
              <label>Masukan No.Telp/Hp :</label>
              <input class="form-control" type="number" placeholder="Isikan dengan no telp/hp">
              </div>

              <div class="form-group">
              <label>Masukan Tanggal/Bulan/Tahun :</label>
              <input class="form-control" type="date">
              </div>

              <div class="form-group">
              <label>Pilih Jenis Kelamin :</label>
              <div class="radio">
                  <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Laki-laki
                  </label>
                </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Perempuan
                </label>
              </div>

              <div class="form-group">
                <label>Deskripsi Pengaduan</label>
                <textarea class="form-control" rows="3" placeholder="Deskripsikan pengaduan"></textarea>
              </div>

              <button type="submit" class="btn btn-default">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>  
            </form>
          </div>