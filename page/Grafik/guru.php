
<?php
include 'koneksi/-koneksi.php';

$jmlguru =mysql_num_rows(mysql_query("SELECT * FROM tb_guru"));
$laki =mysql_num_rows(mysql_query("SELECT * FROM tb_guru WHERE jk='Laki-laki' "));
$pr =mysql_num_rows(mysql_query("SELECT * FROM tb_guru WHERE jk='Perempuan' "));
?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Staff', <?php echo "".$jmlguru." ";?>],
          ['Laki-laki', <?php echo "".$laki." ";?>],
          ['Perempuan',     <?php echo "".$pr." ";?>]
        ]);

        var options = {
          title: 'Grafik Data Staff BPS Aceh Tengah',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  	<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i> Data Grafik Pegawai & Staff</li>
</ol>
	<div class="row">
	<div class="body table-responsive" id="piechart_3d" style="height: 500px;"></div>
	</div>
  </body>
</html>