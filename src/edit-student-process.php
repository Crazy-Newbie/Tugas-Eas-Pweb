<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $date_birth = $_POST['date_birth'];
    $nis = $_POST['nis'];

    // buat query update
    $sql = "UPDATE siswa SET nis='$nis', name='$name', gender='$gender', date_birth='$date_birth', address='$address' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: student-management.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>