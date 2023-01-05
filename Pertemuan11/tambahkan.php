<?php

    require 'functions.php';

    //cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan ke database atau tidak
    if( tambah($_POST)> 0){
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        documen.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal| ditambahkan!');
        document.location.href = 'index.php' ;
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Tambah Data</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <tabel for="nim"NIM: ></label>
                <input type="text" name="nim" id="nim">
</li>
<li>
    <label for="nama">Nama :</label>
    <input type ="text" name="email" id="email">
</li>
<li>
    <label for= "jurusan">Jurusan</label>
    <input type="text" jurusan="Jurusan" id="email">
</li>
<li>
    <label for="gambar">Photo :</label>
    <input type="text" name="gambar" id="gambar">
</li>
<li>
    <button type="submit" name="submit">Simpan!</button>
</li>
</ul>
</form>

    <a href="index.php">..</a>
</body>
</html>