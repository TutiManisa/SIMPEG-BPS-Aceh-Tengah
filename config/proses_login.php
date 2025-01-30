
<?php

$error=''; 

include "koneksi/-koneksi.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];	
	$password	=  md5($_POST['password']);
	$level		= $_POST['level'];
					
	$query = mysql_query("SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
	if(mysql_num_rows($query) == 0)
	{
$error = "<center>
<p style='color:white;font-family:Calibri;'><strong style='color:orangered;'>Perhatian !</strong> Useraname / Password Anda Salah, Cek kembali !! // Hubungi Administrator SIMPEG BPS Aceh Tengah !!.</p></center>";
	}
	else
	{
		$row = mysql_fetch_assoc($query);
		$_SESSION['img']=$row['img'];
		$_SESSION['username']=$row['username'];
		$_SESSION['nama']=$row['nama'];
		$_SESSION['level'] = $row['level'];
		
		if($row['level'] == "Administrator" && $level=="1")		
		{
		?>
			<script type="text/javascript">
			window.location.href="administrator.php";       
			</script>
   
		</script>
		<?php
		}
		else if($row['level'] =="Pegawai" && $level=="2")
		{
			header("Location: Pegawai.php");
		}
		else if($row['level'] == "Staff" && $level=="3")
		{
			
			header("Location: Guru.php");
		}
		else
		{
			$error = "Failed Login";
		}
	}
}

			
?>