<?php 
include_once('connect.php');
$id = $_GET['id'];
$stmt = $connect->prepare("SELECT id, titulo, descricao FROM posts WHERE id = :id");
$stmt->execute(array('id'=>$id));
$results=$stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<form action="editar-fim.php" method="POST">
		<?php foreach ($results as $post): ?>
		<div>
		  <input type="hidden" name="id" value="<?= $post['id'] ?>" required>
		</div>
		<div>
	  	  <label>Título</label>
		  <input type="text" name="titulo" value="<?= $post['titulo'] ?>">
		</div>
        <div>
		  <label >Descrição</label>
		  <textarea  name="descricao" value="<?= $post['descricao'] ?>"></textarea>
		</div>
		<?php endforeach; ?>
		<div>
			<button type="submit">Editar</button>
		</div>
        <?php 
