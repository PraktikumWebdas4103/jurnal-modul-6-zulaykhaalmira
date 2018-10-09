<form method="POST">
    Username <input type="text" name="uname"><br>
    Password <input type="text" name="pass"><br>
	Nama <input type="text" name="nama" maxlength="35"><br>
	NIM <input type="text" name="nim" maxlength="10" minlength="10"><br>
	Kelas:<br>
    <input type="radio" name="kelas" value=D3MI-41-01/>D3MI-41-01<br>
    <input type="radio" name="kelas" value=D3MI-41-02/>D3MI-41-02<br>
    <input type="radio" name="kelas" value=D3MI-41-03/>D3MI-41-03<br>
    <input type="radio" name="kelas" value=D3MI-41-04/>D3MI-41-04<br>
    Jenis Kelamin:<br>
    <input type="radio" name="jk" value=Laki-Laki/>Laki-Laki<br>
    <input type="radio" name="jk" value=Perempuan/>Perempuan<br>
    Hobi:<br>
    <input type="checkbox" name="hobi" value="Seni"/>Seni<br>
    <input type="checkbox" name="hobi" value="Olahraga"/>Olahraga<br>
    <input type="checkbox" name="hobi" value="Otomotif"/>Otomotif<br>
    Fakultas
    <select name="fakultas">
        <option value="FIT">FIT</option>
        <option value="FKB">FKB</option>
        <option value="FEB">FEB</option>
        <option value="FIK">FIK</option>
    </select><br>
    Alamat <input type="textarea" name="alamat"><br>
    <input type="submit" name="submit" value="Register">
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
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        session_start();
        $_SESSION['uname'] = $nim;
        $kelas = $_POST['kelas'];
        $jk = $_POST['jk'];
        $hobi = $_POST['hobi'];
        $fakultas = $_POST['fakultas'];
        $alamat = $_POST['alamat'];

    $sql = "INSERT INTO data (nama,nim,kelas,jk,hobi,fakultas,alamat) values ('$nama','$nim','$kelas','$jk','$hobi','$fakultas','$alamat')";
    if (mysqli_query($con, $sql)){
        echo "<center>Database sudah masuk.</center>";
    }else{
        echo "<center>ERROR<center>";
    }
    header('location: login.php');
    }
?>