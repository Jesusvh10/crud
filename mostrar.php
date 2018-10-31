
<?php

require_once('db.class.php');

$objdb= new db();

$newcon = $objdb->conecta_mysql();

$sql = "SELECT * FROM usuarios";
$resalumno = $newcon->query($sql);

  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('header.php');?>
</head>
<body>
<h3>Usuários CRUD</h3>	
<table class="table">
	<tr>
		<th>ID</th>

		<th>usuario</th>

		<th>email</th>

		<th>senha</th>
		<th>editar</th>
		<th>delete</th>

	</tr>
<?php 
while ($mostraralumno = $resalumno->fetch_array(MYSQLI_BOTH)) {
	# code...I
	echo' <tr>
				<td>'.$mostraralumno['id'].'</td>
				<td>'.$mostraralumno['usuario'].'</td>
				<td>'.$mostraralumno['email'].'</td>
				<td>'.$mostraralumno['senha'].'</td>
				<td><a href="inscrevase.php?id='.$mostraralumno['id'].'"><button type="button" class="btn btn-primary">Editar</button></a></td>
				<td><a href="eliminar.php?id='.$mostraralumno['id'].'"><button type="button" class="btn btn-danger">Excluir</button></a></td>



	    </tr>';


	
}




 ?>



</table>









</body>
</html>

