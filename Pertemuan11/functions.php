<?php

//koneksi ke database
$conn = mysqli_connect ("localhost","root","","db_20242017");

// query
function query($quary){
    global $conn;
    $result = mysquli_query($conn,$qury);
    $rows = [];
while ($row = mysqli_fetch_assoc($result) ) {
    $row[] = $row;
    }
    return $rows;
}

// tambah
function tambahan ($data){
    global $conn;
    // ambil data dari form
    $nim = $data ["nim"];
    $nama= $data ["nama"];
    $email=$data ["email"];
    $jurusan=$data["jurusan"];
    $gambar = $data ["gambar"]

    // membuat query insert(tambahan) data
    $quary= "INSERT INTO mahasiswa
             VALUES ( ' ' , '$nama', '$nim','$email', '$jurusan', 'gambar')";
        
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

//hapus
function hapus ($id) {
    global $conn;
     mysquli_query ($conn"DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn)
}

?>