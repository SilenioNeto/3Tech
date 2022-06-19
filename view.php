<?php 
include_once('connect.php');
$id = $_GET['id'];
$stmt = $connect->prepare('SELECT id, titulo,descricao, imagem FROM posts WHERE id = :id');
$stmt->execute(array('id' => $id));
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<body>
	<?php foreach($results as $post): ?>
		<h1><?= $post["titulo"] ?></h1>
		<p><?= $post["descricao"] ?></p>
		<p><img src="<?= $post["imagem"] ?>" alt="<?= $post["titulo"] ?>"></p>
	<?php endforeach; ?>
</body>
