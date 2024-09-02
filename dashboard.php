<?php 
 session_start();
 include 'db.php';
 if ($_SESSION['status_login'] != true){
 	echo '<script>window.location = "login.php"</script>';
 }
 $query = mysqli_query($conn, "SELECT * FROM tb_data  WHERE id='".$_SESSION['id']."'");
 $d = mysqli_fetch_object($query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biodata</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-image: url('ub.jpeg');
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    form {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
    }
    .btn-submit {
      background-color: red;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 6px 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>

	<!----content---->
    <h1 class="text-center mt-4">FORM BIODATA</h1>
    <div class="container">
            <form action="" method="post">
            <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Anda" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Masukkan fakultas Anda" required>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan program studi Anda" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan kelas Anda" required>
            <div class="mb-3">
            <br>
            <label for="gender" class="form-label">Gender</label>
            <br>
            <select class="input-control" name="gender">
                <option value="">--pilih--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>
            <br>
            <div class="mb-3">
                 <label for="saran" class="form-label">Saran/Pesan:</label>
            <textarea id="saran" name="saran" class="form-control" placeholder="Silakan tuliskan pesan Anda" rows="4"></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="konfirmasi" required>
                <label class="form-check-label" for="konfirmasi">Semua data yang saya input sudah benar</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
					
			</form>
				<?php 
					if(isset($_POST['submit'])){
						$nim = ucwords($_POST['nim']);
						$nama = ucwords($_POST['nama']);
						$fakultas = ucwords($_POST['fakultas']);
						$prodi = ucwords($_POST['prodi']);
                        $kelas = ucwords($_POST['kelas']);
						$gender = ucwords ($_POST['gender']);
                        $saran = ucwords($_POST['saran']);
					

						$insert = mysqli_query($conn, "INSERT INTO tb_form VALUE(
							'".$nim."','".$nama."','".$fakultas."','".$prodi."','".$kelas."','".$gender."','".$saran."')");

						if ($insert){
							echo '<script>alert("Tambah data berhasil")</script>';
							echo '<script>window.location="data.php"</script>';
						}else{
							echo 'gagal' .mysqli_error($conn);
						}

					}

				 ?>
				
			</div>

		</div>
	</div>
                </div>

</body>
</html>