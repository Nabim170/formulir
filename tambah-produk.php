<?php 
 session_start();
 include 'db.php';
 if ($_SESSION['status_login'] != true){
 	echo '<script>window.location = "login.php"</script>';
 }
 $query = mysqli_query($conn, "SELECT * FROM tb_admin  WHERE admin_id='".$_SESSION['id']."'");
 $d = mysqli_fetch_object($query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bukatoko</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!----header--->
	<header>
		<div class="header">
		<div class="container">
		<h1><a href="dashboard.php">Bukatoko</a></h1>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="profil.php">Profil</a></li>
			<li><a href="data-kategori.php">Data Kategori</a></li>
			<li><a href="data-produk.php">Data Produk</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
		</div>
	</div>

	</header>




	<!----content---->
	<div class="section">
		<div class="container">
			<h3>Tambah Data Produk</h3>
			<div class="box">
				<form action="" method="post">
				<select class="input-control" name="kategori" required>
					<option value="">--pilih kategori--</option>
					<?php 
						$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
						while ($r = mysqli_fetch_array($kategori)) {
							
					 ?>
					 <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_nama'] ?></option>
					<?php } ?>
				</select>
				
				<input type="text" name="nama" placeholder="Nama Produk" class="input-control"required>
				<input type="text" name="harga" placeholder="Harga Produk" class="input-control"required>
				<input type="text" name="deskripsi" placeholder="Deskripsi Produk" class="input-control"required>
				<input type="file" name="gambar" placeholder="Pilih gambar" class="input-control"required accept="image/png, image/jpeg, image/jpg">
				<select class="input-control" name="status">
					<option value="">--pilih--</option>
					<option value="Aktif">Aktif</option>
					<option value="Tidak aktif">Tidak aktif</option>
					


				</select>
				<input type="submit" name="submit" value="Submit" class="btn-2">	

				</form>
				<?php 
					if(isset($_POST['submit'])){
						$kategori = ucwords($_POST['kategori']);
						$nama = ucwords($_POST['nama']);
						$harga = ucwords($_POST['harga']);
						$gambar = $_POST['gambar'];
						$deskripsi = ucwords($_POST['deskripsi']);
						$status= ucwords($_POST['status']);


						$insert = mysqli_query($conn, "INSERT INTO tb_product VALUE(
							null,
							'".$kategori."','".$nama."',$harga,'".$deskripsi."','".$gambar."','".$status."', date ('y-m-d h:i:s'))");

						if ($insert){
							echo '<script>alert("Tambah produk berhasil")</script>';
							echo '<script>window.location="data-produk.php"</script>';
						}else{
							echo 'gagal' .mysqli_error($conn);
						}


					}

				 ?>
				
			</div>

		</div>
	</div>



	<!---footer---->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Bukatoko.</small>
			
		</div>

	</footer>
</body>
</html>