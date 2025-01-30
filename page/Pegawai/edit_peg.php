
<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i> Edit Data Pegawai</li>
</ol>
<!--TAMBAH DATA PEGAWAI BARU-->
<!-- Multiple Items To Be Open -->
  
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA KEPEGAWAIAN
                            </h2>
                        </div>
                       
<?php
include 'koneksi/-koneksi.php';
$kdpeg = @$_GET['kdpeg'];
$sql = mysql_query("select * from tb_pegawai where no_urut = '$kdpeg'") or die(mysql_error());
$data = mysql_fetch_array($sql);
?>
                        <form action="" method="post"> 
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-light-blue">
                                            <div class="panel-heading" role="tab" id="headingOne_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                                        <i class="material-icons">perm_contact_calendar</i> IDENTITAS PENDIDIK & TK
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                        <div class="panel body"> 
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>" >
                                                        <label class="form-label">Nip</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="nama_pegawai" class="form-control" value="<?php echo $data['nama_pegawai']; ?>">
                                                        <label class="form-label">Nama</label>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="tempat" class="form-control" value="<?php echo $data['tempat']; ?>">
                                                        <label class="form-label">Tempat Lahir</label>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="date" name="tanggal_lahir" id="date" class="form-control floating-label" value="<?php echo $data['tanggal_lahir']; ?>" > 
                                                        <label class="form-label">Tanggal Lahir</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label class="form-label">Jenis Kelamin</label>
                                            <div class="form-group">
                                                <div class="demo-radio-button">
                                                <input name="jk" value="Laki-laki" type="radio" id="radio_30" class="with-gap radio-col-light-blue" <?php if ($data['jk'] == 'Laki-laki') {echo "checked";} ?> />
                                                <label for="radio_30">Laki-laki</label>
                                                <input name="jk" value="Perempuan" type="radio" id="radio_31" class="with-gap radio-col-light-blue" <?php if ($data['jk'] == 'Perempuan') {echo "checked";} ?> />
                                                <label for="radio_31">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <label>Agama</label>
                                            <div class="form-group form-float"> 
                                            <select name="agama" class="form-control show-tick">
                                            <option> Pilih Agama</option>
                                            <option name="agama" value="Islam"> Islam </option>
                                            <option name="agama" value="Kristen Protestan"> Kristen Protestan </option>
                                            <option name="agama" value="Kristen Katolik"> Kristen Katolik </option>
                                            <option name="agama" value="Hindu"> Hindu </option>
                                            <option name="agama" value="Budha"> Budha </option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group form-float">
                                                        <label class="form-label">Status Perkawinan</label>
                                                        <select name="status_kawin" class="form-control show-tick">
                                                            <option>--Pilih Status Kawin--</option>
                                                            <option name="status_kawin" value="Menikah"> Menikah</option>
                                                            <option name="status_kawin" value="Belum Menikah"> Belum Nikah</option>
                                                            <option name="status_kawin" value="Janda/Duda" > Janda/Duda</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="ibu" class="form-control" value="<?php echo $data['ibu']; ?>" >
                                                        <label class="form-label">Nama Ibu Kandung</label>
                                                    </div>
                                                </div>
                                            </div>
                                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>">
                                                        <label class="form-label">Alamat</label>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                         <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>">
                                                        <label class="form-label">E-mail</label>
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="hp" class="form-control" value="<?php echo $data['hp']; ?>" >
                                                        <label class="form-label">No HP (08xx xxx xxxx)</label>
                                                    </div>
                                                </div>
                                            </div>
                                              

                                           
                                        </div>


                                        </div>
                                        <!--akhir div panel body-->
                                    </div>
                                </div>
                                       
                                        <div class="panel panel-col-light-blue">
                                            <div class="panel-heading" role="tab" id="headingTwo_19">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19">
                                                        <i class="material-icons">info</i> DATA KEPEGAWAIAN
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_19">

                                        <div class="panel body"> 
                                                                                   
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group form-float">
                                            <div class="form-line">
                                            <input type="text" name="no_sk" id="nama_lengkap" value="<?php echo $data['no_sk']; ?>" class="form-control">
                                             <label class="form-label">SK Pengangkatan</label>

                                            </div>
                                            </div>
                                            </div>
                                             <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group form-float">
                                            <div class="form-line">
                                            <input type="date" name="tmt_pangkat" id="nama_lengkap" class="form-control" value="<?php echo $data['tmt_pangkat']; ?>" >
                                             <label class="form-label">TMT Pengangkatan</label>

                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group form-float">
                                            <label class="form-label">Pangkat/Golongan</label>
                                            <select name="id_pangkat" class="form-control show-tick">
                                            <option value=" "> -- Pilih pangkat -- </option>
                                             <?php 
                                                include 'koneksi/-koneksi.php';
                                                $pangkat = mysql_query("SELECT nama_golongan FROM tb_pangkat");
                                                while($hasil = mysql_fetch_array($pangkat)){
                                                echo "<option>$hasil[nama_golongan]</option>";
                                                }
                                                ?>
                                            
                                            </select>
                                            </div>
                                            </div>
                                                   
                                            
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group form-float">
                                                <label class="form-label">Jabatan</label>
                                                <select class="form-control show-tick" name="id_jabatan">
                                                <option> -- Pilih Jabatan -- </option>
                                                <?php 
                                                include 'koneksi/-koneksi.php';
                                                $jabatan = mysql_query("SELECT nama_jabatan FROM tb_jabatan");
                                                while($hasil = mysql_fetch_array($jabatan)){
                                                echo "<option>$hasil[nama_jabatan]</option>";
                                                }
                                                ?>
                                                </select>
                                                </div>
                                            </div>
                                            
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group form-float">
                                                    <label class="form-label">Status Kepegawaian</label>
                                                    <select name="id_status" class="form-control show-tick">
                                                        <option value=" "> -- Pilih Status -- </option>
                                                         <?php 
                                                include 'koneksi/-koneksi.php';
                                                $status = mysql_query("SELECT nama_status FROM tb_status");
                                                while($hasil = mysql_fetch_array($status)){
                                                echo "<option>$hasil[nama_status]</option>";
                                                }
                                                ?>
                                            
                                                    </select>
                                                    </div>
                                                </div> 

                                                   <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group form-float">
                                                    <label class="form-label">Lembaga Pengangkat</label>
                                                    <select name="id_pengangkat" class="form-control show-tick">
                                                        <option> -- Pilih Lembaga -- </option>
                                                         <?php 
                                                include 'koneksi/-koneksi.php';
                                                $lembaga = mysql_query("SELECT nama_lembaga FROM tb_lbg_pengangkat");
                                                while($hasil = mysql_fetch_array($lembaga)){
                                                echo "<option>$hasil[nama_lembaga]</option>";
                                                }
                                                ?>
                                            
                                                    </select>
                                                    </div>
                                                </div>
                                                  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group form-float">
                                                    <label class="form-label">Sumber Gaji</label>
                                                    <select name="id_sumbergaji" class="form-control show-tick">
                                                        <option> -- Pilih Sumber -- </option>
                                                         <?php 
                                                include 'koneksi/-koneksi.php';
                                                $sumber_gaji = mysql_query("SELECT sumber_gaji FROM tb_sumber_gaji");
                                                while($hasil = mysql_fetch_array($sumber_gaji)){
                                                echo "<option>$hasil[sumber_gaji]</option>";
                                                }
                                                ?>
                                            
                                                    </select>
                                                    </div>
                                                </div>
                                              


                                        </div><!--row clearfix-->
                                            </div><!--panel body-->
                                        </div><!--collapseTwo-->
                                        </div>
                                        <div class="panel panel-col-light-blue">
                                            <div class="panel-heading" role="tab" id="headingThree_19">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree_19" aria-expanded="false" aria-controls="collapseThree_19">
                                                        <i class="material-icons">school</i> RIWAYAT PENDIDIKAN
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_19">
                                                <br>                                  

                                                <div class="panel body">
                                                        <?php
                                    include 'koneksi/-koneksi.php';
                                    $kdpeg = @$_GET['kdpeg'];
                                    $sql1 = mysql_query("select * from tb_pendidikan where id_pend = '$kdpeg'") or die(mysql_error());
                                    $data = mysql_fetch_array($sql1);
                                    ?>
                                                   
                                                                                               
                                                    <div class="row clearfix">
                                                      
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                            <label class="form-label">Jenjang</label>
                                                            <select name="jenjang" class="form-control show-tick">
                                                            <option>-- Pilih Jenjang --</option> 
                                                <?php 
                                                include 'koneksi/-koneksi.php';
                                                $jenjang = mysql_query("SELECT nama_jenjang FROM tb_jenjang");
                                                while($hasil = mysql_fetch_array($jenjang)){
                                                echo "<option>$hasil[nama_jenjang]</option>";
                                                }
                                                ?>   
                                                            
                                                            </select>
                                                            </div>            
                                                        </div>
                                                   
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                            <div class="form-line">
                                                            <input type="text" name="satuan_pendidikan" class="form-control" value="<?php echo $data['satuan_pendidikan']; ?>">
                                                            <label class="form-label"> Satuan Pendidikan</label>
                                                            </div>
                                                            </div> 
                                                        </div>
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                            <div class="form-line">
                                                            <input type="text" name="tahun_masuk" class="form-control" value="<?php echo $data['tahun_masuk']; ?>">
                                                            <label class="form-label">Tahun Masuk</label>
                                                            </div>
                                                            </div> 
                                                        </div>
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                            <div class="form-line">
                                                            <input type="text" name="tahun_lulus" class="form-control" value="<?php echo $data['tahun_lulus']; ?>">
                                                            <label class="form-label"> Tahun Lulus</label>
                                                            </div>
                                                            </div> 
                                                        </div>

                                                    </div><!-- row clearfix-->
                                                    
                                                    
                                                </div><!-- body panel-->
                                               
                                            </div><!-- colapse Tree-->
                                        </div>
                                        <div class="panel panel-col-light-blue">
                                            <div class="panel-heading" role="tab" id="headingFour_19">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour_19" aria-expanded="false" aria-controls="collapseFour_19">
                                                        <i class="material-icons">book</i> DIKLAT
                                                    
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_19">
                                  
                                                <div class="panel body">
                                                    Pengalaman Diklat
                                                                     <?php
                                    include 'koneksi/-koneksi.php';
                                    $kdpeg = @$_GET['kdpeg'];
                                    $sql2 = mysql_query("select * from tb_diklat where id_diklat = '$kdpeg'") or die(mysql_error());
                                    $data = mysql_fetch_array($sql2);
                                    ?>

                                               
                                                        <div class="row clearfix">
                                                         
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <input type="text" name="jenis_diklat" class="form-control" value="<?php echo $data['jenis_diklat']; ?>">
                                                            <label class="form-label"> Jenis Diklat</label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <input type="text" name="nama_diklat" class="form-control" value="<?php echo $data['nama_diklat']; ?>">
                                                            <label class="form-label"> Nama Diklat</label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                             <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <input type="text" name="penyelenggara" class=" form-control" value="<?php echo $data['penyelenggara']; ?>">
                                                            <label class="form-label"> Penyelenggara</label>
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                            <div class="form-line">
                                                            <input type="text" name="tahun" class="form-control" value="<?php echo $data['tahun']; ?>">
                                                            <label class="form-label">Tahun</label>
                                                            </div>
                                                            </div> 
                                                        </div>
                                                             <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <input type="text" name="tingkat" class="form-control" value="<?php echo $data['tingkat']; ?>">
                                                            <label class="form-label"> Tingkat</label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                             <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group form-float">
                                                            <div class="form-line">
                                                            <input type="text" name="waktu" class="form-control" value="<?php echo $data['waktu']; ?>">
                                                            <label class="form-label"> Waktu</label>
                                                            </div>
                                                            </div>
                                                        </div>




                                                    </div><!-- Row Clearfix-->
                                                </div><!-- panel body-->
                                            </div><!-- CollapseFour-->

                                    </div>
                                </div>
                            </div>
        <p class="text-center">
        	<input type="submit" name="edit" value="Edit Data" class="btn btn-info">
         <!--<button type="submit" name="simpan" class="btn btn-info"> <i class="material-icons">save</i> SIMPAN DATA</button> -->
         <button type="reset" class="btn btn-danger"> <i class="material-icons">reply_all</i>Reset</button>
         <a href="javascript:history.back()" class="btn btn-warning pull-right"><i class="material-icons">fast_rewind</i> </a>       

        </p>
                             </form>
                        <!-- EDIT DATA-->
                        <?php 

                        include 'koneksi/-koneksi.php';
                        if (@$_POST['edit']) {
                        $no_urut = @$_POST['no_urut'];
                        @$nip =  mysql_real_escape_string ($_POST['nip']);
                        @$id_pangkat = mysql_real_escape_string($_POST['id_pangkat']);
                        @$id_jabatan = mysql_real_escape_string($_POST['id_jabatan']);
                        @$id_status = mysql_real_escape_string($_POST['id_status']);
                        @$id_pengangkat = mysql_real_escape_string($_POST['id_pengangkat']);
                        @$id_sumbergaji = mysql_real_escape_string($_POST['id_sumbergaji']);
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

                        $query= mysql_query("UPDATE tb_pegawai SET nip ='$nip',
                            id_pangkat='$id_pangkat',
                            id_jabatan='$id_jabatan',
                            id_status='$id_status',
                            id_pengangkat='$id_pengangkat',
                            id_sumbergaji='$id_sumbergaji',
                            nama_pegawai='$nama_pegawai',
                            tempat='$tempat',
                            tanggal_lahir='$tanggal_lahir',
                            jk='$jk',
                            agama='$agama',
                            status_kawin='$status_kawin',
                            ibu='$ibu',
                            alamat='$alamat',
                            email='$email',
                            hp='$hp',
                            no_sk='$no_sk',
                            tmt_pangkat='$tmt_pangkat' WHERE no_urut='$kdpeg' ");

                        $query1=mysql_query("UPDATE tb_pendidikan SET nip='$nip', jenjang ='$jenjang',
                            satuan_pendidikan='$satuan_pendidikan',
                            tahun_masuk='$tahun_masuk',
                            tahun_lulus='$tahun_lulus' WHERE id_pend='$kdpeg' ");

                        $query2= mysql_query( "UPDATE tb_diklat SET nip='$nip', jenis_diklat ='$jenis_diklat',
                            nama_diklat='$nama_diklat',
                            penyelenggara='$penyelenggara',
                            tahun='$tahun',
                            tingkat='$tingkat',
                            waktu='$waktu' WHERE id_diklat='$kdpeg' ");
?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=admin&action=pegawai";     
</script>
<?php 
}



?>

          


                        



                        </div>
                    </div>
                </div>
                  
            </div>
           
            
            <br><br><br>

            <!-- #END# Multiple Items To Be Open -->
        
   



<!-- #END DATA MASTER PEGAWAI BARU -->