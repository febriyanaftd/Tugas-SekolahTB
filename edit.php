<?php
include 'contact.php';

if(isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
    $email = $_POST['email'];
	$pesan= $_POST['pesan'];


	$sql = "UPDATE contact_us SET email='$email' ,pesan='$pesan' WHERE nama='$nama'";
	$query = mysqli_query($connect, $sql);
	if ($query) {
		header('Location: tampil.php');
	}else{
		header('Location: edit.php?status=gagal');
	}
}
?>