<?php 
    //array asosiatif 
    //definisinya sama dengan array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri


    $mahasiswa = [
       [ 
        "nama" => "auriliya",
        "nim" => "20241017",
        "email" => "auriliya@gmail.com",
        "jurusan" => "PTI"
       ] ,
       [
        "nama" => "aulia",
        "nim" => "2021018",
        "email" => "aulia@gmail.com",
        "jurusan" => "PTI"
       ],
       [
        "nama" => "aya",
        "nim" => "20241019",
        "email" => "aya@gmail.com",
        "jurusan" => "PTI"
       ]

       ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asosiatif Array</title>
</head>
<body>
    <h1>Daftar nahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nim : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        <?php endforeach; ?>
    
</body>
</html>