<?php 
require "../controller/crud.php";

$crud = new CRUD;

$data = $crud->readData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../style/style.css">
   <script src="https://kit.fontawesome.com/d66a7a980c.js" crossorigin="anonymous"></script>
   <title>tampil data</title>
</head>
<body>
   <h1>aplikasi CRUD sederhana tentang anggota kelompok</h1>
   <a href="tambahData.php"><button>tambah data</button></a>

   <!-- tabel -->
   <table>
      <tr>
         <th>No</th>
         <th width= "150px">Rengking</th>
         <th width= "150px">Nis</th>
         <th width= "300px">Nama</th>
         <th width= "150px">Nomor Absen</th>
         <th width= "300px">Alamat</th>
         <th width= "150px">action</th>
      </tr>
      <?php 
         $no = 1;
         foreach ($data as $dt) { 
      ?>
         <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $dt["renking"]; ?></td>
            <td><?php echo $dt["nis"]; ?></td>
            <td><?php echo $dt["nama"]; ?></td>
            <td><?php echo $dt["nomor_absen"]; ?></td>
            <td><?php echo $dt["alamat"]; ?></td>
            <td>
               <a href="updateData.php?id=<?php echo $dt["id"] ?>"><i class="fa-solid fa-pen-to-square"></i> edit</a>
               <a href="../views/deleteData.php?id=<?= $dt["id"] ?>"><i class="fa-solid fa-trash"></i> delete</a>
            </td>
         </tr>

      <?php 
      }
      ?>

   </table>

</body>
</html>