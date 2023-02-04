<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Tambah Mahasiswa</title>
</head>
<style>
    body {
        background-color: #e6e6e6;
        font-family: 'Poppins', sans-serif;
    }
    h1{
        margin-bottom: 15px;
        text-decoration: underline;
        font-weight: bold;
        text-align: center;
    }
    .kontener {
        padding: 0.4em 4em;
    }

    .kontener a i {
        padding-right: 13px;
    }

    .kontener a {
        font-size: 17px;
    }

    .container{
        padding: 30px 25px;
        background: white;
        margin: 30px auto;
        border-radius: 10px;
        height:100%;
    }
    .action{
       
        text-align: center;
    }
    table{
        text-align: center;
    }
    .tambah{
        float: right;
        margin: 8px auto;
    }
    
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid kontener">
            <a class="navbar-brand" href="#"><i class="fa-regular fa-user"></i>
                Welcome, Admin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tugas Uas Praktikum Pemrograman WEB-Fadel Maulana 2003015188</a>
        </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Tambah Mahasiswa</h1>

        <form action="/tambah/store" method="POST">
            @csrf
            <label  for="">Nim</label>
            <input   class="form-control" type="text" value="" name="nim" required><br>
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" required><br>
            <label for="">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" required><br>
            <label for="">Alamat</label>
            <textarea name="alamat" id="" cols="30" rows="2" class="form-control" required></textarea><br>
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            <input type="reset" value="Reset" class="btn btn-danger">

            <a href="/" class="btn btn-danger" style="float:right;  margin-bottom:10px;"><i class="fa-solid fa-arrow-left"></i> Kembali ke homepage</a>
        </form>

    </div>
</body>
</html>


