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

    // cek user jika tidak memilih gambbar 
    if ($_FILES["gambar"]["error"] === 4) {

        $gambar='HCL729.jpg';
    } else {
        // lakukan fungsi upload 
        $gambar = upload();
        #cek jika gambar gagal 
        if(!$gambar) {
            return false;
        }

    }



    $NPM = htmlspecialchars( $data["NPM"]);
    $nama =  htmlspecialchars ($data["nama"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars( $data["jurusan"]);


    $query = "INSERT INTO mahasiswa VALUES (null, '$NPM', '$nama', '$email', '$jurusan', '$gambar')";

    mysqli_query($con, $query) or die (mysqli_error($con));

    return mysqli_affected_rows ($con);
}

function hapus($id) {
    $con = koneksi();

    // query berdasarkan id 
    $mhs = query ("SELECT * FROM mahasiswa WHERE id = $id ")[0];
    // gamabrdeaful 
    if($mhs["gambar"] !== 'HCL739.jpg') {
    // hapus 
    unlink('img/' . $mhs["gambar"]);

    }

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

function upload() {
# data gambar 
$filename = $_FILES["gambar"]["name"];
$filetmpname= $_FILES["gambar"]["tmp_name"];
$filesize = $_FILES ["gambar"]["size"];
$filetype = pathinfo($filename, PATHINFO_EXTENSION);
$allowedtype = ["jpg","jpeg","png"];

#cek apakalh file gamabr 
if(!in_array($filetype, $allowedtype)) {
    echo "<script>
alert('salah ');
    </script>";
    return false;
}

// cek jika gambar terlalu besar 
if($filesize > 1000000){
    echo "<script>
    alert('kegedean');
    </script>";

    return false;
}

#upload 
$newfileman = uniqid(). $filename;
move_uploaded_file($filetmpname, 'img/' . $newfileman);
return $newfileman;  
    
}



?>