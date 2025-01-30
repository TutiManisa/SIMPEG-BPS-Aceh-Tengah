
    <!-- SWEAT ALERT-->
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->



<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Data User</li>
</ol>




<!-- Basic Examples -->
<div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">

           <h2><i class="material-icons">person</i> DAFTAR DATA USER</h2>
           <!-- Large Size -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-red">
                            <h4 class="modal-title" id="largeModalLabel"><i class="material-icons">queue</i> Tambah Data User</h4>
                        </div>
                        <div class="modal-body">
                           <div class="row clearfix">
<?php 
include'koneksi/-koneksi.php';
$carikode = mysql_query("select max(kode_user) from tb_user") or die(mysql_error());
$datakode = mysql_fetch_array($carikode);
if ($datakode) {
$nilaikode = substr($datakode[0], 1);
$kode = (int) $nilaikode;
$kode = $kode + 1;
$hasilkode= "U" .str_pad($kode, 3, "0", STR_PAD_LEFT);
} else{
$hasilkode = "U001";
}
?>
<form action="" method="post" enctype="multipart/form-data">
<div class="col-sm-12">
<div class="input-group">
<div class="form-line">
<input type="text" name="kode_user" class="form-control" value="<?php echo "$hasilkode";?>">

</div>
</div>
</div>
<div class="col-sm-12">
<div class="input-group">
<span class="input-group-addon">
<i class="material-icons">account_circle</i>
</span>
<div class="form-line">
<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
</div>
</div>
</div>
<div class="col-sm-12">
<div class="input-group">
  <span class="input-group-addon">
<i class="material-icons">person</i>
</span>
<div class="form-line">
<input type="text" name="username" class="form-control" placeholder="Username">
</div>
</div>
</div>
<div class="col-sm-12">
<div class="input-group">
  <span class="input-group-addon">
<i class="material-icons">lock_open</i>
</span>
<div class="form-line">
<input type="password" name="password" class="form-control" placeholder="Pasword">
</div>
</div>
</div>
<div class="col-sm-12">
<div class="input-group">
  <span class="input-group-addon">
<i class="material-icons">lock_open</i>
</span>
<div class="form-line">
<input type="password" name="pass" class="form-control" placeholder="Ulangi Password">
</div>
</div>
</div>
<div class="col-sm-12">
  <b>Hak Akses</b>
<div class="form-group form-float">
    
<div class="demo-radio-button">
<input name="level" value="Administrator" type="radio" id="radio_30" class="with-gap radio-col-light-blue"/>
<label for="radio_30">Administrator</label>
<input name="level" value="Pegawai" type="radio" id="radio_31" class="with-gap radio-col-light-blue"/>
<label for="radio_31">Pegawai</label>
<input name="level" value="Guru" type="radio" id="radio_32" class="with-gap radio-col-light-blue" />
<label for="radio_32">Staff</label>
</div>
</div>
</div>
<div class="col-sm-12">
  <b>Foto</b>
<div class="form-group form-float">
<div class="form-line">
<input type="file" name="gambar"> <code>Nama File Gambar, Harus Sama dengan Username (Contoh : admin.jpg)</code>
</div>
</div>
</div>
</div>


                        </div>
                       <div class="modal-footer bg-red">
                        <input type="submit" name="simpan" class="btn bg-blue waves-effect" value="SIMPAN">
                            <button type="button" class="btn bg-white waves-effect" data-dismiss="modal" style="color: black;">KELUAR</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
<?php
$kode_user = @$_POST['kode_user'];
$nama = @$_POST['nama'];
$username = @$_POST['username'];
$password=md5(@$_POST['password']);
$pass = @$_POST['pass'];
$level = @$_POST['level'];


$sumber = @$_FILES['gambar']['tmp_name'];
$target = 'asset/images/user/';
$nama_gambar = @$_FILES['gambar']['name'];


$simpan_data = @$_POST['simpan']; 

if ($simpan_data) {

if ($kode_user == "" || $nama == "" || $username == "" || $password == "" || $pass == "" || $level== "" || $nama_gambar == ""){
?>

<script type="text/javascript">

swal("Gagal Menyimpan...", "Inputan harus diisi, silahkan Lengkapi lagi !!:(", "error");
</script>
<?php

} else{


$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if ($pindah) {
mysql_query("insert into tb_user values ('$kode_user','$nama','$username','$password','$pass','$level','$nama_gambar')") or die (mysql_error());
?>

<script type="text/javascript">
swal(" Sukses !", "Data berhasil disimpan!", "success");     
</script>
<?php

} else{


?>
<script type="text/javascript">

swal("Oops...", "gambar gagal disimpan  !!:(", "error");
</script>         

<?php
}

}

}


?>



          </div>
            <div class="body">
            <div class="row clearfix">
            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
             <div class="table table-responsive">                            
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Password</th>                                        
                                        <th>Level</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                       <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Password</th>                                       
                                        <th>Level</th>
                                         <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                include 'koneksi/-koneksi.php';
                                $sql = mysql_query("select * from tb_user") or die (mysql_error());
                                $no=1;
                                while ($data = mysql_fetch_array($sql)){
                                ?> 
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['pass']; ?></td>
                                        <td><?php echo $data['level']; ?></td>
                                         <td>
                            <img src="asset/images/user/<?php echo $data ['img']; ?>" width='40' height='40' alt='user' style='background-color: dodgerblue;
                            border: 3px;
                            border-radius: 100%;' >
                                        </td>
                                        <td>
                                            <a href="?page=admin&action=edit_user&kduser=<?php echo $data['kode_user']; ?>"><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="left" title=" Edit Data <?php echo $data['nama'];?>">
                                    <i class="material-icons">mode_edit</i>
                                </button></a>
                                 <a onclick="return confirm('Yakin ingin hapus data ini ??')" href="?page=admin&action=hapus_user&kduser=<?php echo $data['kode_user']; ?>"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light"  data-toggle="tooltip" data-placement="top" title=" Hapus Data <?php echo $data['nama'];?>">
                                    <i class="material-icons">close</i>
                                </button></a>
                                        </td>
                                    </tr>

                                        <?php
                                        $no++;
                                        };
                                        ?>
                                   
                                    
                                </tbody>
                            </table>

                        </div>
                          <p class="text-right">
<a href="" data-toggle="modal" data-target="#largeModal" >
<button type="button" class="btn btn-success btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="left" title=" Tambah Data">
<i class="material-icons">add</i>
</button></a> </p>
                    
         


            </div>
          </div>
        </div>


        </div>
      </div>
</div>
 <!-- #END# Basic Examples -->
             <!-- SweetAlert Plugin Js -->
    <script src="asset/dist/sweetalert.min.js"></script>
