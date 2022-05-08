<?php
require "../controller/crud.php";

$crud = new CRUD;

if (isset($_GET["id"])) {
   $result = $crud->deleteData($_GET["id"]);
   header('Location:http://localhost:8080/tugas_pwpb/DataKelompok/views/index.php');
}

