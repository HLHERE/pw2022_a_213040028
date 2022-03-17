<?php
// ARRAY
// array adalah variable yang dapat menampung lebih dari satu nilai sekaligus 
$hari1 = "senin";
$hari2 = "selasa";

// membuat array 


// cara baru 
$hari = ["senin", "selasa" , "rabu" , "kamis", "jumat" , "sabtu","minggu"];


// cara lama 
$bulan = array("januari", "februari" , "maret","april");


$myArray = [100 , "HL" , true];


// cara mencetak array 
// ,emcetak 1 elemen / nilai menggunakan 
// indeks nya dimulai dari 0 
echo $hari[3];
echo "<hr>";
echo $bulan[2];
echo "<hr>";


// mencetak semua elemen pada array 
// var_dump() / print_r()
// cara yang atas khusus debugging 
var_dump($myArray);

echo "<br>";
echo "<hr>";

print_r($hari);

echo "<br>";
echo "<hr>";
// cara cetak menggunakan looping 
// for 
for($i = 0; $i < count($hari); $i++) {

    echo $hari[$i];
    echo "<br>";

}
echo "<br>";
echo "<hr>";

// ada satu pengulangan yang khusus untuk array dan lebih menyenangkan 
// nama nya adalah = "foreach"
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<hr>";


foreach ($hari as $key => $value) {
    echo "key: $key , value = $value";
    echo "<br>";
}
echo "<hr>";

// Memanipulasi isi array
// Menambah elemen baru di akhir array
$hari[  ] = "Sabtu";
$hari[count($hari)] = "Minggu";
var_dump($hari);


?>