<?php
include '../ProjectUTS_Semester2/../view/../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['judul'],$_POST['penulis'],$_POST['keterangan']);
    header("location:../ProjectUTS_Semester2/../view/../LoginGoogle/library.php");
}else if ($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../ProjectUTS_Semester2/../view/../LoginGoogle/library.php");
}else if ($aksi == "update"){
    $db->update($_POST['id'],$_POST['judul'],$_POST['penulis'],$_POST['keterangan']);
    header("location:../ProjectUTS_Semester2/../view/../LoginGoogle/library.php");
}
?>