<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['titulo'];
		$lastname = $_POST['descricao'];
		$address = $_POST['observacao'];
		$sql = "UPDATE script SET titulo = '$firstname', descricao = '$lastname', observacao = '$address' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = ' Script atualizado com Sucesso!!';
		}
			
		else{
			$_SESSION['error'] = 'Error a atualizar o script';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>