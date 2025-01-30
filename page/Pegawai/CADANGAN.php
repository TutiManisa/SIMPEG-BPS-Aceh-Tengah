
        mysql_query("update tb_pegawai set nip='$nip', id_pangkat='$id_pangkat',id_jabatan='$id_jabatan',id_status='$id_status',id_pengangkat'$id_pengangkat',nama_pegawai'$nama_pegawai',tempat '$tempat',tanggal_lahir '$tanggal_lahir',jk '$jk',agama '$agama',status_kawin '$status_kawin',alamat '$alamat',email '$email',hp '$hp',no_sk '$no_sk',tmt_pangkat '$tmt_pangkat' where no_urut='$kdpeg' ");
        // tabel pendidkan
        mysql_query("update tb_pendidikan set jenjang='$jenjang',satuan_pendidikan '$satuan_pendidikan',tahun_masuk '$tahun_masuk',tahun_lulus '$tahun_lulus' where id_pend='$kdpeg' ");
        // tabel diklat
        mysqli_query("update tb_diklat set jenis_diklat='$jenis_diklat',nama_diklat '$nama_diklat',penyelenggara '$penyelenggara',tahun '$tahun',tingkat '$tingkat',waktu '$waktu' where id_diklat='$kdpeg' ");




        /////

        $edit= mysqli_query($connection,"UPDATE tb_pegawai, tb_pendidikan,tb_diklat SET tb_pegawai.nip='nip',tb_pegawai.id_pangkat='id_pangkat',tb_pegawai.id_jabatan='id_jabatan',tb_pegawai.id_status='id_status',tb_pegawai.id_pengangkat='id_pengangkat',tb_pegawai.nama_pegawai='nama_pegawai',tb_pegawai.tempat='tempat',tb_pegawai.tanggal_lahir='tanggal_lahir',tb_pegawai.jk='jk',tb_pegawai.agama='agama',tb_pegawai.status_kawin='status_kawin',tb_pegawai.ibu='ibu',tb_pegawai.alamat='alamat',tb_pegawai.email='email',tb_pegawai.hp='hp',tb_pegawai.no_sk='no_sk',tb_pegawai.tmt_pangkat='tmt_pangkat',

        	tb_pendidikan.jenjang='jenjang',tb_pendidikan.satuan_pendidikan='satuan_pendidikan',tb_pendidikan.tahun_masuk='tahun_masuk',tb_pendidikan.tahun_lulus='tahun_lulus',

        	tb_diklat.jenis_diklat='jenis_diklat',tb_diklat.nama_diklat='nama_diklat',tb_diklat.penyelenggara='penyelenggara',tb_diklat.tahun='tahun',tb_diklat.tingkat='tingkat',tb_diklat.waktu='waktu'
     WHERE tb_pegawai.no_urut=tb_pendidikan.id_pend=tb_diklat.id_diklat = $kdpeg;");

     ////
      <?php
include 'koneksi/+connection.php';
$kdpeg = @$_GET['kdpeg'];
$sql = mysqli_query($connection, "select tb_pegawai.*,tb_pendidikan.*,tb_diklat.* from tb_pegawai,tb_pendidikan,tb_diklat where tb_pegawai. no_urut=tb_pendidikan.id_pend=tb_diklat.id_diklat = '$kdpeg'") or die(mysqli_error());
$data=mysqli_fetch_array($sql);
?>

     <?php

                                include 'koneksi/-koneksi.php';
                                $sql = mysql_query("select tb_pegawai.*,tb_pendidikan.*,tb_diklat.* from tb_pegawai,tb_pendidikan,tb_diklat where tb_pegawai. no_urut=tb_pendidikan.id_pend=tb_diklat.id_diklat") or die (mysql_error());
                                $no=1;
                                while ($data = mysql_fetch_array($sql)){
                                ?>
<?php 
SELECT tabel1.*, tabel2.* FROM tabel1, tabel2
WHERE tabel1.PK=tabel2.FK;
 ?>






     /////

       @$nip =  mysql_real_escape_string ($_POST['nip']);
        @$id_pangkat = mysql_real_escape_string($_POST['id_pangkat']);
        @$id_jabatan = mysql_real_escape_string($_POST['id_jabatan']);
        @$id_status = mysql_real_escape_string($_POST['id_status']);
        @$id_pengangkat = mysql_real_escape_string($_POST['id_pengangkat']);
        @$nama_pegawai = mysql_real_escape_string($_POST['nama_pegawai']);
        @$tempat = mysql_real_escape_string($_POST['tempat']);
        @$tanggal_lahir = mysql_real_escape_string($_POST['tanggal_lahir']);
        @$jk = mysql_real_escape_string($_POST['jk']);
        @$agama = mysql_real_escape_string($_POST['agama']);
        @$status_kawin = mysqli_real_escape_string($_POST['status_kawin']);
        @$ibu = mysql_real_escape_string($_POST['ibu']);
        @$alamat = mysql_real_escape_string($_POST['alamat']);
        @$email = mysql_real_escape_string($_POST['email']);
        @$hp = mysql_real_escape_string($_POST['hp']);
        @$no_sk = mysql_real_escape_string($_POST['no_sk']);
        @$tmt_pangkat = mysql_real_escape_string($_POST['tmt_pangkat']);

        /// pendidikan
        @$jenjang = mysql_real_escape_string($_POST['jenjang']);
        @$satuan_pendidikan = mysql_real_escape_string($_POST['satuan_pendidikan']);
        @$tahun_masuk = mysql_real_escape_string($_POST['tahun_masuk']);
        @$tahun_lulus = mysql_real_escape_string($_POST['tahun_lulus']);
        // Diklat
        @$jenis_diklat = mysql_real_escape_string($_POST['jenis_diklat']);
        @$nama_diklat = mysql_real_escape_string($_POST['nama_diklat']);
        @$penyelenggara = mysql_real_escape_string($_POST['penyelenggara']);
        @$tahun = mysql_real_escape_string($_POST['tahun']);
        @$tingkat = mysql_real_escape_string($_POST['tingkat']);
        @$waktu = mysql_real_escape_string($_POST['waktu']);


        /////
        $edit= mysqli_query($connection,"UPDATE tb_pegawai, tb_pendidikan,tb_diklat SET tb_pegawai.nip='$nip',tb_pegawai.id_pangkat='$id_pangkat',tb_pegawai.id_jabatan='$id_jabatan',tb_pegawai.id_status='$id_status',tb_pegawai.id_pengangkat='$id_pengangkat',tb_pegawai.nama_pegawai='$nama_pegawai',tb_pegawai.tempat='$tempat',tb_pegawai.tanggal_lahir='$tanggal_lahir',tb_pegawai.jk='$jk',tb_pegawai.agama='$agama',tb_pegawai.status_kawin='$status_kawin',tb_pegawai.ibu='$ibu',tb_pegawai.alamat='$alamat',tb_pegawai.email='$email',tb_pegawai.hp='$hp',tb_pegawai.no_sk='$no_sk',tb_pegawai.tmt_pangkat='$tmt_pangkat',

            tb_pendidikan.jenjang='$jenjang',tb_pendidikan.satuan_pendidikan='$satuan_pendidikan',tb_pendidikan.tahun_masuk='$tahun_masuk',tb_pendidikan.tahun_lulus='$tahun_lulus',

            tb_diklat.jenis_diklat='$jenis_diklat',tb_diklat.nama_diklat='$nama_diklat',tb_diklat.penyelenggara='$penyelenggara',tb_diklat.tahun='$tahun',tb_diklat.tingkat='$tingkat',tb_diklat.waktu='$waktu'
     WHERE tb_pegawai.no_urut=tb_pendidikan.id_pend=tb_diklat.id_diklat = $kdpeg;");


     /////

     $sql = mysqli_query($connection, "select tb_pegawai.*,tb_pendidikan.*,tb_diklat.* from tb_pegawai,tb_pendidikan,tb_diklat where tb_pegawai. no_urut=tb_pendidikan.id_pend=tb_diklat.id_diklat = '$kdpeg'") or die(mysql_error());

     ////
                             

                                $sql = mysql_query("select * from tb_pegawai") or die (mysql_error());
                                $sql = mysql_query("select * from tb_pendidikan") or die (mysql_error());
                                $sql = mysql_query("select * from tb_diklat") or die (mysql_error());



                                ////
                                $kdpeg = @$_GET['kdpeg'];
$kdpeg1 = @$_GET['kdpeg1'];
$kdpeg2 = @$_GET['kdpeg2'];
$sql = mysqli_query($connection,"select * from tb_pegawai where no_urut = '$kdpeg'") or die(mysql_error());
$sql1 = mysqli_query($connection,"select * from tb_pendidikan where id_pend = '$kdpeg1'") or die(mysql_error());
$sql2 = mysqli_query($connection,"select * from tb_diklat where id_diklat = '$kdpeg2'") or die(mysql_error());

$data=mysqli_fetch_array($sql);
$data1=mysqli_fetch_array($sql1);
$data2=mysqli_fetch_array($sql2);




/// aksi edit

                   <!-- EDIT DATA-->
      <?php
include 'koneksi/+connection.php';
if (@$_POST['edit']) {
        @$nip =  mysql_real_escape_string ($_POST['nip']);
        @$id_pangkat = mysql_real_escape_string($_POST['id_pangkat']);
        @$id_jabatan = mysql_real_escape_string($_POST['id_jabatan']);
        @$id_status = mysql_real_escape_string($_POST['id_status']);
        @$id_pengangkat = mysql_real_escape_string($_POST['id_pengangkat']);
        @$nama_pegawai = mysql_real_escape_string($_POST['nama_pegawai']);
        @$tempat = mysql_real_escape_string($_POST['tempat']);
        @$tanggal_lahir = mysql_real_escape_string($_POST['tanggal_lahir']);
        @$jk = mysql_real_escape_string($_POST['jk']);
        @$agama = mysql_real_escape_string($_POST['agama']);
        @$status_kawin = mysqli_real_escape_string($_POST['status_kawin']);
        @$ibu = mysql_real_escape_string($_POST['ibu']);
        @$alamat = mysql_real_escape_string($_POST['alamat']);
        @$email = mysql_real_escape_string($_POST['email']);
        @$hp = mysql_real_escape_string($_POST['hp']);
        @$no_sk = mysql_real_escape_string($_POST['no_sk']);
        @$tmt_pangkat = mysql_real_escape_string($_POST['tmt_pangkat']);

        /// pendidikan
        @$jenjang = mysql_real_escape_string($_POST['jenjang']);
        @$satuan_pendidikan = mysql_real_escape_string($_POST['satuan_pendidikan']);
        @$tahun_masuk = mysql_real_escape_string($_POST['tahun_masuk']);
        @$tahun_lulus = mysql_real_escape_string($_POST['tahun_lulus']);
        // Diklat
        @$jenis_diklat = mysql_real_escape_string($_POST['jenis_diklat']);
        @$nama_diklat = mysql_real_escape_string($_POST['nama_diklat']);
        @$penyelenggara = mysql_real_escape_string($_POST['penyelenggara']);
        @$tahun = mysql_real_escape_string($_POST['tahun']);
        @$tingkat = mysql_real_escape_string($_POST['tingkat']);
        @$waktu = mysql_real_escape_string($_POST['waktu']);

        
        $q=mysqli_query($connection,"update tb_pegawai set nip='$nip', id_pangkat='$id_pangkat',id_jabatan='$id_jabatan',id_status='$id_status',id_pengangkat'$id_pengangkat',nama_pegawai'$nama_pegawai',tempat '$tempat',tanggal_lahir '$tanggal_lahir',jk '$jk',agama '$agama',status_kawin '$status_kawin',alamat '$alamat',email '$email',hp '$hp',no_sk '$no_sk',tmt_pangkat '$tmt_pangkat' where no_urut='$kdpeg' ");
        // tabel pendidkan
        $q1=mysqli_query($connection,"update tb_pendidikan set jenjang='$jenjang',satuan_pendidikan '$satuan_pendidikan',tahun_masuk '$tahun_masuk',tahun_lulus '$tahun_lulus' where id_pend='$kdpeg' ");
        // tabel diklat
        $q2=mysqli_query($connection,"update tb_diklat set jenis_diklat='$jenis_diklat',nama_diklat '$nama_diklat',penyelenggara '$penyelenggara',tahun '$tahun',tingkat '$tingkat',waktu '$waktu' where id_diklat='$kdpeg' ");


          ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=admin&action=pegawai";     
</script>
<?php

}



?>
