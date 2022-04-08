<?php 
	 session_start();
	 print_r($_SESSION);
	 echo '<hr>';
	//usuario do sistema 
	// print_r($_GET);

	// echo "<br>";
	// echo $_GET['email'];
	// echo "<br>";
	// echo $_GET['senha'];

	// print_r($_POST);
	// echo "<br>";
	// echo $_POST['email'];
	// echo "<br>";
	// echo $_POST['senha'];
	
	$usuarios_autenticado = false;
	$usuario_perfil_id = null;

	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
		array('id' => 3, 'email' => 'fefe@teste.com', 'senha' => '123', 'perfil_id' => 1),
		array('id' => 4, 'email' => 'maria@teste.com', 'senha' => '123', 'perfil_id' => 2)
	);	
	
	foreach ($usuarios_app as $user) {
		print_r($user);
	}
	foreach ($usuarios_app as $user) {
		if ($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']) {
			$usuarios_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}

	if ($usuarios_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	}
	else
	{
		header('Location: index.php?login=erro');
		$_SESSION['autenticado'] = 'NAO';
	}
?>