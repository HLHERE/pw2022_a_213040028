<?php 
// pengkondisian/percabangan 
// if else 
// if else if else
// tenary <- ini untuk menganti if else sederhana
// switch 

// jika variabel benar
$x = 10;
if ($x < 20 ){
    echo "benar";
}

echo "<hr>";

// jika variabel salah tanpa mencetak echo 
$x = 30;
if ($x < 20 ){
    echo "benar";
}

echo "<hr>";
// jika variabel salah tapi sudah mencetak echo 
$y = 30;
if ($y < 20 ){
    echo "benar";
}
echo "salah";

echo "<hr>";
//  jika menggunakan else 
$z = 10;
if ( $z < 20 ){
    echo "benar";
} else {
    echo "salah";
}
echo "<hr>";
// jika ingin menambahkan penggunakan else if 
$z = 20;
if ( $z < 20 ){
    echo "benar";
} else if($z == 20 ){
    echo "tingnong!";
} else {
    echo "salah";
}
?>