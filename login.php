<form method="POST">
	Username <input type="text" name="uname"><br>
	Password <input type="text" name="pass">
	<input type="submit" name="submit" value="Login">
</form>

<?php
	$servername = "localhost";
    $nama = "root";
    $nim = "";
    $db = "jurnal";
    $con = new mysqli($servername, $nama, $nim, $db);

    if($con==false){
        die("Koneksi Gagal" . $con->connect_error);
    }

    if (isset($_POST['submit'])) {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

    $sql = "SELECT * FROM tb_data WHERE uname='".$uname."' and pass='".$pass."'";
    $result = mysqli_query($con,$sql);

    if($result){
    	$data=mysqli_fetch_row($result);
    	session_start();
    		$_SESSION['uname']=$data[0];
    		$_SESSION['pass']=$data[1];
    }
    header('location: data.php');
    }
?>