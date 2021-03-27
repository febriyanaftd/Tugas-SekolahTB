<?php 
include 'contact.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>portofolio</title>

    <style>
        .judullist{
            height: 45px;
        }
    </style>
<body>
        <div class="container">
            <div class="card-body">
                <div class="card-header bg-dark text-white text-center mt-2"><b>Form Tambah Data Produk</b></div>
                <div class="card-body" style="border: solid rgba(124, 120, 120, 0.493);">
                    <form action="simpan.php" method="POST"> 

                    <div class="form">
                    <div class="form-group row">
                    <label for="no_produk" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-9">
                        <input name="no_produk" type="text" class="form-control" id="no_produk" 
                        value="">
                        </div>
                    </div>

                    <div class="form">
                    <div class="form-group row">
                    <label for="id_produk" class="col-sm-2 col-form-label">email</label>
                        <div class="col-sm-9">
                        <input name="id_produk" type="text" class="form-control" id="id_produk" 
                        value="">
                        </div>
                    </div>
                    
                    <div class="form">
                    <div class="form-group row">
                    <label for="nama_produk" class="col-sm-2 col-form-label">pesan</label>
                        <div class="col-sm-9">
                        <input name="nama_produk" type="text" class="form-control" id="nama_produk" 
                        value="">
                        </div>
                    </div>


                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>