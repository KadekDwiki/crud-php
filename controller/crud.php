<?php 

require "../config/koneksi.php";

class CRUD extends Connection
{
   // read data kelompok
   public function readData(){
      $query = "SELECT * FROM rengkingsiswa";
      $hasil = mysqli_query($this->conn, $query);

      $rows = [];
      while ($row = mysqli_fetch_assoc($hasil)) {
         $rows[] = $row;
      }
      return $rows;
   }


   // create data kelompok
   public function createData($rengking, $nis, $nama, $absen, $alamat){
      $rengking = $rengking;
      $nis = $nis;
      $nama = $nama;
      $no_absen = $absen;
      $alamat = $alamat;

      $query = "INSERT INTO rengkingsiswa VALUES('', '$rengking', '$nis', '$nama', '$no_absen', '$alamat')" ;
      mysqli_query($this->conn, $query);

   }

   // read data berdasarkan id 
   public function readId($id){
      $id = $id;
      $query = "SELECT * FROM rengkingsiswa WHERE id='$id'";
      $hasil = mysqli_query($this->conn, $query);
      $data = mysqli_fetch_assoc($hasil);
      return $data;

   }
   // update data kelompok
   public function updateData($id, $rengking, $nis, $nama, $absen, $alamat){
      $id = $id;
      $rengking = $rengking;
      $nis = $nis;
      $nama = $nama;
      $no_absen = $absen;
      $alamat = $alamat;

      $query = "UPDATE rengkingsiswa SET renking='$rengking', nis='$nis', nama='$nama', nomor_absen='$no_absen', alamat='$alamat' WHERE id='$id'";
      
      mysqli_query($this->conn, $query);
      
   }

   public function deleteData($id){
      $id = $id;

      $query = "DELETE FROM rengkingsiswa WHERE id = $id";
      mysqli_query($this->conn, $query);

   }
   
}

?>