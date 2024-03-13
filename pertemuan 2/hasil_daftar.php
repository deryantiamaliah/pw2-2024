<?php

    // Task 2: Tangkap dan tampilkan data dari form_daftar.
         $nama_lengkap = $_POST["nama_lengkap"];
         $email = $_POST["email"];
         $alamat = $_POST["alamat"];
         $telepon = $_POST["telepon"];
    // Berikan error handling
    
    // Periksa apakah formulir telah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi dan bersihkan data input
        $nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $alamat = htmlspecialchars($_POST["alamat"]);
        $telepon = htmlspecialchars($_POST["telepon"]);
    
        // Validasi Email
        if (!$email) {
            echo "<script>alert('Email tidak valid');</script>";
        } else {
            // Tampilkan data yang dikirimkan di dalam tabel
            echo "
            <tr>
                <td></td>
                <td>$nama_lengkap</td>
                <td>$email</td>
                <td>$alamat</td>
                <td>$telepon</td>
            </tr>";
        }
    }
    ?>
