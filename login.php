<?php
session_start();
if(@$_SESSION){
  if(@$_SESSION['level']=="Administrator")
  {
   header("Location: administrator.php");
  }
  if(@$_SESSION['level']=="Pegawai")
  {
    header("Location: pegawai.php");
  }
  if(@$_SESSION['level']=="Guru")
  {
    header("Location: Guru.php");
  }
}

include('config/proses_login.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SIMPEG BPS ACEH TENGAH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Student Signin Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link rel="icon" href="st 1.jpeg" type="image/x-icon" />
<!-- Custom Theme files -->
<link href="login_st/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="login_st/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Tenali+Ramakrishna&amp;subset=telugu" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<!-- main -->
<h1>SIMPEG BPS ACEH TENGAH</h1>
<div class="main-agileinfo">
	<div class="contact-w3left">  
	</div>
	<div class="videologin">
		<h2 class="sub-head">Login User</h2>
		<form action="#" method="post">
			<div class="icon1">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Username" name="username" required=""/>
			</div>
			<div class="icon1">
				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				<input type="password" placeholder="Password" name="password" required=""/>
			</div>
			
			
				<!--<label class="anim">
				<span> Hak Akses </span> 
			</label> -->
				<select name="level" class="icon1" style="width:100%; height: 40px; font-family: FZShuTi;color: white; background-color: black; 
				
				 border-top: : 1px solid orangered; 
				  border-bottom: : 1px solid orangered; 
					border-radius: 50px 50px 50px 50px;	-webkit-border-radius: 50px 50px 50px 50px;
					-moz-border-radius: 50px 50px 50px 50px;padding: 0px 8px 3px 8px;box-shadow: -0px -1px 2px #F1F1F1;	-moz-box-shadow:-0px -1px 2px #F1F1F1;-webkit-box-shadow:-0px -1px 2px #F1F1F1;font-weight: normal;	font-size: 1em; ">
				<option>--Hak Akses--</option>
				<option value="1">Administrator</option>
				<option value="2">Pegawai</option>
				<option value="3">Staff</option>
				</select>
		
			<div class="clear"></div>
			<?php echo $error; ?>
			<div class="bottom">
				<input name="submit" type="submit" value="Login" />
			</div>
			<div class="header-left-top">
				<div class="sign-up"> 
					<h5>Y</h5> 
				</div>				
				<div class="social-wthree-icons bnragile-icons">
					<ul>
						
						<li><a href="index.php" class="fa fa-home icon icon-border dribbble"></a></li>
						<li><a href="index.php" class="fa fa-home icon icon-border dribbble"> </a></li> 
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
		</form>	
	</div>	
	<div class="clear"></div>
</div>	
<!-- //main -->
<!-- copyright -->
<div class="copyw3-agile">
	<p style="font-family: arial; font-size: 12px;"> SIMPEG BPS |Tuti Manisa |210401012 </a></p>
</div>
<!-- //copyright -->

</body>
</html>