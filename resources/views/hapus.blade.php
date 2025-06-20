<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Hapus Karyawan</h3>

    <a href="/newkaryawan"> Kembali</a>

    <br />
    <br />

    @foreach ($newkaryawan as $n)
        <form action="/newkaryawan/hapus" method="post">
            {{ csrf_field() }}
            NIP <input type="hidden" name="id" value="{{ $n->NIP }}"> <br />
            Nama <input type="text" required="required" name="nama" value="{{ $n->nama }}"> <br />
            Pangkat <input type="text" required="required" name="jabatan" value="{{ $n->pangkat }}"> <br />
            Gaji <input type="number" required="required" name="umur" value="{{ $p->gaji }}"> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach


</body>

</html>
