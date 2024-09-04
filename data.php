<?php 
 session_start();
 include 'db.php';
 if ($_SESSION['status_login'] != true){
  echo '<script>window.location = "login.php"</script>';
 }
 $query = mysqli_query($conn, "SELECT * FROM tb_form");
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
      background-size: Bottom;
      font-family: Arial, sans-serif;
    }

    table {
      background-color: rgba(256, 256, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
    }
  </style>
</head>
<body>

	<!----content---->
    <h1 class="text-center mt-4">DATA BIODATA</h1>
    <div class="container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Fakultas</th>
              <th scope="col">Program Studi</th>
              <th scope="col">Kelas</th>
              <th scope="col">Gender</th>
              <th scope="col">Saran/Pesan</th>
            </tr>
          </thead>
          <tbody>
            <?php while($d = mysqli_fetch_object($query)){ ?>
            <tr>
              <td><?php echo $d->nim; ?></td>
              <td><?php echo $d->nama; ?></td>
              <td><?php echo $d->fakultas; ?></td>
              <td><?php echo $d->prodi; ?></td>
              <td><?php echo $d->kelas; ?></td>
              <td><?php echo $d->gender; ?></td>
              <td><?php echo $d->saran; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>

</body>
</html>
