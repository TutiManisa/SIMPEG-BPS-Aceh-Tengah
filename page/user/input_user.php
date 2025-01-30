<!DOCTYPE html>
<html>
<head>
    <title></title>
    <<!-- SWEAT ALERT-->
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->
</head>
<body>


<ol class="breadcrumb breadcrumb-bg-light-blue">
<li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
<li class="active"><i class="material-icons">settings</i> Manage User</li>
</ol>
           
 
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
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="kode_user" class="form-control" value="<?php echo "$hasilkode";?>">
<label class="form-label">Kode</label>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="nama" class="form-control">
<label class="form-label">Nama Lengkap</label>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="username" class="form-control">
<label class="form-label">Username</label>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-float">
<div class="form-line">
<input type="password" name="password" class="form-control">
<label class="form-label">Password</label>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-float">
<div class="form-line">
<input type="password" name="pass" class="form-control">
<label class="form-label">Ulangi Password</label>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group form-float">
    Hak Akses
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
<div class="form-group form-float">
<label class="form-label"> Foto</label>
<input type="file" name="gambar" class="btn btn-default">
</div>
</div>
</div>

<input type="submit" name="simpan" class="btn btn-info" value="Simpan">
<input type="submit" name="reset" class="btn btn-danger" value="Batal">
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
                  
         swal("Oops...", "Inputan tidak boleh kosong !!:(", "error");
                   </script>
                   <?php
           
       } else{


        $pindah = move_uploaded_file($sumber, $target.$nama_gambar);

        if ($pindah) {
          mysql_query("insert into tb_user values ('$kode_user','$nama','$username','$password','$pass','$level','$nama_gambar')") or die (mysql_error());
           ?>

         <script type="text/javascript">
          swal(" Sukses !", "Data berhasil disimpan!", "success")
         
         window.location.href="?page=admin&action=tampil_user";     
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

            <!-- #END# Basic Examples -->
             <!-- SweetAlert Plugin Js -->
    <script src="asset/dist/sweetalert.min.js"></script>

</body>
</html>