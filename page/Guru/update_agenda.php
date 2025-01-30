<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Edit Agenda Staff</li>
</ol>

<!-- Inline Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT AGENDA STAFF
                            </h2>
                        </div>
                        <div class="body">
                        	<?php
						include 'koneksi/-koneksi.php';
						$kdgr = @$_GET['kdgr'];
						$sql = mysql_query("select * from tb_agenda where id_agenda = '$kdgr'") or die(mysql_error());
						$data = mysql_fetch_array($sql);

						?>
                            <form action="" method="post">
                                <div class="row clearfix">
                                       <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        
                                    <p>
                                        <b>Nama staff</b>
                                    </p>
                                    <select value="<?php echo $data['nm_guru']; ?> " class="form-control show-tick" name="nm_guru" data-live-search="true">
                                    <?php 
                                    include 'koneksi/-koneksi.php';
                                    $nama = mysql_query("SELECT nama FROM tb_guru");
                                    while($hasil = mysql_fetch_array($nama)){
                                    echo "<option name='nm_guru'>$hasil[nama]</option>";
                                    }
                                    ?>
                                    </select>                             
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        
                                    <p>
                                        <b>Tahun Pelaksanaan</b>
                                    </p>
                                    <select name="tp" class="form-control show-tick" data-live-search="true">
                                        <option name="tp" value="2014/2015">2014/2015</option>
                                        <option name="tp" value="2015/2016">2015/2016</option>
                                        <option name="tp" value="2016/2017">2016/2017</option>
                                        <option name="tp" value="2017/2018">2017/2018</option>
                                        <option name="tp" value="2018/2019">2018/2019</option>
                                        <option name="tp" value="2019/2020">2019/2020</option>
                                        <option name="tp" value="2020/2021">2020/2021</option>
                                        <option name="tp" value="2020/2021">2021/2022</option>
                                        <option name="tp" value="2020/2021">2022/2023</option>
                                        <option name="tp" value="2020/2021">2023/2024</option>


                                    </select>                              
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b>Nama Kegiatan</b>
                                    </p>
                                     <div class="form-group">
                                            <div class="form-line">
                                                <input name="nama kegiatan" type="text" class="form-control" placeholder="nama" value="<?php echo $data['materi']; ?> " >
                                            </div>
                                        </div>                             
                                    </div>
                                     <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b>tanggal mulai</b>
                                    </p>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tgl mulai" type="text" id="date" class="form-control" placeholder="tanggal mulai" value="<?php echo $data['tgl']; ?> ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tgl update" type="text" id="date" class="form-control" placeholder="tanggal update" value="<?php echo $data['tgl']; ?> ">
                                            </div>
                                        </div>
                                    </div>
                                      
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="materi" type="text" class="form-control" placeholder="Materi" value="<?php echo $data['materi']; ?> " >
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="absen" type="text" class="form-control" placeholder="Absen Siswa" value="<?php echo $data['absen']; ?> " >
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-14 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="ket" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $data['ket']; ?> " >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                        <input type="submit" name="edit" class="btn btn-success btn-lg m-l-15 waves-effect" value="EDIT">
                                    </div>
                                </div>
                            </form>
                                               <?php
include 'koneksi/-koneksi.php';
if (@$_POST['edit']) {
@$id_agenda = mysql_real_escape_string($_POST['id_agenda']);
@$nm_guru = mysql_real_escape_string($_POST['nm_guru']);
@$tp = mysql_real_escape_string($_POST['tp']);
@$mapel = mysql_real_escape_string($_POST['mapel']);
@$tgl = mysql_real_escape_string($_POST['tgl']);
@$kelas = mysql_real_escape_string($_POST['kelas']);
@$absen = mysql_real_escape_string($_POST['absen']);
@$ket = mysql_real_escape_string($_POST['ket']);


$update=mysql_query("UPDATE tb_agenda SET nm_guru='$nm_guru',tp='$tp',mapel='$mapel',tgl='$tgl',kelas='$kelas',absen='$absen',ket='$ket' WHERE id_agenda='$kdgr' ") or die(mysql_error());
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=guru&action=agenda";     
</script>
<?php 
}



?>

                        </div>

                    </div>
                </div>
            </div>
              <p class="text-left">
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a> </p>
            <!-- #END# Inline Layout -->