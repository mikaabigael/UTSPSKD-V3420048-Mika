<?php
require "config.php";

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function enkripsi($data) {
    $method="AES-128-CTR"; 	//Chiper Method
    $key ="Hsekolah123@#@"; // kata kunci yg digunakan utk enkripsi data
    $option=0;
    $iv="1251632135716362"; // panjang iv disesuaikan dengan method chiper

	return openssl_encrypt($data, $method, $key, $option, $iv);
}

function dekripsi($data) {
    $method="AES-128-CTR"; 	//Chiper Method
    $key ="Hsekolah123@#@"; // kata kunci yg digunakan utk enkripsi data
    $option=0;
    $iv="1251632135716362"; // panjang iv disesuaikan dengan method chiper

	return openssl_decrypt($data, $method, $key, $option, $iv);
}

function tambah($data) {
	global $conn;

	$nama = $data["nama"];
    $tanggal = enkripsi($data["tanggal"]);
	$alamat = enkripsi($data["alamat"]);
    $nomor = enkripsi($data["nomor"]);

	$query = "INSERT INTO `datasiswa` 
				VALUES (NULL, '$nama', '$tanggal', '$alamat', '$nomor')
			";
	mysqli_query($conn, $query);
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = $data["nama"];
    $tanggal = enkripsi($data["tanggal"]);
	$alamat = enkripsi($data["alamat"]);
	$nomor = enkripsi($data["nomor"]);
    

	$query = "UPDATE `datasiswa` SET
				nama = '$nama',
                `tgl` = '$tanggal',
				alamat = '$alamat',
                nomor = '$nomor' WHERE id = $id
			";

	mysqli_query($conn, $query);
	echo mysqli_error($conn);

	return mysqli_affected_rows($conn);	
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM `datasiswa` WHERE id = $id");
	return mysqli_affected_rows($conn);
}

// 	// cek konfirmasi password
// 	if( $password !== $password2 ) {
// 		echo "<script> alert('konfirmasi password tidak sesuai!'); </script>";
// 		return false;
// 	}

// 	// enkripsi password
// 	$password = password_hash($password, PASSWORD_DEFAULT);

// 	// tambahkan userbaru ke database
// 	mysqli_query($conn, "INSERT INTO user VALUES('$username', '$password', '$email', '$name_lengkap')");

// 	return mysqli_affected_rows($conn);

// }