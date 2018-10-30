
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
</head>
<body>
<table>
	<tr>
		<th>ID</th>

		<th>usuario</th>

		<th>email</th>

		<th>senha</th>

	</tr>
<?php 
while ($mostraralumno = $resalumno->fetch_array(MYSQLI_BOTH)) {
	# code...
	echo' <tr>
				<td>'.$mostraralumno['id'].'</td>
				<td>'.$mostraralumno['usuario'].'</td>
				<td>'.$mostraralumno['email'].'</td>
				<td>'.$mostraralumno['senha'].'</td>


	    </tr>';


	
}




 ?>



</table>









</body>
</html>

