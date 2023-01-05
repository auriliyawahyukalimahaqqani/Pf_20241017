<?php 
  // $mahasiswa = [
  //   ['Auriliya', "20241017", "PTI", "auriliya@undikma.ac.id"], 
  //   ['aulia', "20241024", "PTI", "aulia@undikma.ac.id"],
  //   ['Otong Surotong', "20241027", "PTI", "salsa@undikma.ac.id"]
  // ];

  // Array Associative
  // definisinya sama dengan array numerik, kecuali
  // key-nya adalah string yang kita buat sendiri
  $mahasiswa = [
    ["nama" => "Auriliya",
     "nim" => "20241017",
     "email" => "auriliya@undikma.ac.id",
     "jurusan" => "PTI"
    ],
    ["nama" => "aulia",
                "nim" => "20241024",
                "email" => "aulia@undikma.ac.id",
                "jurusan" => "PTI"
    ],
    ["nama" => "salsa",
                "nim" => "20241027",
                "email" => "salsa@undikma.ac.id",
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
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
      <li><?= $mahasiswa[0]; ?></li>
      <li><?= $mahasiswa[1]; ?></li>
      <li><?= $mahasiswa[2]; ?></li>
      <li><?= $mahasiswa[3]; ?></li>
    </ul>
    <br> -->

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li> 
    </ul>
    <?php endforeach; ?>

</body>
</html>