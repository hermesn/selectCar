<?php
	include("conexao.php");
try{
	$nome = $_POST["nameUsu"];
	$email = $_POST["emailUsu"];
	$telefone = $_POST["telUsu"];
	$senha = $_POST["senha"];
	$perfil = "usuario";

		$stmt = $conexao->prepare("insert into usuario(nome,email,telefone,senha,perfil) values(?,?,?,?,?)");
		$stmt->bindParam(1,$nome);
		$stmt->bindParam(2,$email);
		$stmt->bindParam(3,$telefone);
		$stmt->bindParam(4,$senha);
		$stmt->bindParam(5,$perfil); 
		
		$stmt->execute();
		
		}catch(PDOException $e){
		echo $e->getMessage();
	}

try {
	$stmt= $conexao->prepare("select email, senha from usuario where email = ?");
		$stmt->bindParam(1,$email);
		$stmt->execute();
	//	echo "username ".$username;
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(sizeof($resultado) > 0 ){
			foreach ($resultado as $linha) {
				if ($linha["senha"] == $senha){
					if(!isset($_SESSION)){
						session_start();
					}
					$_SESSION["email"] = $username;
					$_SESSION["senha"] = $linha["senha"];
					
					echo "<script>window.location='index.php';</script>";
				}
				
			}
		}
	}catch(PDOException $e){
		echo $e->getMessage();
	}


?>
