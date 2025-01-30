<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN DATA AGENDA GURU SMK EI BUKIITINGGI.xls");?>
<center>
	<div id="header" align="center" style="font-family: Cooper Black; ">
  <img src="ei.jpg" width='70' height='70' alt='user' style='background-color: dodgerblue;
  border: 3px solid dodgerblue;
  border-radius: 100%;' ><br>
  <b style="font-size: 24px;">LAPORAN</b><br>
  <b>DATA AGENDA STAFF </b><br>
  BPS ACEH TENGAH
  <hr style="border:1px solid; color: black;">
</div>
<div align="center" style="border:1px solid;">
  <table border="1" style="border-collapse: collapse;">
    <tr style=" height: 40px; background-color: greenyellow; color: white;">
    <th>No</th>
    <th>Nama </th>
    <th>T.Pelajaran</th>
    <th>Mata Pelajaran</th>
    <th>Tanggal</th>    
    <th>Kelas</th>
    <th>Materi</th>
    <th>Absen</th>
    <th>Keterangan</th> 
    </tr>
    
      <?php
include "koneksi.php";
$sql = mysql_query("select * from tb_agenda") or die(mysql_error());
$no=1;
while ($data=mysql_fetch_array($sql))
{
?>

  <tr>
    <td><?php echo $no; ?>.</td>
    <td><?php echo $data['nm_guru']; ?> </td>
    <td><?php echo $data['tp']; ?></td>
    <td><?php echo $data['mapel']; ?></td>
    <td><?php echo $data['tgl']; ?></td>    
    <td><?php echo $data['kelas']; ?></td>
    <td><?php echo $data['materi']; ?></td>
    <td><?php echo $data['absen']; ?></td>
    <td><?php echo $data['ket']; ?></td>
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
</center>



