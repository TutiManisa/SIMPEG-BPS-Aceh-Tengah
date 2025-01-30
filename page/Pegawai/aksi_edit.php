<!-- EDIT DATA-->
 <?php 

include 'koneksi/-koneksi.php';
         $no_urut = @$_POST['no_urut'];
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





      $query= mysql_query("UPDATE tb_pegawai SET nip ='$nip',id_pangkat='$id_pangkat',id_jabatan='$id_jabatan',id_status='$id_status',id_pengangkat='$id_pengangkat',nama_pegawai='$nama_pegawai',tempat='$tempat',tanggal_lahir='$tanggal_lahir',jk='$jk',agama='$agama',status_kawin='$status_kawin',ibu='$ibu',alamat='$alamat',email='$email',hp='$hp',no_sk='$no_sk',tmt_pangkat='$tmt_pangkat' WHERE no_urut='$kdpeg' ");
      $query1=mysql_query("UPDATE tb_pendidikan SET jenjang ='$jenjang',satuan_pendidikan='$satuan_pendidikan',tahun_masuk='$tahun_masuk',tahun_lulus='$tahun_lulus' WHERE id_pend='$kdpeg' ");
         $query2= mysql_query( "UPDATE tb_diklat SET jenis_diklat ='$jenis_diklat',nama_diklat='$nama_diklat',penyelenggara='$penyelenggara',tahun='$tahun',tingkat='$tingkat',waktu='$tingkat' WHERE id_diklat='$kdpeg' ");




  ?>