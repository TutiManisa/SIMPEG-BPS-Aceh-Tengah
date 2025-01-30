          
<?php
include 'koneksi/-koneksi.php';
$jmlpegawai =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai"));
$jmlguru =mysql_num_rows(mysql_query("SELECT * FROM tb_guru"));
$laki =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE jk='Laki-laki' "));
$pr =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE jk='Perempuan' "));
?>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Pegawai', <?php echo "".$jmlpegawai." ";?>],
          ['Staff', <?php echo "".$jmlguru." ";?>],
          ['Laki-laki', <?php echo "".$laki." ";?>],
          ['Perempuan',     <?php echo "".$pr." ";?>]
        ]);

        var options = {
          title: 'Grafik Jumlah Data Pegawai BPS Aceh Tengah ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>


      <div class="row">
        <div class="col s12 m12">
            <div class="card-content black-text"> 
            <!--<span class="card-title"><b>Lokasi Sekolah Kami </b></span>            
              <p>Google Chart</p>-->
            </div>
            <div class="card-action">
            	<div class="card-action" width="100%" id="piechart_3d" style="height: 500px;"></div>
            </div>
          </div>
      </div>

   