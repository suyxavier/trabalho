

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		//POST//
		//recebe o valor que chegou por POST
	if (isset($_POST['busca'])) {
		$busca = $_POST['busca'];
		echo('<p> Você buscou pelo termo "'.$busca.'" </p>');
	}
		//GET//
	if (isset($_GET['nome'])) {
	$nome = $_GET['nome'];
	echo 'Você escolheu a categoria'.$nome;
	
	}

			
	?>

	
</body>
</html>
