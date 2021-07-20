<?php 

include 'config/config.php';

if(isset($_POST['masuk'])){
	$email=$_POST['email'];
	$password=$_POST['password'];


	if(ceklogin($email,$password)){
		echo "<script>window.location.href='user.php'</script>";
	}else{
		echo "<script>alert('username atau password yang anda masukan salah')</script>";
		echo "<script>window.location.href='login.php'</script>";

	}
}


 ?>