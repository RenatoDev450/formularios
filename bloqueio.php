<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueio de Página</title>
</head>
<body>
	<?php 
	session_start();
	$_SESSION['nome'] = $_POST['nome'];
	$_SESSION['senha'] = $_POST['senha'];
	?>

	<p><b>Funcionário:</b> <?php echo $_SESSION['nome']; ?>, logado com sucesso!</p>
	<p><b>Data de conexão:</b> <?php echo date('d/m/Y'); ?></p>
	<p><b>Hora de conexão:</b> <?php echo date('H:i:s'); ?></p>

	<p><a href="sessao_verificar.php">Área do Administrador</a></p>
</body>
</html>
