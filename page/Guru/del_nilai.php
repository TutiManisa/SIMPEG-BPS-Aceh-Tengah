<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kdgr = @$_GET['kdgr'];
mysql_query("delete from tb_nilai where nis = '$kdgr'") or die(mysql_error());
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru&action=nilai";       
 </script>