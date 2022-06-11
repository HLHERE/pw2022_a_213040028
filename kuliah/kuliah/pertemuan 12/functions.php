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

    $NPM = htmlspecialchars( $data["NPM"]);
    $nama =  htmlspecialchars ($data["nama"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars( $data["jurusan"]);
    $gambar = htmlspecialchars ($data["gambar"]);


    $query = "INSERT INTO mahasiswa VALUES (null, '$NPM', '$nama', '$email', '$jurusan', '$gambar')";

    mysqli_query($con, $query) or die (mysqli_error($con));

    return mysqli_affected_rows ($con);
}

function hapus($id) {
    $con = koneksi();

    mysqli_query($con, "DELETE FROM mahasiswa WHERE id= $id") or die (mysqli_error($con));

    return mysqli_affected_rows($con);

}

function ubah ($data) {
    $con = koneksi();
    $id= $data["id"];
    $npm = htmlspecialchars( $data["NPM"]);
    $nama =  htmlspecialchars ($data["nama"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars( $data["jurusan"]);
    $gambar = htmlspecialchars ($data["gambar"]);


    $query = "UPDATE mahasiswa SET 
                    NPM = '$npm', 
                    name = '$nama',
                    email = '$email' ,
                    jurusan =' $jurusan',
                    gambar= '$gambar'
                WHERE id = $id
                ";

    mysqli_query($con, $query) or die (mysqli_error($con));

    return mysqli_affected_rows ($con);


}



?>