<?php


function koneksi() {
    $con = mysqli_connect('localhost', 'root', '', 'learning_1') or die('KONEKSI GAGAL!!');

    return $con;
}



function query($query) {
    $con = koneksi();
    $result = mysqli_query($con, $query) or die (mysqli_error($con));

    $rows =[];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
    $con = koneksi();

    $NPM = $data["NPM"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];


    $query = "INSERT INTO mahasiswa VALUES (null, '$NPM', '$nama', '$email', '$jurusan', '$gambar')";

    mysqli_query($con, $query) or die (mysqli_error($con));

    return mysqli_affected_rows ($con);
}
?>