<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- SWEAT ALERT-->
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->
</head>
<body>
<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Edit Staff</li>
</ol>

<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA STAFF
                            </h2>
                        </div>
                        <div class="body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="body">
						<?php
						include 'koneksi/-koneksi.php';
						$kdgr = @$_GET['kdgr'];
						$sql = mysql_query("select * from tb_guru where nip = '$kdgr'") or die(mysql_error());
						$data = mysql_fetch_array($sql);

						?>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nip</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                                <input name="nip" type="text" id="email_address_2" class="form-control" value="<?php echo $data['nip']; ?> ">
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Nama Lengkap</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nama" type="text" id="password_2" class="form-control" value="<?php echo $data['nama']; ?> ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Jenis Kelamin</label>  &nbsp;
                                    </div>
                                    <div class="col-lg-2 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-group form-float">
                                                <div class="demo-radio-button">
                                                    <input name="jk" value="Laki-laki" type="radio" id="radio_30" class="with-gap radio-col-light-blue" <?php if ($data['jk'] == 'Laki-laki') {echo "checked";} ?>/>
                                                    <label for="radio_30">Laki-laki</label>
                                                    <input name="jk" value="Perempuan" type="radio" id="radio_31" class="with-gap radio-col-light-blue" <?php if ($data['jk'] == 'Perempuan') {echo "checked";} ?>/>
                                                    <label for="radio_31">Perempuan</label>
                                                </div>

                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Tempat Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tmp_lhr" type="text" id="password_2" class="form-control" value="<?php echo $data['tmp_lhr']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tgl_lhr" type="date" id="date" class="form-control" value="<?php echo $data['tgl_lhr']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Agama</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
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
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Jabatan</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="jabatan">
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
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Status Perkawinan</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                          <select name="agama" class="form-control show-tick">
                                            <option> Pilih Status</option>
                                            <option name="Status" value="Menikah"> Menikah </option>
                                            <option name="Status" value="Belum Menikah"> Belum Menikah </option>
                                            </select>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="alamat" type="text" class="form-control" value="<?php echo $data['alamat']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Telepon</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="telepon" type="text" class="form-control" value="<?php echo $data['telepon']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="edit" value="Update Data" class="btn btn-success m-t-15 waves-effect">
                                        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>Update Data
                                        </button>

                                        <button type="reset" name="batal" class="btn btn-danger m-t-15 waves-effect">
                                        <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span> Batal
                                        </button> 

                                    </div>
                                </div>
                            </form>
                            <?php
include 'koneksi/-koneksi.php';
if (@$_POST['edit']) {
@$nip = mysql_real_escape_string($_POST['nip']);
@$nama = mysql_real_escape_string($_POST['nama']);
@$jk = mysql_real_escape_string($_POST['jk']);
@$tmp_lhr = mysql_real_escape_string($_POST['tmp_lhr']);
@$tgl_lhr = mysql_real_escape_string($_POST['tgl_lhr']);
@$agama = mysql_real_escape_string($_POST['agama']);
@$jabatan = mysql_real_escape_string($_POST['jabatan']);
@$mapel = mysql_real_escape_string($_POST['mapel']);
@$alamat = mysql_real_escape_string($_POST['alamat']);
@$telepon = mysql_real_escape_string($_POST['telepon']);
$update=mysql_query("UPDATE tb_guru SET nama='$nama', jk='$jk',tmp_lhr='$tmp_lhr',tgl_lhr='$tgl_lhr',agama='$agama', jabatan='$jabatan',mapel='$mapel',alamat='$alamat',telepon='$telepon' WHERE nip='$kdgr' ") or die(mysql_error());
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=guru";     
</script>
<?php 
}



?>
                        
                        </div>

                            </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
               <script src="asset/dist/sweetalert.min.js"></script>

</body>
</html>