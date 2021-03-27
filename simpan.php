<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
	$pesan= $_POST['pesan'];
	
$sql = "INSERT INTO contact_us ( nama, email, npesan) VALUES ( '$nama','$email','$pesan')";
$query = mysqli_query($connect, $sql);
	if ($query) {
	header('Location: tampil.php');
	}else{
	header('Location: simpan.php?status=gagal');
	}
}
?>