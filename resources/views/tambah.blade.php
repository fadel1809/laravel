<h1>Tambah</h1>

<form action="/tambah/store" method="POST">
    @csrf
    <label for="">Nim</label>
    <input type="text" value="" name="nim"><br>
    <label for="">Nama</label>
    <input type="text" name="nama" ><br>
    <label for="">Jurusan</label>
    <input type="text" name="jurusan"><br>
    <label for="">Alamat</label>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Submit" name="submit">

</form>

