<!--<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="?page="><i class="material-icons">dashboard</i> Dashboard</a></li>
</ol>-->

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<h2>
<h3 style="color: black;"><i class="material-icons">dashboard</i> Halaman Administrator</h3>
<small>
<b> Assalamu'alaikum</></b>
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
$gr =mysql_num_rows(mysql_query("SELECT * FROM tb_guru"));
$nilai =mysql_num_rows(mysql_query("SELECT * FROM tb_nilai"));
$agenda =mysql_num_rows(mysql_query("SELECT * FROM tb_agenda"));
$user =mysql_num_rows(mysql_query("SELECT * FROM tb_user"));
$lap =mysql_num_rows(mysql_query("SELECT * FROM tb_pegawai,tb_guru,tb_nilai,tb_agenda"));
?>


<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card bg-blue">
		<div class="info-box-2 bg-blue hover-zoom-effect">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #033;
padding: 8px;
border: 1px;">people</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi;">Jumlah Pegawai</div>
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
			<i class="material-icons" style=" font-size: 80px;
color: #033;
padding: 8px;
border: 1px;">person</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi;">Jumlah Staff</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai;"><?php echo "".$gr." ";?></div>
				</div>
		</div>
		 &nbsp;&nbsp; &nbsp; <a style="color: white;" href="?page=guru" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: #033;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card bg-purple">
		<div class="info-box-2 bg-purple hover-zoom-effect">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #033;
padding: 8px;
border: 1px;">note</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi;">Jumlah Agenda</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai;"><?php echo "".$agenda." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=guru&action=agenda" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: #033;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card bg-deep-orange">
		<div class="info-box-2 bg-deep-orange hover-zoom-effect">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #033;
padding: 8px;
border: 1px;">print</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi;">Jumlah Laporan</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai;"><?php echo "".$lap." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=admin&action=pegawai" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: #033;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card bg-cyan">
		<div class="info-box-2 bg-cyan hover-zoom-effect">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #033;
padding: 8px;
border: 1px;">mood</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi;">Jumlah User</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai;"><?php echo "".$user." ";?></div> 
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=admin&action=tampil_user" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: #033;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>

<!-- batas-->
<!--<center>
	<h3 style="color: black;">SISTEM INFORMASI KEPEGAWAIAN</h3>
	<h4 style="color: black;">SMK ELEKTRONIKA INDONESIA BUKITTINGGI</h4>
</center>-->

</div>
</div>
