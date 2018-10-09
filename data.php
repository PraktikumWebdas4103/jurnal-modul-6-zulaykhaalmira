<?php
	$servername = "localhost";
    $nama = "root";
    $nim = "";
    $db = "jurnal";
    $con = new mysqli($servername, $nama, $nim, $db);

    if($con==false){
        die("Koneksi Gagal" . $con->connect_error);
    }

	session_start();
	$nim = $_SESSION['uname'];

	$sql = "SELECT * FROM data WHERE uname='$nama'";
	$query = mysqli_query($con,$sql);
	if ($query) {
		
	}
?>