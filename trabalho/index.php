<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<ul>
			<li><a href="produtos.php?categoria=1&nome=eletronico">Eletrônicos</a></li>
			<li><a href="produtos.php?categoria=2&nome=esporte">Esportes</a></li>
			<li><a href="produtos.php?categoria=3&nome=moveis">Móveis</a></li>
			<li><a href="produtos.php?categoria=4&nome=roupas">Roupas</a></li>

		</ul>
		
	

		<form method="post" action="produtos.php">
			Busca
			<input type="text" name="busca">
			<input type="submit" value="enviar" >
		</form>
<br>


<?php 
	if (isset($_SESSION['nome']) AND $_SESSION['tipo'] == 'a') {
	?><p>Olá Administrador | <a href="logout.php>">Sair</a></p>
	<?php  }else{
?>
 		<form method="post" action="login.php">
			<input type="text" name="usuario" placeholder="Nome de usuário"/>
			<input type="password" name="senha" placeholder="Senha">
			<input type="submit" name="entrar">
		</form>
	<?php  
} //FIM DO ELSE?>




</body>
</html>