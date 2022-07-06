<?php
    include 'koneksi.php';
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
    <p class="h2 text-center mt-4">APLIKASI PENDAFTARAN MAHASISWA BARU<p>
    <div class="container mt-5">
        <a href="add.php" class="btn btn-primary btm-md mb-3">Tambah</a>
        <table class="table table-striped table-hover table-bordered">
    <thead class="table-dark">
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Telephone</th>
        <th>Aksi</th>
    </thead>

    <?php
        $sqlGet = "SELECT * FROM mahasiswa";
        $query = mysqli_query($conn, $sqlGet);

        while($data = mysqli_fetch_array($query)){
            echo "
            <tbody>
            <tr>
               <td>$data[NIM]</td>
               <td>$data[Nama]</td>
               <td>$data[Jurusan]</td>
               <td>$data[Alamat]</td>
               <td>$data[nohp]</td>
               <td>
                   <div class='row'>
                       <div class='col d-flex justify-content-center'>
                           <a href='update.php?nim=$data[NIM]' class='btn btn-sm btn-warning'>Update</a>
                       </div>
                       <div class='col d-flex justify-content-center'>
                       <a href='delete.php?nim=$data[NIM]' class='btn btn-sm btn-danger'>Delete</a>
                       </div>
                   </div>
               </td>
            </tr>
           </tbody>
            ";
        }
    ?>
   </table> 
    </div>
</body>
</html>