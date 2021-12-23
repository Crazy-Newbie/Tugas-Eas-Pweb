<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['add'])){

    // ambil data dari formulir
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $date_birth = $_POST['date_birth'];
    $nis = $_POST['nis'];

    // buat query
    $sql = "INSERT INTO siswa (nis, name, gender, date_birth, address) VALUE ('$nis', '$name', '$gender', '$date_birth', '$address')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {

        header('Location: student-management.php?status=sukses');
    } else {
        
        header('Location: student-management.php?status=gagal');
    }


} else {
    die("Access Denied...");
}

?>