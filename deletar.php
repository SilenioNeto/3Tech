<?php 
include "connect.php";
$id = $_GET['id'];
$stmt = $connect->prepare("DELETE FROM posts WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();
header("Location:listar.php");
?>
