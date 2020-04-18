<?php 

include '../koneksi.php';

$id = $_GET["id_anggota"];

	$query = "DELETE FROM anggota WHERE id_anggota ='$id'";
	$anggota = mysqli_query($connect, $query);

	// Periksa query, apakah ada kesalahan
	if (! $anggota) {
		die ("Gagal menghapus data: " . mysqli_errno($connect).
			" - " . mysqli_error($connect));
	}

	else {
		echo "<script> alert('Data berhasil dihapus.');window.location='index.php' </script>";
	}

?>