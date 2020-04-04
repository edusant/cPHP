<?php



session_start();

if (isset($_SESSION['usuarioLogado'])) {
	unset($_SESSION['usuarioLogado']);

}
header('location: index.php');