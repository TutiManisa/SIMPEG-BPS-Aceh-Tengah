
<?php
include 'koneksi/-koneksi.php';
$guru_kelass =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE id_jabatan='Guru Kelass' "));
$guru_mapel =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE id_jabatan='Guru Mata Pelajaran' "));
$adm =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE id_jabatan='Tenaga Administrasi' "));
$pustaka =mysql_num_rows(mysql_query("SELECT * FROM tb_guru WHERE jabatan='Pustakawan' "));
$pns =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE id_status='PNS' "));
$pns_depag =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE id_status='PNS DEPAG' "));
$pns_bantu =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE id_status='PNS Diperbantukan' "));
$honor =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai WHERE id_status='Tenaga Honor Sekolah' "));
?>

<html>
  <head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["PNS", <?php echo "".$pns." ";?>, "grey"],
        ["PNS Diperbantukan", <?php echo "".$pns_bantu." ";?>, "silver"],
        ["PNS DEPAG", <?php echo "".$pns_depag." ";?>, "gold"],
        ["Guru Honor", <?php echo "".$honor." ";?>, "dodgerblue"],
        ["Pustakawan", <?php echo "".$pustaka." ";?>, "silver"],
        ["Guru Mata Pelajaran", <?php echo "".$guru_mapel." ";?>, "silvel"],
        ["Guru Kelass", <?php echo "".$guru_kelass." ";?>, "gold"],
        ["Tenaga Administrasi", <?php echo "".$adm." ";?>, "orangered"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Grafik jabatan Pegawai & Status Pegawai",
    
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

  </head>
  <body>
  	<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i> Data Grafik Pegawai & Staff</li>
</ol>
	<div class="row">
	<div id="columnchart_values" style="height: 500px;"></div>
	</div>
  </body>
</html>