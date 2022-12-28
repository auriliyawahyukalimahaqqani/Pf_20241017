<?php
function salam($waktu, $nama){
    return "Selamat $waktu, $nama";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <title>Latihan functional</title>
</head>
<body>
    <h1><?=Salam ("Siang", "Mahasiswa"); ?></h1>
    <!-- <h1>Selamat Pagi Administrator</h1-->
</body>
</html>