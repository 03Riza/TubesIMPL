<?php
ob_start();

require_once('koneksi.php');



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>BAROS</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
     <!-- JavaScript -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/highcharts.js"></script>
   <script src="assets/js/highcharts-3d.js"></script>

   <script type="text/javascript">
    $(function(){
   var
   chart1,chart2;
   chart2 = new Highcharts.Chart({
        chart:{
          renderTo:'grafikJk',
          type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
          }
        },
        title:{
          text:'Grafik Penduduk Berdasarkan Jenis Kelamin'
        },
        tooltif:{
          formatter:function(){
            return'<b>'+
            this.point.name+'</b>:'+ Highcharts.numberFormat(this.percentage,2)+'%';
          }
        },

        plotOptions:{
          pie:{
            allowPointSellect:true,
            cursor:'pointer',
            dataLabels:{
              enabled:true,
              color:'#000000',
              connectorColor:'green',
              formatter:function()
              {
                return '<b>' + this.point.name + '</b>:' + Highcharts.numberFormat(this.percentage,2) + '%';
              }
            }
          }
        },
        series:[{
          type:'pie',
          name:'Jenis Kelamin',
          data:[
          <?php
          $ql="SELECT jenisKelamin, COUNT(*) as jumlah FROM tb_penduduk group by jenisKelamin order by count(*) desc";
          $que=mysqli_query($koneksi,$ql);
          while ($row=mysqli_fetch_array($que)){
            $kategori=$row['jenisKelamin'];
            $jum=$row['jumlah'];
            ?>
            [
              '<?php echo $kategori ?>',<?php echo $jum;?>
            ],
            <?php
          }
          ?>
          ]
        }]
      });
chart1 = new Highcharts.Chart({
    chart:{
          renderTo:'grafikPend',
          type: 'column',
        },
        title:{
          text:'Grafik Penduduk Berdasakan Pendidikan'
        },
        xAxis: {
          categories:['Pendidikan']
        },
        yAxis:{
          title:{
            text:'Jumlah Penduduk'
          }
        },
        series:
        [
        <?php
        $perintah="SELECT pendidikan, COUNT(*) as jumlah FROM tb_penduduk group by pendidikan order by count(*) desc";
          $q=mysqli_query($koneksi,$perintah);
          while ($row=mysqli_fetch_array($q)){
            $kate=$row['pendidikan'];
            $jumlah=$row['jumlah'];
        ?>
        {
          name:'<?php echo $kate;?>',
          data:[<?php echo $jumlah;?>]
        },
        <?php
        }
        ?>
        ]
      });
     
    });

    </script>
   
  </head>
<body>
  
<?php
require_once('koneksi.php');

?>
 <div id="wrapper">
<?php 
include"header.php";

?>
<?php
        if($_SESSION['level']=="admin"){
      ?>
</div>
<div id="page-wrapper">
  <div class="row" id="contentInput" >
          <div class="col-lg-12">
            <h1>Satatistik Kelurahan Baros<small> <?php echo $_SESSION['level'];?> </small></h1>
            <ol class="breadcrumb">
              <h5 class="text-warning"><?php $hari=date('l,d-M-Y'); echo $hari;?></h5>
             <h5 class="text-info">Selamat Datang <?php  echo $_SESSION['userid'];?> </h5>
            </ol>
          </div>
      </div>
   
 <div class="container">
        <div class="row row-table">
          <div class="col-md-5 col-table">
          <div class="panel panel-info">
            <div class="panel-heading" style="align:center;">
            </div>
            <div class="panel-body">
              <div id="grafikJk"></div>
         </div>
       </div>
     </div>

    <div class="col-md-5 col-table">
          <div class="panel panel-info">
            <div class="panel-heading" style="align:center;">
            </div>
            <div class="panel-body">
               <div id="grafikPend"></div>
              <div></div>
         </div>
       </div>
      </div>
    <?php
  }
    ?>
