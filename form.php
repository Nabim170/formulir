<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <style>
    body {
      background-image: url('ub.jpeg');
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    form {
      background-color: rgba(255, 265, 265, 0.8);
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
  <h1 class="text-center mt-4">FORM BIODATA</h1>
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
      </div>
      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Anda" required>
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
      </div>
      <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select id="gender" name="gender" class="form-select" required>
          <option value="">Pilih gender</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
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
  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses data formulir di sini
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $fakultas = htmlspecialchars($_POST['fakultas']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $gender = htmlspecialchars($_POST['gender']);
    $saran = htmlspecialchars($_POST['saran']);

    // Insert data ke database
    include 'proses.php';

    echo "<div class='container mt-3 alert alert-success'>Terima kasih, $nama. Data Anda telah terkirim.</div>";
  }
  // Validate form data
  if (empty($nama) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($email) || empty($asal_kota) || empty($fakultas) || empty($gender) || empty($kelas) || empty($saran)) {
    $error = 'Please fill in all fields';
} else {
    // Redirect to second page
    header('Location: hasil_form.php');
    exit;
}
  ?>
</body>

</html>
