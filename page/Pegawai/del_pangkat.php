<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kdgol = @$_GET['kdgol'];
mysql_query("delete from tb_pangkat where id_pangkat = '$kdgol'") or die(mysql_error());
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=pangkat";       
 </script>


