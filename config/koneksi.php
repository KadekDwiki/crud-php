<?php
session_start();

class Connection
{
   private $host = "localhost";
   private $username = "root";
   private $password = "";
   private $db = "db_UTS";

   protected $conn;
   
   public function __construct()
   {
      //
      if (!isset($this->conn)) {
         $this->conn = new mysqli($this->host,$this->username, $this->password, $this->db);
      }
      
      if (!$this->conn) {
         echo "koneksi ke database gagal";
      }
      // else {
      //    echo "koneksi berhasil";
      // }



      // $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
      // if (!$this->conn) {
      //    echo "pelih";
      // }
   }
      
}
?>