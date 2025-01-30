<!-- start Input data -->
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="asset/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="asset/dist/sweetalert.css">
</head>
<body>
<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i> Edit Data User</li>
</ol>


<!-- FORM ELEMENT-->
<div class="form-element">
<div class="col-md-8 padding-0">
<div class="col-md-12">
<div class="col-md-12 panel">
<div class="col-md-12 panel-body">
<h3 style="color: black;" > Form Edit User</h3>
<div class="col-md-12">
	<br>
	<br>

<?php
include 'koneksi/-koneksi.php';
$kduser = @$_GET['kduser'];
$sql = mysql_query("select * from tb_user where kode_user = '$kduser'") or die(mysql_error());
$data = mysql_fetch_array($sql);

?>
<p class="text-right">       
<img src="asset/images/user/<?php echo $data ['img']; ?>" width='100' height='100' style='
border: 7px solid silver;
border-radius: 100%;' >
<b style="color: black; font-family: STXingkai; font-size: 18px;"><?php echo $data['nama']; ?></b>                       

</p>


<form method="post" action="" enctype="multipart/form-data">
<div class="col-md-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="kode_user" style="color: red;" class="form-control" value="<?php echo $data['kode_user']; ?>"/>
<label class="form-label" style="color: black;">Kode User</label>
</div>
</div>
</div>


<div class="col-md-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="nama" style="color: red;" class="form-control"  value="<?php echo $data['nama']; ?>" />
<label class="form-label" style="color: black;">Nama Lengkap </label>
</div>
</div>
</div>

<div class="col-md-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="username" style="color: red;" class="form-control"  value="<?php echo $data['username']; ?>" />
<label class="form-label" style="color: black;"> Username </label>
</div>
</div>
</div>

<div class="col-md-12">
<div class="form-group form-float">
<div class="form-line">
<input type="text" name="pass" style="color: red;" class="form-control"  value="<?php echo $data['pass']; ?>"/>
<label class="form-label" style="color: black;">Password </label>
</div>
</div>

<div class="col-md-3">
<div class="form-group form-animate-text" style="margin-top:5px !important;">
<label> Hak Akses</label>
</div>
</div>


<div class="col-sm-12">
<div class="form-group form-float">
<div class="demo-radio-button">
<input name="level" value="Administrator" type="radio" id="radio_30" class="with-gap radio-col-red"<?php if ($data['level'] == 'Administrator') {echo "checked";} ?>/>
<label for="radio_30">Administrator</label>
<input name="level" value="Pegawai" type="radio" id="radio_31" class="with-gap radio-col-red"<?php if ($data['level'] == 'Pegawai') {echo "checked";} ?>/>
<label for="radio_31">Pegawai</label>
<input name="level" value="Guru" type="radio" id="radio_32" class="with-gap radio-col-red" <?php if ($data['level'] == 'Pts_absensi') {echo "checked";} ?> />
<label for="radio_32">Staff</label>
</div>
</div>
</div>

<div class="col-md-12">
	<input type="submit" name="edit" class="btn btn-info waves-effect" value="Update" data-toggle="tooltip" data-placement="right" title="KLICK !! tombol untuk Edit Data User !!">
</div>
</form>
<?php
include 'koneksi/-koneksi.php';
if (@$_POST['edit']) {
@$nama = mysql_real_escape_string($_POST['nama']);
@$username = mysql_real_escape_string($_POST['username']);
@$pass = mysql_real_escape_string($_POST['pass']);
@$level = mysql_real_escape_string($_POST['level']);

mysql_query("update tb_user set nama='$nama', username='$username',pass='$pass',password =md5('$pass'), level='$level' where kode_user='$kduser' ") or die(mysql_error());
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=admin&action=tampil_user";     
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
