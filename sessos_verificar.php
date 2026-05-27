<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verificar Sessões</title>
</head>
<body>
<?php  
session_start();
if (!isset($_SESSION['nome']) || $_SESSION['nome'] != "master") {
	session_destroy();
	header("Location: bloqueio.php");
	exit();
}
?>

<b>Página autorizada!!!</b>
</body>
</html>
