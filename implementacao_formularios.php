<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>implementação_fomularios</title>
<?php  

session_start();
?></head>
<body>



<b>formulario:</b><?php $_SESSION['nome'] ?>, logado com sucesso<br>
<b>data de conexão</b><?php echo date("d/m/y") ?> <br>
<b>data de conexão</b><?php echo date("h:i:s") ?> <br>


<a href="sessao_formulario_vaslido.php">area do adiministrador</a>

</body>
</html>