<?php 
include_once('connect.php');
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$arquivo = $_FILES['imagem'];

move_uploaded_file($arquivo['tmp_name'], 'uploads/'.$arquivo['name']);

$imagem = 'uploads/'.$arquivo['name'];

$stmt = $connect->prepare("INSERT INTO posts (titulo, descricao, imagem) VALUES(:titulo, :descricao, :imagem)");
$stmt->bindParam(":titulo",$titulo);
$stmt->bindParam(":descricao",$descricao);
$stmt->bindParam(":imagem",$imagem);
$stmt->execute();
header("Location: index.php");
?>