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
<li class="active"><i class="material-icons">description</i>Tambah Staff</li>
</ol>

<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAMBAH DATA STAFF
                            </h2>
                        </div>
                        <div class="body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2" style="color: black;">Nip</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nip" type="text" id="email_address_2" class="form-control" placeholder="Enter your nip">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2" style="color: black;">Nama Lengkap</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nama" type="text" id="password_2" class="form-control" placeholder="Enter your nama lengkap">
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
                                                    <input name="jk" value="Laki-laki" type="radio" id="radio_30" class="with-gap radio-col-light-blue"/>
                                                    <label for="radio_30">Laki-laki</label>
                                                    <input name="jk" value="Perempuan" type="radio" id="radio_31" class="with-gap radio-col-light-blue"/>
                                                    <label for="radio_31">Perempuan</label>
                                                </div>

                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2" style="color: black;"> Tempat Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tmp_lhr" type="text" id="password_2" class="form-control" placeholder="Enter your tempat lahir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2" style="color: black;"> Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tgl_lhr" type="date" id="date" class="form-control" placeholder="Enter your nama lengkap">
                                            </div>
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
                                        <label for="password_2"> Mata Pelajaran</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="mapel">
                                            <option> -- Pilih Mata Pelajaran -- </option>
                                            <?php 
                                            include 'koneksi/-koneksi.php';
                                            $mapel = mysql_query("SELECT nama FROM tb_mapel");
                                            while($hasil = mysql_fetch_array($mapel)){
                                            echo "<option>$hasil[nama]</option>";
                                            }
                                            ?>
                                            </select>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2" style="color: black;"> Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="alamat" type="text" class="form-control" placeholder="Enter your alamat">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2" style="color: black;"> Telepon</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="telepon" type="text" class="form-control" placeholder="Ex: 082214607669">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2"> Foto</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                                <input name="gambar" type="file" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>



                               
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="simpan" value="simpan" class="btn btn-primary m-t-15 waves-effect">
                                        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>Simpan Data
                                        </button>

                                        <button type="reset" name="batal" class="btn btn-danger m-t-15 waves-effect">
                                        <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span> Batal
                                        </button> 

                                    </div>
                                </div>
                            </form>
                        <?php 
                        include 'koneksi/+connection.php';
                        $nip     = @$_POST['nip'];
                        $nama    = @$_POST['nama'];
                        $jk      = @$_POST['jk'];
                        $tmp_lhr = @$_POST['tmp_lhr'];
                        $tgl_lhr = @$_POST['tgl_lhr'];
                        $jabatan = @$_POST['jabatan'];
                        $mapel   = @$_POST['mapel'];
                        $alamat  = @$_POST['alamat'];
                        $telepon = @$_POST['telepon'];
                        $sumber = @$_FILES['gambar']['tmp_name'];
                        $target = 'asset/images/Guru/';
                        $nama_gambar = @$_FILES['gambar']['name'];

                        $simpan_data = @$_POST['simpan'];
                        if ($simpan_data) {

                        if ($nip == "" || $nama == "" || $jk == "" || $tmp_lhr == "" || $tgl_lhr== "" || $jabatan== "" || $mapel== "" || $alamat== "" ||$telepon== "" ||$nama_gambar == ""){

                        ?><script type="text/javascript">swal("Oops...", "Inputan tidak boleh kosong !!:(", "error");</script><?php                   

                        } else{


                        $pindah = move_uploaded_file($sumber, $target.$nama_gambar);

                        if ($pindah) {
                        $sql=mysqli_query($connection,"insert into tb_guru values ('$nip','$nama','$jk','$tmp_lhr','$tgl_lhr','$jabatan','$mapel','$alamat','$telepon','$nama_gambar')") or die (mysql_error());

                        ?><script type="text/javascript">
                            swal(" Sukses !", "Data berhasil disimpan!", "success");</script><?php
                        } else{

                        ?><script type="text/javascript">
                        swal("Oops...", "gambar gagal disimpan  !!:(", "error");</script>         

                        <?php
                        }

                        }

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