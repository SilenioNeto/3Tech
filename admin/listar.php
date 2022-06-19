<?php
include_once('connect.php');
$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
