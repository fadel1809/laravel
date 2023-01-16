<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    body {
        background-color: #e6e6e6;
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

            </div>
        </div>
    </nav>
    <div class="container">
        <h1> <center>Data Mahasiswa</center> </h1>
        <a href="tambah" class="btn btn-primary tambah">Add mahasiswa</a>
<table class="table table-light table-striped table-hover" border="1" >
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>jurusan </th>
        <th>Alamat</th>
        <th>action</th>
    </tr>
    @foreach ($mahasiswa as $item)
    <tr>
        <td>{{$item->nim}} </td>
        <td> {{$item->nama}} </td>
        <td>{{$item->jurusan}} </td>
        <td>{{$item->alamat}} </td>
        <td class="action">
            <form class="delete-button" action="/{{$item->id}}" method="POST">
                <a href="/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-danger">
            </form>
        </td>
    </tr>
    @endforeach
</table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>


