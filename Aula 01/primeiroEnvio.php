<?php

	$usuario = $_POST['usuario'];

	$senha = $_POST['senha'];


	$senhaAdm = '12345';
	$usuarioAdm = 'root';


	$$usuario = 'Adm';


	if ($senha == $senhaAdm && $usuario == $usuarioAdm) 
	{
		session_start();
		echo "Login feito com sucesso";
		$_SESSION['usuarioLogado'] = true;
		header('location: usuariologado.php');
	}
	else
	{
		echo "Senha ou usuario errado";
		header('location: index.php');
	}

	// $nome = "Eduardo";
	// $$nome = " phpero";
	// echo $Eduardo;


?>