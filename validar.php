<?php

require_once('db.class.php');

$objdb = new db();
$link= $objdb->conecta_mysql();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

$resultado_id = mysqli_query($link, $sql);



if ($resultado_id) {
	$dados_usuario = mysqli_fetch_array($resultado_id);

	if(isset($dados_usuario['usuario'])){
		echo "el usuario existe";
	}
	else{
		header('Location: index.php?erro=1');
	}

}

else{
echo "error na excucao da consulta, favor ";

}




  ?>