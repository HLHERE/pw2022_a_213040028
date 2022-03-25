<?php
// Studi kasus

$mahasiswa = [
    ["nama" => "chandler bing",
    "npm" => "213040029",
    "email" => "imsarcasone@gmail.com", 
    "jurusan" => "Teknik Pangan"],
    ["nama" =>"kang saebyeok", 
    "npm" => "213040039",
    "email" => "imneedmoney@gmail.com",
    "jurusan" => "Teknik Informatika"],
    ["nama"  =>   "Moch Haykal Alvegio Hadian", 
    "npm" => "213040028", 
    "email" => "kalfearislit@gmail.com", 
    "jurusan" => "Teknik Informatika"]
];

//var_dump($mahasiswa[0]["email"]);
// Array associative
// Array yang index nya berupa string yang berasosiasi dengan nilainya
?>

<?php

foreach($mahasiswa as $mhs) {
?>
<ul>
    <li>Nama :<?php echo $mhs["nama"]?></li>
    <li>NRP : <?php echo $mhs["npm"]?></li>
    <li>Email  <?php echo $mhs["email"]?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]?></li>
</ul>

<?php }?>