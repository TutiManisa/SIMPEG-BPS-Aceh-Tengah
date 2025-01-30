

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> LAPORAN DATA GURU </title>
    <!-- Favicon-->
    <link rel="icon" href="mts.png" type="image/x-icon" />
    <!--<link rel="icon" href="favicon.ico" type="image/x-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../asset/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
     <!-- Bootstrap Select Css -->
    <link href="../asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />


    <!-- Waves Effect Css -->
    <link href="../asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../asset/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- SWEAT ALERT-->
<script src="../asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="../asset/dist/sweetalert.css">
<!-- END-->

    <!-- JQuery DataTable Css -->
    <link href="../asset/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">


    <!-- Custom Css -->
    <link href="../asset/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../asset/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="icon" href="mts.png" type="image/x-icon" />

</head>

</head>
<body>
<div id="header" align="center" style="font-family: Cooper Black; ">
  <img src="ei.jpg" width='70' height='70' alt='user' style='background-color: dodgerblue;
  border: 3px solid dodgerblue;
  border-radius: 100%;' ><br>
  <b style="font-size: 24px;">LAPORAN</b><br>
  <b>DATA GURU </b><br>
  SMK ELEKTRONIKA INDONESIA BUKIITINGGI
  <hr style="border:1px solid; color: black;">
</div>
<div align="center" style="border:1px solid;">
  <table border="1" style="border-collapse: collapse;">
    <tr style=" height: 40px; background-color: orangered; color: white;">
    <th>No</th>
    <th>Nip</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>TTL</th>    
    <th>Jabatan</th>
    <th>Mata Pelajaran</th>
    <th>Alamat</th>
    <th>Telepon</th> 
    </tr>
    
      <?php
include "koneksi.php";
$sql = mysql_query("select * from tb_guru") or die(mysql_error());
$no=1;
while ($data=mysql_fetch_array($sql))
{
?>

  <tr>
    <td><?php echo $no; ?>.</td>
    <td><?php echo $data['nip']; ?> </td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['jk']; ?></td>
    <td><?php echo $data['tmp_lhr']; ?>,<?php echo $data['tgl_lhr']; ?></td>    
    <td><?php echo $data['jabatan']; ?></td>
    <td><?php echo $data['mapel']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['telepon']; ?></td>
     </tr>
      <?php
  $no++;
  };
  ?>

  </table>  
</div>
<br> <br>
<div id="footer" align="right">
  <b>Bukiitinggi,<?php echo date (" d F Y") ?></b><br>
  <b>Kepala Sekolah</b><br> <br> <br> <br>
  <b style="text-decoration: underline">Drs,ISFAR,M.Pd</b><br>
  NIP.196106021984101002

  
</div>
                  <!-- Jquery Core Js -->
    <script src="../asset/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../asset/plugins/bootstrap/js/bootstrap.js"></script>
    

    <!-- Select Plugin Js -->
    <script src="../asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../asset/plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="../asset/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
     <!-- Waves Effect Plugin Js -->
    <script src="../asset/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../asset/plugins/autosize/autosize.js"></script>
      <!-- JQuery Steps Plugin Js -->
    <script src="../asset/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../asset/plugins/momentjs/moment.js"></script>


     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="asset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
     <!-- Select Plugin Js -->
    <script src="asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Custom Js -->
    <script src="asset/js/admin.js"></script>    
    <script src="asset/js/pages/tables/jquery-datatable.js"></script>
    <script src="asset/js/pages/ui/tooltips-popovers.js"></script>

    <!-- Demo Js -->
    <script src="asset/js/demo.js"></script>
            
            

</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

