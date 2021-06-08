<?php
include '../ProjectUTS_Semester2/../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['nama'],$_POST['email'],$_POST['gender']);
    header("location:../ProjectUTS_Semester2/../view/tampil.php");
}else if ($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../ProjectUTS_Semester2/../view/tampil.php");
}else if ($aksi == "update"){
    $db->update($_POST['id'],$_POST['nama'],$_POST['email'],$_POST['gender']);
    header("location:../ProjectUTS_Semester2/../view/tampil.php");
}
?>