<?php 

require_once('db.class.php');
$objDb = new db();
$link = $objDb->conecta_mysql();

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if($id){
	//aqui atualiza
	$sql = " UPDATE usuarios 
			SET usuario = '$usuario', email = '$email'  , senha = '$senha' WHERE id = '$id'" ;

if(mysqli_query($link, $sql)){
        echo "Usuário atualizado  com sucesso!";
    }else{
        echo "Erro ao atualizar o usuário!";
    }

}else{
	$sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario',' $email','$senha')";

 	if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "Erro ao registrar o usuário!";
    }
} 

/*




*/

 ?>

