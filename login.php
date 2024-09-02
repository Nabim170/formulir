<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="bg-login">
	<div class="box-login">
		<h2>Login</h2>
		<form action="" method="POST">
			<input type="text" name="username" placeholder="Username" class="input-control">
			<input type="password" name="password" placeholder="Password" class="input-control">
			<input type="submit" name="submit" placeholder="Login" class="btn">

		</form>
		<?php 
			if (isset($_POST['submit'])){
				session_start();
				include 'db.php';

				 $user = $_POST['username'];
				 $pass = $_POST['password'];

				 $cek = mysqli_query($conn, "SELECT * FROM tb_data WHERE username = '".$user."' AND password = '".$pass."'");
				 if (mysqli_num_rows($cek) > 0){

				 	$d = mysqli_fetch_object($cek);
				 	$_SESSION['status_login'] = true;
				 	$_SESSION['a_global'] = $d;
				 	$_SESSION['id'] = $d->id;

				 	echo '<script>window.location="dashboard.php"</script>';

				 }else{
				 	echo '<script>alert("Username atau password Anda salah!")</script>';
				 }
			}

		 ?>

	</div>

</body>
</html>