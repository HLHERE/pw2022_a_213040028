<?php
$angka = [3,2,1,25,70,90,20,00,88,22];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 4 </title>
<style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: red;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    .clear {clear : both;}  
    </style>
</head>
<body>
    <?php   for( $i = 0; $i < count($angka); $i++ ) {    ?>
    <div class= "kotak"> <?php echo $angka [$i] ?></div>
    <?php } ?>

       <div class="clear"></div> 

    <?php foreach ($angka as $a)  { ?>
        <div class = "kotak" ><?php echo $a; ?> </div>
    <?php  } ?>
</body>
</html>