<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN DATA PEGAWAI SMK EI BUKIITINGGI.xls");
?>
<div id="header" align="center" style="font-family: Cooper Black; ">
  <img src="ei.jpg" width='70' height='70' alt='user' style='background-color: dodgerblue;
  border: 3px solid dodgerblue;
  border-radius: 100%;' ><br>
  <b style="font-size: 24px;">LAPORAN</b><br>
  <b>DATA KEPEGAWAIAN </b><br>
  SMK ELEKTRONIKA INDONESIA BUKIITINGGI
  <hr style="border:1px solid; color: black;">
</div>
<div align="center" style="border:1px solid;">
  <table border="1" style="border-collapse: collapse;">
    <tr style=" height: 40px; background-color: dodgerblue; color: white;">
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
    
      <?php
include "koneksi.php";
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

  </table>  
</div>
<br> <br>
<div id="footer" align="right">
  <b>Bukiitinggi,<?php echo date (" d F Y") ?></b><br>
  <b>Kepala Sekolah</b><br> <br> <br> <br>
  <b style="text-decoration: underline">Drs,ISFAR,M.Pd</b><br>
  NIP.196106021984101002

  
</div>


