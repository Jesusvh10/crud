<?php

require_once('db.class.php');
$objdb = new db();
$link = $objdb->conecta_mysql();

	if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql = "DELETE FROM usuarios WHERE id = $id";

if(mysqli_query($link, $sql)){
        echo "Usuário excluido  com sucesso!";
    }else{
        echo "Erro ao excluir o usuário!";
    }
	


	}



  ?>