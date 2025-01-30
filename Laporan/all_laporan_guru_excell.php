<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN DATA GURU SMK EI BUKIITINGGI.xls");?>
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

