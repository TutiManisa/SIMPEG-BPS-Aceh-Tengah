<!--<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="?page="><i class="material-icons">dashboard</i> Dashboard // <b><?php echo $_SESSION['level']; ?> </b></a></li>
</ol>-->
<div class="alert bg-red alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h5 style="font-family:FZShuTi "><b>Selamat Datang !! </b> <?php echo $_SESSION['nama']; ?></h5>
</div>
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<h2>
<h3 style="color: black;"><i class="material-icons">dashboard</i> Halaman Pegawai</h3>

<small>
<b>Hai..</></b>
 <code><?php echo "  <b style='font-family:FZShuTi; font-size:16px;'>". $_SESSION['nama']."</b></code> <b> Anda login sebagai</b> <code><b style='font-family:FZShuTi; font-size:16px;'>". $_SESSION['level']."</b></code>"; ?>
</small>
</h2>

</div>
<!-- kotak dasboard-->
<div class="body">
    <!-- Widgets -->
<div class="row clearfix">

            	<?php
include 'koneksi/-koneksi.php';
$peg =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai"));
$gr =mysql_num_rows(mysql_query("SELECT * FROM tb_pendidikan"));
$nilai =mysql_num_rows(mysql_query("SELECT * FROM tb_diklat"));
$agenda =mysql_num_rows(mysql_query("SELECT * FROM tb_agenda"));
$user =mysql_num_rows(mysql_query("SELECT * FROM tb_user"));
$lap =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai,tb_guru,tb_nilai,tb_agenda"));
?>



<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
	<div class="card bg-blue" >
		<div class="info-box-2 bg-blue hover-zoom-effect">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #033;
padding: 8px;
border: 1px;">people</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi;"> <b>Pegawai</b></div>
					<div class="number" style="font-size: 30px; font-family: STXingkai;"><?php echo "".$peg." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=admin&action=pegawai" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: #033;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card bg-pink">
		<div class="info-box-2 bg-pink hover-zoom-effect">
			<div class="icon">
			<i class="material-icons"  style=" font-size: 80px;
color: #033;
padding: 8px;
border: 1px;">person</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi;"> <b>Pendidikan</b></div>
					<div class="number" style="font-size: 30px; font-family: STXingkai;"><?php echo "".$gr." ";?></div>
				</div>
		</div>
		 &nbsp;&nbsp; &nbsp; <a style="color: white;" href="?page=admin&action=ppdk" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: #033;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card bg-deep-purple">
		<div class="info-box-2 bg-deep-purple hover-zoom-effect">
			<div class="icon">
			<i class="material-icons"  style=" font-size: 80px;
color: #033;
padding: 8px;
border: 1px;">star</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi;"> <b>Diklat</b></div>
					<div class="number" style="font-size: 30px; font-family: STXingkai;"><?php echo "".$nilai." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=admin&action=diklat" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: #033;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<!-- batas-->
<!--<img src="asset/images/bg.jpg" class="img-thumbnail" style="height: 300px; width: 100%;">-->
<center>
	<h3 style="color: black;">SISTEM INFORMASI KEPEGAWAIAN</h3>
	<h4 style="color: black;">SMK ELEKTRONIKA INDONESIA BUKITTINGGI</h4>
</center>


</div>
</div>
