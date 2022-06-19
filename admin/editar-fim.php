<?php 
include "connect.php";
$id = $_POST['id'];
$title = $_POST['titulo'];
$description = $_POST['descricao'];
$stmt=$connect->prepare("UPDATE posts SET id = :id, titulo = :title, descricao= :description WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->bindParam(":title", $title);
$stmt->bindParam(":description", $description);
$stmt->execute();
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
header("Location:listar.php");
?>
