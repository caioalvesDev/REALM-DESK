<?php

	session_start();


	//estamos trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);
	date_default_timezone_set('America/Sao_Paulo');
	$data = Date('d/m/Y H:i', time());

	//implode('#', $_POST);

	if (!$_POST['titulo'] || !$_POST['categoria'] || !$_POST['descricao'])  {

		$_SESSION['status'] = false;
		header('Location: abrir_chamado.php');
		die();
	}

	$texto = $_SESSION['id'] . '#' . $titulo . '# ' . $categoria . '#' . $descricao . '#'. $data . PHP_EOL;


	//abrindo o arquivo
	$arquivo = fopen(__DIR__.'/arquivo.hd', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	

	if (isset($_POST['submit'])) {
		$_SESSION['status'] = true;
		header('Location: abrir_chamado.php');
	}

?>