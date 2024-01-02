<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data User</title>
</head>
<body>
    <form action="/tambah-user" method="POST">
        @csrf
        <label for="input_user">Masukkan Data Pengguna</label>
        <br>
        <p>Masukkan data user sesuai format berikut: <br><br>
            NAMA[Spasi]USIA[Spasi]KOTA <br><br>
            Sebagai Contoh: <br>
            CUT MINI 28 BANDA ACEH
        </p>
        <input type="text" name="input_user" id="input_user" style="margin-top: 20px; width:500px; height: 50px" required>
        <br>
        <button style="margin-top: 20px" type="submit">Tambah User</button>
    </form>
</body>
</html>