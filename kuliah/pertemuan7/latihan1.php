<?php
// Variable Scope / lingkup variable
$x= 10;

function tampilx() {
    global $x;
    echo $x;
}

tampilx();
echo "<br>";
echo $x;
echo "<hr>"
?>

<?php 
// SUPERGLOBALS
// Variable global milik php
// merupakan Array Assosciative
echo $_SERVER["SERVER_NAME"];

echo "<hr>";
?>

<?php 
// $_GET
$mahasiswa = [[
    "nama"      => "Mochamad Haykal Alvegio Hadian", 
    "npm"       => "213040028", 
    "email"     => "kalfearislit@gmail.com", 
    "jurusan"   => "Teknik Informatika",
    "gambar"    => "HCL329.jpg"],
    [
    "nama"      => "Hl", 
    "npm"       => "213040033", 
    "email"     => "HLWASHERE@gmail.com", 
    "jurusan"   => "Teknik Informatika",
    "gambar"    => "HCL302.jpg"
    ]];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <a href="latihan2.php?
            nama=<?= $mhs["nama"];?>
            &npm=<?= $mhs["npm"]; ?>
            &email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>
            &gambar=<?= $mhs["gambar"];  ?>">
            <?= $mhs["nama"] ?></a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>