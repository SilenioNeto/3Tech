<?php
include_once('connect.php');
$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<html>

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Título</th>
			<th>Descrição</th>
			<th>Ações</th>
		</tr>
	</thead>

    <tbody>
	<?php foreach($results as $post): ?>
		<tr>
			<div><td><?= $post["id"] ?></td></div> 
			<div><td><?= $post["titulo"] ?></td></div>
			<div><td><?= $post["descricao"] ?></td></div>
			<td>
				<div><a href="view.php?id=<?= $post["id"] ?>">Ver</a></div> 

                <div> <a href="editar.php?id=<?= $post["id"] ?>">Editar</a></div>

			    <div><a href="deletar.php?id=<?= $post["id"] ?>">X</a></div>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
	</table>


