<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	// $nama_database = "tampar6";
	$nama_database = "workshop-forstif";

	$db = mysqli_connect($server, $user, $password, $nama_database);

	if( $db ){
		// echo "tampil";
	}
    // if( !$db ){
	// 	die("Gagal terhubung ke database: " . mysqli_connect_error());
	// }
?>