<?php
// Studi kasus

$mahasiswa = [
    ["gambar" => "https://i.pinimg.com/736x/85/ef/37/85ef37480d0371c48f436f7d8b408677.jpg",
    "nama" => "chandler bing",
    "npm" => "213040128",
    "email" => "bings2times@gmail.com", 
    "jurusan" => "HUKUM"],

    ["gambar" => "https://i.pinimg.com/736x/5e/f3/f7/5ef3f71b4f3ed48aa85b09427a439d50.jpg",
    "nama" =>"hoyeonny", 
    "npm" => "213040069",
    "email" => "needmoneyASAP@gmail.com",
    "jurusan" => "Teknik Informatika"],

    ["gambar" => "https://i.pinimg.com/236x/e7/9c/7c/e79c7c782ae0ee32c5e4e256ee41c36e.jpg",
    "nama"  =>   "Moch Haykal Alvegio Hadian", 
    "npm" => "213040028", 
    "email" => "kalfearislit@gmail.com", 
    "jurusan" => "Teknik Informatika"],

    ["gambar" => "https://i.pinimg.com/564x/32/cb/60/32cb600629bfdad9cbe5f138a67dc7d3.jpg", 
    "nama"  =>   "joey tribiani ", 
    "npm" => "215040038", 
    "email" => "akuanakteknik@gmail.com", 
    "jurusan" => "Teknik Industri"],

    ["gambar" => "https://i.pinimg.com/736x/d0/63/7a/d0637a3e6562efdcd495779ae5d4db3b.jpg", 
    "nama"  =>   "arief muhammad", 
    "npm" => "215040050", 
    "email" => "BERANTASAFFILATOR@gmail.com", 
    "jurusan" => "HUKUM"],

    ["gambar" => "https://i.pinimg.com/736x/1f/53/36/1f5336930123f2c81ad11855af99bdb3.jpg", 
    "nama"  =>   "kim dami ", 
    "npm" => "215040038", 
    "email" => "akusukauang@gmail.com", 
    "jurusan" => "ekonomi"],

    ["gambar" => "https://i.pinimg.com/736x/bf/74/31/bf7431cf99fedd61e00c78b5fc127753.jpg", 
    "nama"  =>   "song mino  ", 
    "npm" => "215040408", 
    "email" => "akuanakdkv@gmail.com", 
    "jurusan" => "DKV"],


    ["gambar" => "https://i.pinimg.com/736x/08/7e/3e/087e3e298a33e340a30e7b03370fc200.jpg", 
    "nama"  =>   "jake peralta", 
    "npm" => "215040111", 
    "email" => "akuanakpintar@gmail.com", 
    "jurusan" => "HUKUM"],

    ["gambar" => "https://i.pinimg.com/736x/e6/37/cb/e637cbed3bf69cfb18dc2776a129ab73.jpg", 
    "nama"  =>   "dwight scrhute", 
    "npm" => "215040208", 
    "email" => "akuanakdkv@gmail.com", 
    "jurusan" => "manajemen bisnis"],

    ["gambar" => "https://i.pinimg.com/736x/f6/44/b4/f644b40a0e4417f12d00317d5fb3de49.jpg", 
    "nama"  =>   "BIBI ", 
    "npm" => "215040348", 
    "email" => "girlcrush@gmail.com", 
    "jurusan" => "Seni Musik"],

    
    
];

//var_dump($mahasiswa[0]["email"]);
// Array associative
// Array yang index nya berupa string yang berasosiasi dengan nilainya
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>

      <div class="container">
        <h1>Detail Mahasiswa</h1>

        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $_GET["nama"];  ?></h5>
        <p class="card-text"><?= $_GET["npm"]; ?></p>
        <p class="card-text"><?= $_GET["email"];  ?></p>
        <p class="card-text"><?= $_GET["jurusan"];  ?></p>

        <a href="kuliah_latihan3.php">Kembali</a>
      </div>
    </div>
  </div>
</div>

      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>