<?php 
	require 'autoloader.php';
	use Model\Usuario;
	use Model\Produto;
	$usuario = new Usuario();
	$usuario->hidratar(array('email'=>'bruno@hotmail.com','senha'=>'1234'));
	
	if($usuario->gravar()){
		echo "Usuário salvo com sucesso";
	}else{
		echo "Não foi possivel salvar usuário";
	}
	
	echo "<br />";

	$produto = new produto();
	$produto->hidratar(array('nome'=>'Roteador','valor'=>'110.00'));
	
	if($produto->gravar()){
		echo "Produto salvo com sucesso";
	}else{
		echo "Não foi possivel salvar produto";
	}
?>