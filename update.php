<?php
    include 'koneksi.php';

    $nim = $_GET['nim'];
    $sqlGet = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Aplikasi CRUD</title>
</head>
<body>
<div class="w-50 mx-auto border p-3 mt-3">
    <a href="index.php">Kembali ke Halaman Utama</a>
  <form action="" method="post">
    <label for="nim">NIM</label>
    <input type="text" id="nim" name="nim" value="<?php echo "$data[NIM]";?>" class="form-control" reqiured>

    <label for="nim">Nama</label>
    <input type="text" id="nama" name="nama" value="<?php echo "$data[Nama]";?>" class="form-control" reqiured>

    <label for="nim">Jurusan</label>
    <input type="text" id="jurusan" name="jurusan" value="<?php echo "$data[Jurusan]";?>" class="form-control" reqiured>
    
    <label for="nim">Alamat</label>
    <input type="text" id="alamat" name="alamat" value="<?php echo "$data[Alamat]";?>" class="form-control" reqiured>

    <label for="nim">No HP</label>
    <input type="text" id="nohp" name="nohp" value="<?php echo "$data[nohp]";?>" class="form-control" reqiured>

    <input class="btn btn-success mt-3" type="submit" name="tambah" value="Update Data">
  </form>
  </div>
<?php

    if(isset($_POST['tambah'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    
    // $sqlInsert = "INSERT INTO mahasiswa(NIM,Nama,Jurusan,Alamat,nohp)
    //               VALUES ('$nim','$nama','$jurusan','$alamat','$nohp')";
    
    // mysqli_query($conn, $sqlInsert);
    
   
    $sqlUpdate = "UPDATE mahasiswa 
                  SET Nama='$nama', Jurusan='$jurusan', Alamat='$alamat', nohp='$nohp'
                  WHERE Nim='$nim'";
    $queryUpdate = mysqli_query($conn, $sqlUpdate);
    
    echo"
    <div class='alert alert-success'>Data Berhasil Dirubah!<a href='index.php'>Lihat Data</a></div>
    ";

    }
?>
</body>
</html>
