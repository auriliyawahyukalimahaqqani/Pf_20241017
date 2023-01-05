<?php
    // koneksi ke database
    $conn =mysqli_connect("localhost","root","","db_20242017");

    //ambil data dari tabel (query)
    $result =mysqli_query ( "$conn,"SELECT" FROM mahasiswa");

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Halaman admin</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <table border = "1" cellpandding="10" cellspacing="0">

        <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Email</th>
        <thh>Jurusan</th>
    </th>

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a>|
                    <a href="hapus.php?id=<?=$row["id"]; ?> onclick=return confirm ('yakin data dihapus');">Hapus</a>
                </td> 
                <td><img src = "img/<?=$row["gambar"]; ?>"alt="" width="50"></td>
                <td><?=$row["nim"]; ?></td>
                <td><?=$row["nama"];?></td>
                <td><?=$row["email"];?></td>
                <td><?=$row["jurusan"];?></td>

        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

        </table>

     </body>
     </html>

