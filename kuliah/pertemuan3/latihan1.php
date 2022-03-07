<?php 
// pengulangan
// for
// while
// do.. while
// foreeach : pengulangan khusus array


// pengunaan for pada php 
for( $i = 0; $i < 5; $i++ ) {
echo "hello world <br>";
}
echo "<hr>";
// pengunaan while pada php 
$i = 0;
while( $i < 5  ) {
echo "Hello world <br>";
$i++;
}
echo "<hr>";
// pengunaan do while pada php 
$i = 0;
do {
    echo "hello world <br>";
$i++;
} while ( $i < 5 );
echo "<hr>";
// jika penggunan do while pada $ lebih besar dari 5 / false 
$i = 10;
do {
    echo "hello world <br>";
$i++;
} while ( $i < 5 );
// meski jawaban pada php false akan tetap dijalan kan cuman 1 
echo "<hr>";
// di while jika jawaban nya false atau salah php tidak akan menunjukan nya
$i = 10;
while( $i < 5  ) {
echo "Hello world <br>";
$i++;
}
echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- cara membuat table hanya menggunakan html tidak memakai php  -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
    </table>
    <hr>
    <br>
        <!-- ini adalah cara pertama membuat table menggunakan php  -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for($i = 1; $i <= 3; $i++ ) {
            echo "<tr>";
        for($j = 1; $j <=5; $j++ )
            echo "<td>$i,$j</td>";
        }
        echo "</tr>";
        ?>
    </table>
<hr>
<br>
<!-- ini adalah cara kedua membuat table menggunakan php  -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 3; $i++ ) : ?>
            <tr>
            <?php for($j = 1; $j<= 5; $j++ ) : ?>
                <td><?php echo "$i, $j";?></td>
            <?php endfor; ?>
            </tr>
     <?php endfor; ?>
    </table>
    
    <br>
    <hr>
<!-- jika bingung dalam penutup dalam php bisa menggunakan
: ,dilanjutkan dengan "endfor;" -->
<!-- php echo bisa diganti dengan = asal fungsi nya mencetak variabel  -->


<!-- cara membuat table sederhana menggunakan campuran html dan php -->
<!-- bedanya ini table ini mencari bilangan genap dan ganjil  -->
<style>
    .warna-baris {
        background-color: pink;
    }
    </style>


<table border="1" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1 ) : ?>
                <tr class="warna-baris">
            <?php else :?>
            <?php endif; ?>        

            <?php for($j = 1; $j<= 5; $j++ ) : ?>
                <td><?php echo "$i, $j";?></td>
            <?php endfor; ?>
            </tr>
     <?php endfor; ?>
    </table>




</body>
</html>
