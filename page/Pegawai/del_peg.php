

<?php
include 'koneksi/-koneksi.php';
$kdpeg = @$_GET['kdpeg'];
mysql_query("delete from tb_pegawai where no_urut = '$kdpeg'") or die(mysql_error());
mysql_query("delete from tb_pendidikan where id_pend = '$kdpeg'") or die(mysql_error());
mysql_query("delete from tb_diklat where id_diklat = '$kdpeg'") or die(mysql_error());
?>
 <script>
        alert(" Data berhasil di hapus!") 
        window.location.href="?page=admin&action=data_siswa";       
 </script>












