<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <title>portofolio</title>

    <style>
        .jumbotron{
            height: 450px;
            background-image: url(https://akcdn.detik.net.id/visual/2020/03/13/f4e7d503-c377-4968-86bd-67883d717777_169.jpeg?w=700&q=90);
            background-size: cover;
            background-position-y: -210px;
        }
        .judullist{
            height: 45px;
        }
    </style>
</head>
<body>
<body class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link active rounded js-scroll-trigger" aria-current="page" ><h5 class="ms-auto">Daftar Produk</h5></a></li>
            </ul>
        </div>
        </div>
    </nav><br>
	<h3 class="text-uppercase">Daftar Produk</h3>
	<!-- <h5><a href="tampilan.html"> [+]Tambah Baru </a></h5> -->
	<table class="table table-bordered border-dark mt-5 text-center"> 
		<tr>
		    <th>No</th>
            <th>nama</th>
			<th>email</th>
			<th>pesan</th>
		</tr>
        
<?php

		$sql = "SELECT * FROM contact_us ";
		$query = mysqli_query($connect,$sql);

		while ( $nama = mysqli_fetch_array ( $query )) {
			echo "<tr>";
			echo "<td>".$nama['nama']."</td>";
            echo "<td>".$nama['email']."</td>";
			echo "<td>".$nama['pesan']."</td>";
		

			echo "<td>";
			echo "<a href='formedit.php?nama=".$nama['nama']."'>Edit</a> | ";
			echo "<a href='hapus.php?nama=".$nama['nama']."'>Hapus</a>";
			echo "</td>";
			echo "</tr>";
		}		
		?>
</body>
</html>
