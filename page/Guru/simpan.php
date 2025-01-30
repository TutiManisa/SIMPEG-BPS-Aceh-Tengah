<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title></title>
</head>
<body>
<?php
include "koneksi/-koneksi.php";
$smt=$_POST['smt'];
$jurusan=$_POST['jurusan'];
$nm_guru=$_POST['nm_guru'];
$tp=$_POST['tp'];
$mapel=$_POST['mapel'];
$nis=$_POST['nis'];
$nm_siswa=$_POST['nm_siswa'];
$kelas=$_POST['kelas'];
$uh=$_POST['uh'];
$mid=$_POST['mid'];
$uas=$_POST['uas'];

$nr=($uh+$mid+$uas)/3;
if ($nr>59)
{ $ket="TUNTAS";}
else
{$ket="TIDAK TUNTAS";
}
mysql_query("INSERT into tb_nilai values('$nis','$smt','$jurusan', '$nm_siswa','$nm_guru','$tp','$mapel','$kelas', '$uh','$mid','$uas','$nr','$ket')");
?>
<script type="text/javascript">
        swal(" Sukses !", "Data berhasil di di inputkan!", "success") 
        window.location.href="?page=guru&action=nilai";       
 </script>
</body>
</html>
