<?php
include 'contact.php';

$nama = $_GET['nama'];
$sql = "SELECT * FROM contact_us WHERE nama='$nama'";
$query = mysqli_query ($connect, $sql);
$no_produk = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1 ) {
die("data tidak ditemukan...");

}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>Starbhak Mart</title>

        <style>
            .container{
                width: 1000px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card-body">
                <div class="card-header bg-dark text-white text-center mt-2"><b>Form Edit Data</b></div>
                <div class="card-body" style="border: solid rgba(124, 120, 120, 0.493);">
                    <form action="edit.php" method="POST">

                    <div class="form-group row">
                            <label for="no" class="col-sm-2 col-form-label">nama</label>
                            <div class="col-sm-9">
                            <input name="nama" type="text" class="form-control" id="no"
                            value="<?php echo $nama['nama']?>">
                            </div>
                        </div>

                    <div class="form-group row">
                            <label for="id" class="col-sm-2 col-form-label">email</label>
                            <div class="col-sm-9">
                            <input name="email" type="text" class="form-control" id="id"
                            value="<?php echo $email['email']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">pesan</label>
                            <div class="col-sm-9">
                            <input name="pesan" type="text" class="form-control" id="nama"
                            value="<?php echo $pesan['pesan']?>">
                            </div>
                        </div>

                       
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>