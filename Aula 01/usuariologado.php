<?php

	session_start();
	if (isset($_SESSION['usuarioLogado'])) 
	{
		echo "Login de boa";
		echo "<br><br>";
		echo "<a href='sair.php'>Sair</a>";
	}
	else
	{
		header('location: index.php');
	}
?>