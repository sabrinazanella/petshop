<?php

	//Capturei as informações do formulário
	$nomepet = $_POST['nomepet'];
	$nomedono = $_POST['nomedono'];
	$telefone = $_POST['telefone'];
	
	//Abrindo conexão com o BD
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO animais (nomepet, nomedono, telefone) 
			VALUE ('$nomepet', '$nomedono', '$telefone')";
			
	$texto = "Animalzinho Inserido com Sucesso<br>";
	
	include('rodape_conexao.php');
?>