<?php
$koneksi = mysqli_connect("localhost","root","","formulir");

$Nama= $_POST['Nama'];
$Nim = $_POST['Nim'];
$Fakultas = $_POST['Fakultas'];
$Prodi = $_POST['Prodi'];
$Kelas = $_POST['Kelas'];
$Gender = $_POST['Gender'];
$Saran = $_POST['Saran'];
$submit= $_POST['submit'];

$query="INSERT INTO formulir VALUES('$Nama','$Nim','$Fakultas','$Prodi','$Kelas','$Gender','$Saran','$submit')";

mysqli_query($koneksi, $query);
?>

