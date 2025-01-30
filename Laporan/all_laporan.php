<?php
error_reporting(0);
$nama_dokumen='Laporan Data Kepegawaian'; //Beri nama file PDF hasil.
define('mpdf60/');//lokasi folder mpdf
require_once("mpdf60/mpdf.php");
$mpdf=new mPDF('utf-8', 'A4-P'); // PDF mau L lanscape P potrait

$mpdf->setFooter('{PAGENO}');// memberikan footer nomor halaman

ob_start();
?>

<html>
<head>
<title> Laporan Data Kepegawaian</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<form name="form1" method="post" action="">
  <div align="center" style="border: solid; height: 100%;">
    <p align="center" class="style4"><img src="ei.jpg" width="60" height="60">
    <p align="center" style="color:black font-size:17px;"> LAPORAN</p>
    <p align="center" style="color:black font-size:14px;"> DATA KEPEGAWAIAN SMK EI BUKITTINGGI</p>
    <hr style="color: black; border:1px solid;">
                           
 <table border="1" style="border-collapse: collapse; font-size: 13px;">
	<thead>
	<tr style="height: 40px; background-color: dodgerblue;">
		<th>No</th>
		<th>Nip</th>
		<th>Nama</th>
		<th>TTL</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Status Pernikahan</th>
		<th>Ibu Kandung</th>
		<th>Pangkat</th>
		<th>Jabatan</th>
		<th>Status</th>
		<th>No.SK</th>
		<th>Tamat Pangkat</th>
		<th>Lembaga Pengangkat</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Telp</th>
	</tr>
	</thead>
<tbody>
<?php
include '../koneksi/-koneksi.php';
$sql = mysql_query("select * from tb_pegawai") or die(mysql_error());
$no=1;
while ($data=mysql_fetch_array($sql))
{
?>
<tr>
	<td><?php echo $no; ?>.</td>
	<td><?php echo $data['nip']; ?> </td>
	<td><?php echo $data['nama_pegawai']; ?></td>
	<td><?php echo $data['tempat']; ?>,<?php echo $data['tanggal_lahir']; ?></td>
	<td><?php echo $data['jk']; ?></td>
	<td><?php echo $data['agama']; ?></td>
	<td><?php echo $data['status_kawin']; ?></td>
	<td><?php echo $data['ibu']; ?></td>
	<td><?php echo $data['id_pangkat']; ?></td>
	<td><?php echo $data['id_jabatan']; ?></td>
	<td><?php echo $data['id_status']; ?></td>
	<td><?php echo $data['no_sk']; ?></td>
	<td><?php echo $data['tmt_pangkat']; ?></td>
	<td><?php echo $data['id_pengangkat']; ?></td>
	<td><?php echo $data['alamat']; ?></td>
	<td><?php echo $data['email']; ?></td>
	<td><?php echo $data['hp']; ?></td>
</tr>
<?php
$no++;
};
?>
	</tbody>
    </table>
    <br> <br>
    <div id="footer" align="right">
  <b>Bukiitinggi,<?php echo date (" d F Y") ?></b><br>
  <b>Kepala Sekolah</b><br> <br> <br> <br>
  <b style="text-decoration: underline">Drs,ISFAR,M.Pd</b><br>
  NIP.196106021984101002

  
</div>

    
    <p>&nbsp;</p>
  </div>

  

</form>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>

