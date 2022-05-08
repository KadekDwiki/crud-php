<?php
require "../controller/crud.php";

$crud = new CRUD;

if (isset($_POST["submit"])) {
   $result = $crud->createData($_POST["rengking"],$_POST['nis'],$_POST['nama'],$_POST['nomor_absen'],$_POST['alamat']);
   header('Location:http://localhost:8080/tugas_pwpb/DataKelompok/views/index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../style/style.css">
   <script src="https://kit.fontawesome.com/d66a7a980c.js" crossorigin="anonymous"></script>
   <title>tambah data</title>
</head>
<body class="center">
   <h1> tambah data</h1>
   <form action="tambahData.php" method="POST">
      <div class="input-div">
         <label for="rengking">rengking</label>
         <input type="text" name="rengking" id="rengking">
      </div>
      <div class="input-div">
         <label for="nis">nis</label>
         <input type="text" name="nis" id="nis">
      </div>
      <div class="input-div">
         <label for="nama">nama</label>
         <input type="text" name="nama" id="nama">
      </div>
      <div class="input-div">
         <label for="nomor_absen">nomor absen</label>
         <input type="text" name="nomor_absen" id="nomor_absen">
      </div>
      <div class="input-div">
         <label for="alamat">alamat</label>
         <textarea type="text" name="alamat" id="alamat">
         </textarea>
      </div>
      <button type="submit" name="submit"> submit</button>
   </form>
</body>
</html>