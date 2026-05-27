<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessão do Usuário</title>
</head>
<body>
<?php 
session_start();


$_SESSION['nome'] = "admin";


?>

<p>
	<label>Bem-vindo, usuário: </label>
	<?php echo $_SESSION['nome']; ?>
</p>

<p>
	<label>ID do usuário: </label>
	<?php echo session_id(); ?>
</p>

</body>
</html>
