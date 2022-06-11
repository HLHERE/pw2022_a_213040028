<?php
// conn db 
require 'functions.php';
// vardump
//var_dump($result);
$mahasiswa= query("SELECT * FROM mahasiswa");
// cara memasukan data mahasiwa tersebut 
// query mahasiswa cari di klik 
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query= " SELECT * FROM mahasiswa WHERE
                name LIKE  '%$keyword%' OR
                NPM LIKE '%$keyword%'   OR
                

                
                
                
                
                ";

  $mahasiswa = query("$query");
}
   



?>
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
        <h1>Data mahasiswa sekut</h1>

        <div class="row mb-4">
        <div class="col-8">
        <form action="" method="get">
        <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off" placeholder="lewat sini bangsatttttt" autofocus>
        <button class= "btn btn-primary" type= "submit" id="cari" name="cari" >
          LOOOKINGGGG!
        </button>
        </div>
        </form>
        </div>
        </div>
        <a href="tambah.php" class ="btn btn-primary">

        <h3>lanjut</h3>
        </a>
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
  <?php foreach($mahasiswa as $mhs) {?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
      <img src="img/<?php echo $mhs["gambar"]?>" width=60" class="rounded-circle">
      </td>
      <td><?php echo $mhs["name"]?></td>
      <td><?php echo $mhs["NPM"]?></td>
      <td><?php echo $mhs["email"]?></td>
      <td> <?php echo $mhs["jurusan"]?></td>
      <td>
          <a href="ubah.php?id=<?php echo $mhs["ID"]?> " class="btn badge bg-warning">Ubah</a>
          <a href="hapus.php?id= <?php echo $mhs["ID"]?>" class="btn badge bg-danger"onclick="return confirm('yakin gak nih maseh??');">Hapus</a>
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