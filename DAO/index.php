<?php 

require_once("config.php");

	/*$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);*/

		/*CARREGA UM USUARIO PELO ID
		$root = new Usuario();
		$root->loadbyId(4);
		echo $root; */

			//CARREGA UMA LISTA DE USUARIOS
			//$lista = Usuario::getList();
			//echo json_encode($lista);


				//PROCURANDO NA LISTA
				// $search = Usuario::search("io");
				// echo json_encode($search);

					//CARREGA USUARIO USANDO LOGIN E SENHA
					//$usuario = new Usuario();
					//$usuario->login("lucasrosario","car123");
					//echo $usuario;

	//INSERINDO UM NOVO USUARIO
	//$aluno = new Usuario("aluno5", "@aluno05");
	//$aluno->insert();
	//echo $aluno;

		//ATUALIZANDO LINHA
		//$usuario = new Usuario
		//$usuario->loadbyId(8);
		//$usuario->update("professor", "!@#$%");
		//echo $usuario;

			//DELETANDO USUARIO
			//$usuario = new Usuario;
			//$usuario->loadbyId(9);
			//$usuario->delete();
			//echo $usuario;

?>