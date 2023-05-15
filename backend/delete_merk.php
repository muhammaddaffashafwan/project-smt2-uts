<?php 
require_once '../database/dbkoneksi.php';
$id=$_GET['iddel'];
$sql="DELETE FROM merk WHERE id=?";
$statment = $dbh->prepare($sql);
$statment->execute([$id]);
// redirect page
header('location:merk.php');
?>