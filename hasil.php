<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
    <style>
        /* Gaya CSS seperti sebelumnya */
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi data (contoh: memastikan semua field terisi)
        if (empty($_POST["nama"]) || empty($_POST["tempat"]) || /* ... */) {
            echo "<p style='color: red;'>Semua field harus diisi.</p>";
        } else {
            // Tampilkan data yang dikirim
            echo "<h2>Data yang Anda kirim:</h2>";
            echo "<p>Nama: " . $_POST["nama"] . "</p>";
            echo "<p>Tempat Lahir: " . $_POST["tempat"] . "</p>";
            // ... dan seterusnya untuk semua data lainnya

            // Simpan data ke database atau lakukan tindakan lain
            // ...

            // Kirim email konfirmasi
            // ...
        }
    } else {
        // Tampilkan formulir jika belum dikirim
        // ... (kode formulir seperti yang sebelumnya)
    }
    ?>
</body>
</html>