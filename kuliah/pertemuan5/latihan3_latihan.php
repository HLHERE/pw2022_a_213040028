<?php
// studi kasus 

$mahasiswa = [
    ["Mochamad haykal alvegio hadian ", "213040028", "kalfearislit@gmail.com", "Teknik Informatika"],
    ["chandler bing ", "213040069", "deadman@gmail.com", "Perencanaan wilayah dan kota"],
    ["joey tribbiani ", "213040070", "howyoudoin@gmail.com", "Teknik pangan"]
];

var_dump($mahasiswa);

echo "<hr>";
?>

<?php

foreach($mahasiswa as $mhs) {
?>
<ul>
    <li>Nama :<?php echo $mhs[0]?></li>
    <li>NRP : <?php echo $mhs[1]?></li>
    <li>Email  <?php echo $mhs[2]?></li>
    <li>Jurusan : <?php echo $mhs[3]?></li>
</ul>

<?php }?>