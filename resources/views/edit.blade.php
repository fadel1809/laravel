<h1>Edit</h1>

<form action="/{{$mahasiswa->id}}" method="POST">
    @method('put')
    @csrf
    <label for="">Nim</label>
    <input type="text"  name="nim" value="{{$mahasiswa->nim}}"><br>
    <label for="">Nama</label>
    <input type="text" name="nama" value="{{$mahasiswa->nama}}" ><br>
    <label for="">Jurusan</label>
    <input type="text" name="jurusan" value="{{$mahasiswa->jurusan}}"><br>
    <label for="">Alamat</label>
    <textarea name="alamat" id="" cols="30" rows="10" value="" >{{$mahasiswa->alamat}}</textarea><br>
    <input type="submit" value="Submit" name="submit">

</form>

