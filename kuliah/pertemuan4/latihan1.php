<?php 
// function

//built-in function 
// date ();
// jika ingin melihat function- function bisa search ke
// ke search engine dan lihat sesuai nanti yang dibutuh kan 
echo date ("l, j F o");
echo "<hr>";

// time ()
echo time ();
// UNIX Timestamp  / EPOCH Time 
// detk yang sudah berlalu sejak 1 januari 1970
echo "<br>";
echo "<hr>";
echo time () + 86400;
// agar menngetahui echo time kedepan nya 
echo "<br>";
echo "<hr>";
echo date ("l, j F o", time () + 60 * 60 * 24 * 100);
// mengetahui tanggal 100 hari kedepan 
echo "<br>";
echo "<hr>";
echo date ("l, j F o", time () - 60 * 60 * 24 * 100);
// mengetahui tanggal 100 hari kebelakang 
echo "<br>";
echo "<hr>";

// mktime(0,0,0,0,0,0);
// mendapatkan detik pada tanggal tertentu 
// susunan time nya adalah jam, menit,detik ,bulan, tanggal ,tahun 
echo mktime(0,0,0,3,5,2022);
echo "<hr>";
echo date ("l", mktime(0,0,0,9,20,2003));
// untuk mengetahui kapan hari aku lahir
echo "<br>";
echo "<hr>";
// math 
echo pow(2,3); // pangkat 

echo "<br>";
echo "<hr>";

echo rand(1,10); // mengrandom nomber pilihan 

echo "<br>";
echo "<hr>";

// pembulatan 
// round (), ceil (), floor()
echo round(2.6);

echo "<br>";
echo "<hr>";

echo ceil(2.1);  // pembulatan ke atas 

echo "<br>";
echo "<hr>";

echo floor(2.9);  // pembulatan ke bawah 

echo "<br>";
echo "<hr>";

// user defined function


?>