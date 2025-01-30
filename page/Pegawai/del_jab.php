<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kdjab = @$_GET['kdjab'];
mysql_query("delete from tb_jabatan where id_jabatan = '$kdjab'") or die(mysql_error());
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=jabatan";       
 </script>


