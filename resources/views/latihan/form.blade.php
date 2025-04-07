<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>
<body>

    <h3>Form Mahasiswa</h3>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('latihan.simpan') }}" method="post">
        @csrf
        NIM: <br><input type="text" name="nim"><br><br>
        Nama Lengkap: <br><input type="text" name="nama"><br><br>
        Kelas: <br><input type="text" name="kelas"><br><br>
        <button type="submit">Simpan</button>
    </form>

</body>
</html>
