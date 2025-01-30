<?php
error_reporting(0);
$nama_dokumen='Laporan Agenda Guru'; //Beri nama file PDF hasil.
define('mpdf60/');//lokasi folder mpdf
require_once("mpdf60/mpdf.php");
$mpdf=new mPDF('utf-8', 'A4-P'); // PDF mau L lanscape P potrait

$mpdf->setFooter('{PAGENO}');// memberikan footer nomor halaman

ob_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title> Laporan Data Pegawai</title>
</head>
<body>
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
    <th>Nama Guru</th>
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
</body>
<script>

</script>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>

