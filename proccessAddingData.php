<?php

include("config.php");
date_default_timezone_set("Asia/Jakarta");
$TIME = date("h:i:s");
$DATE = date("y-m-d");
$DATA = $DATE.' '.$TIME;

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['add'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $nobp = $_POST['nobp'];
    $jurusan = $_POST['jurusan'];


    // buat query
    $sql = "INSERT INTO tampar13 (nama, nobp, jurusan, datetime) VALUE ('$nama', '$nobp', '$jurusan','$DATA')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php');
    }


} else {
    die("Akses dilarang...");
}

?>