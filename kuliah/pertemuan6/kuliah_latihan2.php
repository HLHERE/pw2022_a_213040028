<?php
// Studi kasus

$mahasiswa = [
    ["gambar" => "https://i.pinimg.com/736x/85/ef/37/85ef37480d0371c48f436f7d8b408677.jpg",
    "nama" => "chandler bing",
    "npm" => "213040128",
    "email" => "chandlerbingjing@gmail.com", 
    "jurusan" => "HUKUM"],

    ["gambar" => "https://i.pinimg.com/736x/5e/f3/f7/5ef3f71b4f3ed48aa85b09427a439d50.jpg",
    "nama" =>"kang saebyeok", 
    "npm" => "213040069",
    "email" => "wildanfauzan@gmail.com",
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

<?php

foreach($mahasiswa as $mhs) {
?>
<?php }?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Data mahasiswa</h1>
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach($mahasiswa as $mhs) {
?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
      <img src="<?php echo $mhs["gambar"]?>" width=60" class="rounded-circle">
      </td>
      <td><?php echo $mhs["nama"]?></td>
      <td><?php echo $mhs["npm"]?></td>
      <td><?php echo $mhs["email"]?></td>
      <td> <?php echo $mhs["jurusan"]?></td>
      <td>
          <a href="" class="btn badge bg-warning">Edit</a>
          <a href="" class="btn badge bg-danger">Delete</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
</table>
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