<?php 
	session_start();
	
	// echo '<pre> bete';
	// print_r($_SESSION);
	// echo '</pre>';
	// //remover indices do array de sessao 
	// //unset 

	// unset($_SESSION['x']); // ao passar de novo ele tem inteligencia para remover o indice apenas se existir, evitando o erro 
	
	// echo "<pre>";	
	// print_r($_SESSION);
	// echo '</pre>';

	// //destruir a variavel de sessao 
	// //session_destroy()

	// session_destroy(); // sera destruida e somente na proxima requisição as variaves de sessão nao irao existir
	// //necessario forçar um redirecionamento 

	// echo "<pre>";	
	// print_r($_SESSION);
	// echo '</pre>';

	session_destroy();
	header('Location: index.php');
?>