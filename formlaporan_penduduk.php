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
include "header.php";
?>
  </div>
  <div id="page-wrapper">
    <div class="row" id="contentInput">
      <div class="col-lg-12">
        <h1>Laporan Penduduk</h1>
        <ol class="breadcrumb">
          <li class="active"></li>

        </ol>
      </div>
    </div>

    <a href="" type="button" class="btn btn-danger" style="align:center;"><i class="fa fa-print"></i> CETAK SEMUA DATA
      PENDUDUK</a>
    <hr>

    <div class="panel panel-info">
      <div class="panel-heading-none">
      </div>
      <div class="panel-body">
        <form method="POST" action="" id="cariPenduduk">
          <div class="form-group form-group-sm">

            <div class="form-group form-group-sm">
              <label class=" control-label col-sm-2" for="cbkelurahan">Jenis Filter</label>
              <div class="col-sm-3">
                <select name="cbjenis" class="form-control" id="jenis" required>
                  <option value="">--Pilih--</option>
                  <option value="Tanggal Pembuatan">Tanggal Pembuatan</option>
                  <option value="Desa">Desa</option>
                </select>
              </div>
            </div>
            <input type="submit" align="right" class="btn btn-success" value="Pilih" name="pilih" id="pilih">

          </div>
      </div>
    </div>

    </form>