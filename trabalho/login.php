
	<?php
	session_start();
	//RECEBER OS DADOS DE POST DO FORM DE LOGIN
	if (isset($_POST['usuario']) and isset($_POST['senha'])) {
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	//VERIFICAR SE ESTÃO CERTOS
	//SE ESTIVER CERTO - CRIAR SESSAO E ARMAZENAR VALORES NELA E REDIRECIONA
	if ($usuario=='admin' and $senha=='1234'){
		$_SESSION['nome'] = 'Administrador';
		$_SESSION['tipo'] = 'a';
		header("Location: index.php");

	} else{//SENÃO - MENSAGEM DE ERRO E REDIRECIONA
		echo 'Dados incorretos';
	}

	} else{ //CASO UM DOS DOIS NÃO ESTEJA SETADO
	echo 'Preencha usuário e senha';
	}

	?>





