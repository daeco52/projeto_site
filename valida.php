<?php

session_start();
include_once("conexao.php");


$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if($btnLogin){
	//echo "Tentar Logar";
	
	$usuario =  filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	 
	 //echo "$usuario - $senha";
	 
	 if((!empty($usuario)) AND (!empty($senha))){
		 //Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: admin.php");
			}else{
				$_SESSION['msg'] = "Login e Senha Incorretos!";
	            header("Location: contato.php"); 
				
			}
	
	 }else{
		$_SESSION['msg'] = "Login e Senha Incorretos!";
	    header("Location: contato.php"); 
	 }
	
}else{
	
	$_SESSION['msg'] = "Página Não Encontrada";
	header("Location: contato.php");
}


}



