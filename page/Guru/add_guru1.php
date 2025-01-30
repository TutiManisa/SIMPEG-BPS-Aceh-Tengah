<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- SWEAT ALERT-->
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->
<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Tambah Staff</li>
</ol>

<!-- Inline Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT DATA STAFF
                            </h2>
                        </div>
                        <div class="body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <i class="material-icons">label_outline</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="nip" type="text" class="form-control" placeholder="Nip">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <i class="material-icons">contacts</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="nama" type="text" class="form-control" placeholder="Nama" style="color: black;">
                                            </div>
                                        </div>
                                    </div>
                          

                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <i class="material-icons">streetview</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="tmp_lhr" type="text" class="form-control" placeholder="Tempat Lahir">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <i class="material-icons">access_time</i>
                                            </span>
                                            <div class="form-line">
                                                <input id="date" name="tgl_lhr" type="text" class="form-control" placeholder="Tanggal Lahir">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                        	<label>Jenis Kelamin</label>
                                           <div class="demo-radio-button">
                                                    <input name="jk" value="Laki-laki" type="radio" id="radio_30" class="with-gap radio-col-light-blue"/>
                                                    <label for="radio_30">Laki-laki</label>
                                                    <input name="jk" value="Perempuan" type="radio" id="radio_31" class="with-gap radio-col-light-blue"/>
                                                    <label for="radio_31">Perempuan</label>
                                                </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                        	<label>Agama</label>
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                        	<label>Jabatan</label>
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                        	<label>Status Perkawinan</label>
                                            <select name="SP" class="form-control show-tick">
                                            <option> Pilih Status</option>
                                            <option name="menikah" value="Menikah"> menikah</option>
                                            <option name="belum menikah" value="Belum Menikah"> belum menikah </optio>
                                            </select>
                                        </div>
                                    </div>
                                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            <i class="material-icons">add_location</i>
                                            </span>

                                            <div class="form-line">
                                                <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="telepon" type="text" class="form-control" placeholder="Telepon">
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            </span>
                                            <h4><span class="label label-info">Data Diklat</span></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="telepon" type="text" class="form-control" placeholder="Jenis Dikalat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="telepon" type="text" class="form-control" placeholder="Nama Dikalat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="telepon" type="text" class="form-control" placeholder="Penyelenggara">
                                            </div>
                                        </div>
                                    </div>
                
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                             <?php
                                                $now=date('Y');
                                                echo "<select name='tahun_masuk' data-live-search='true'>";
                                                for ($a=1989;$a<=$now;$a++)
                                                {
                                                echo "<option name='tahun_masuk' value='$a'>$a</option>";
                                                }
                                                echo "</select>";
                                            ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="telepon" type="text" class="form-control" placeholder="Tingkat">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            <i class="material-icons">call</i>
                                            </span>
                                            <div class="form-line">
                                                <input name="telepon" type="text" class="form-control" placeholder="Waktu">
                                            </div>
                                        </div>
                                    </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-group">
                                             <span class="input-group-addon">
                                            </span>
                                            <h4><span class="label label-info">Karya Tulis</span></h4>
                                        </div>
                                    </div> -->

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input  name="gambar" type="file">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <button type="submit" name="simpan" value="simpan" class="btn btn-info"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
         <!--<button type="submit" name="simpan" class="btn btn-info"> <i class="material-icons">save</i> SIMPAN DATA</button> -->
         <button type="reset" class="btn btn-danger"> <i class="material-icons">reply_all</i>Reset</button> 
                                    </div>
                                </div>
                            </form>
                                <?php 
                        include 'koneksi/-koneksi.php';
                        $nip     = @$_POST['nip'];
                        $nama    = @$_POST['nama'];
                        $jk      = @$_POST['jk'];
                        $tmp_lhr = @$_POST['tmp_lhr'];
                        $tgl_lhr = @$_POST['tgl_lhr'];
                        $agama = @$_POST['agama'];
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
                        $sql=mysql_query("insert into tb_guru values ('$nip','$nama','$jk','$tmp_lhr','$tgl_lhr','$agama' ,'$jabatan','$mapel','$alamat','$telepon','$nama_gambar')") or die (mysql_error());

                        ?><script type="text/javascript">
                            swal(" Sukses !", "Data berhasil disimpan!", "success");

                            </script><?php
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
              <p class="text-right">
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a> </p>
            <!-- #END# Inline Layout -->
                     <!-- #END# Horizontal Layout -->
               <script src="asset/dist/sweetalert.min.js"></script>

</body>
</html>