<?php 
  // variabel scope / lingkup variabel
  //$x = 10; // $x merupakan variabel global untuk 1 file saja

  // function tampilX(){
  //   $x = 20; // $x adalah variabel untuk function tampilX() saja
  //   echo $x;
  // }

  // tampilX();

  // SUPERGLOBALS
  // variabel global milik PHP
  // merupakan Array Associative

  //var_dump()
  //echo $_SERVER["SERVER_NAME"];

  $mahasiswa = [
    [ 
     "nama" => "aya",
     "nim" => "20232034",
     "email" => "aya@gmail.com",
     "jurusan" => "PTI"
    ] ,
    [
     "nama" => "aqila",
     "nim" => "2032833",
     "email" => "aqila@gmail.com",
     "jurusan" => "PTI"
    ],
    [
     "nama" => "nada",
     "nim" => "24324892",
     "email" => "nada@gmail.com",
     "jurusan" => "PTI"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan 1</title>
</head>
<body>
      <h1>Daftar Mahasiswa</h1>
      <ul>
        <?php foreach($mahasiswa as $mhs) :?>
          <li>
            <a href="latihan2.php?nama=<?=$mhs["nama"]?>&nim=<?=$mhs["nim"]?>&jurusan=<?=$mhs["jurusan"]?>&email=<?=$mhs["email"]?>"><?= $mhs ["nama"]; ?></a>
        </li>
          <?php endforeach; ?>
      </ul>
  
</body>
</html>