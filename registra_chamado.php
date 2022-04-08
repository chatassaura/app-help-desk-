<?php 
	session_start();

	//criando o arquivo
	$arquivo = fopen('arquivo.hd', 'a');

	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//implode('#', $_POST);

	$texto =  $_SESSION['id'] . '#' . $titulo  . '#' . $categoria . '#' . $descricao . PHP_EOL;

	//escrevendo no arquivo 
	fwrite($arquivo, $texto);
	//fechando o arquivo 
	fclose($arquivo);

	header('Location: abrir_chamado.php');
?>	