<?php
include 'contact.php';

if(isset($_GET['nama'])) {
	header('Location: tampil.php');
}

$nama = $_GET['nama'];

$sql = "DELETE FROM contact_us WHERE nama='$nama'";
$query = mysqli_query($connect, $sql);

if ($query) {
	header('Location: tampil.php');
}else{
	header('Location: hapus.php?status=gagal');
}
?>