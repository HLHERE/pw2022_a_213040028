<?php
// pertemuan2 membahas tentang sintaks PHP
// nilai: integer,string, boolean 
echo 10;
echo "<hr>";

// VARIABEL 
// wadah untuk menyimpan NILAi 
// nama nya bebas , hanya tidak boleh diawali angka dan tidak boleh ada
// spasi 
$nama_lengkap = "mochamad haykal alvegio hadian";
echo $nama_lengkap;
echo "<br>";
// bisa ditimpa/overwrite


// string 
// '',""
// pengunaan kutip disesuai kan dengan kebutuhan kamu poko nya mah 
// jika semua kutip ada yang dipakai bisa gunakan \
echo 'haykal :"jum\'at"';
echo "<br>";
echo "haykal : \"jum'at\"";
echo "<hr>";

// interpolasi 
// mencetak isis variabel 
// hanya bisa digunakan oleh "" 
echo "hej nama saya $nama_lengkap";
echo "<hr>";
// operator 
// aritmatika
// +,-,*,/ % (modulo/modulus/sisa bagi)
echo 2500 *(6900 / 12);
echo "<br>";
$alas = 12;
$tinggi = 24;
$luas_segitiga = ($alas * $tinggi) /2; 
echo $luas_segitiga;
echo "<br>";
echo 3%2;
echo "<hr>";

// concat
// penggantung string 
// symbol nya adalah . 

$nama_saya = "mochamad haykal alvegio hadian";
$nama_lucu = "im cool mannnn!!!";
echo $nama_saya . " " . $nama_lucu ;
echo "<br>";
// kalo mau tambah spasi ya harus tambah spasi nya menggunakan titik 

// perbandingan 
// <, >,<=,>=,==,!= 
echo 1<5;
echo "<br>";

// identitas / strict comparison 
// ===, !==
echo 10 === "10";
echo "<hr>";

// increment / decrement 
// penambahan / penguranangan  1 
// ++,-- 
$x = 10;
$x++;
echo $x;
echo "<hr>";

// logika
// && dan  ,|| or ,! noted
$x = 10;
var_dump($x < 20 && $x % 2 == 0)

?>