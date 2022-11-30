<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Indeks Kepuasan Masyarakat</title>
  </head>
  <body>
  
  <div class="jumbotron jumbotron-fluid bg-dark text-white">
    <div class="container text-center ">
      <h1 class="display-4">Indeks Kepuasan Masyarakat</h1>
    </div>
  </div>

  <style type="text/css">
    .box {
      padding: 30px 40px;
      border-radius: 10px;
    }
  </style>

<?php
  include 'koneksi.php';
  
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