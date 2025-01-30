?page=guru&action=proses_edit                                                        <?php
include 'koneksi/-koneksi.php';
if (@$_POST['edit']) {
@$nis = mysql_real_escape_string($_POST['nis']);
@$smt = mysql_real_escape_string($_POST['smt']);
@$jurusan = mysql_real_escape_string($_POST['jurusan']);
@$nm_siswa = mysql_real_escape_string($_POST['nm_siswa']);
@$nm_guru = mysql_real_escape_string($_POST['nm_guru']);
@$tp = mysql_real_escape_string($_POST['tp']);
@$mapel = mysql_real_escape_string($_POST['mapel']);
@$kelas = mysql_real_escape_string($_POST['kelas']);
@$uh = mysql_real_escape_string($_POST['uh']);
@$mid = mysql_real_escape_string($_POST['mid']);
@$uas = mysql_real_escape_string($_POST['uas']);
$update=mysql_query("UPDATE tb_guru SET nama='$nama', jk='$jk',tmp_lhr='$tmp_lhr',tgl_lhr='$tgl_lhr',agama='$agama', jabatan='$jabatan',mapel='$mapel',alamat='$alamat',telepon='$telepon' WHERE nip='$kdgr' ") or die(mysql_error());
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=guru";     
</script>
<?php 
}



?>

                                                  <?php
include 'koneksi/-koneksi.php';
if (@$_POST['edit']) {
@$nis = mysql_real_escape_string($_POST['nis']);
@$smt = mysql_real_escape_string($_POST['smt']);
@$jurusan = mysql_real_escape_string($_POST['jurusan']);
@$nm_siswa = mysql_real_escape_string($_POST['nm_siswa']);
@$nm_guru = mysql_real_escape_string($_POST['nm_guru']);
@$tp = mysql_real_escape_string($_POST['tp']);
@$mapel = mysql_real_escape_string($_POST['mapel']);
@$kelas = mysql_real_escape_string($_POST['kelas']);
@$uh = mysql_real_escape_string($_POST['uh']);
@$mid = mysql_real_escape_string($_POST['mid']);
@$uas = mysql_real_escape_string($_POST['uas']);
$update=mysql_query("UPDATE tb_guru SET nama='$nama', jk='$jk',tmp_lhr='$tmp_lhr',tgl_lhr='$tgl_lhr',agama='$agama', jabatan='$jabatan',mapel='$mapel',alamat='$alamat',telepon='$telepon' WHERE nip='$kdgr' ") or die(mysql_error());
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=guru";     
</script>
<?php 
}



?>
  <!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title></title>
</head>
<body>
	     	<?php
						include 'koneksi/-koneksi.php';
						$kdgr = @$_GET['kdgr'];
						$sql = mysql_query("select * from tb_nilai where nis = '$kdgr'") or die(mysql_error());
						$data = mysql_fetch_array($sql);

						?>
<?php
$smt=mysql_real_escape_string($_POST['smt']);
$jurusan=mysql_real_escape_string($_POST['jurusan']);
$nm_guru=mysql_real_escape_string($_POST['nm_guru']);
$tp=mysql_real_escape_string($_POST['tp']);
$mapel=mysql_real_escape_string($_POST['mapel']);
$nis=mysql_real_escape_string($_POST['nis']);
$nm_siswa=mysql_real_escape_string($_POST['nm_siswa']);
$kelas=mysql_real_escape_string($_POST['kelas']);
$uh=mysql_real_escape_string($_POST['uh']);
$mid=mysql_real_escape_string($_POST['mid']);
$uas =mysql_real_escape_string($_POST['uas']);

$nr=($uh+$mid+$uas)/3;
if ($nr>59)
{ $ket="TUNTAS";}
else
{$ket="TIDAK TUNTAS";}

include "koneksi/-koneksi.php";
mysql_query("UPDATE tb_nilai SET uh='$uh',mid='$mid',uas='$uas',nr='$nr',ket='$ket' WHERE nis='$kdgr' ");
?>
<script type="text/javascript">
        swal(" Sukses !", "Data berhasil di edit!", "success") 
        window.location.href="?page=guru&action=nilai";       
 </script>
</body>
</html>