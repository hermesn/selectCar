<?php
	include("login.php");
	
	$usu = "usuario";
	$adm = "administrador";
	$loc = "locadora";
	try{
		include("conexao.php");

		$stmt= $conexao->prepare("select perfil from usuario where email = ?");
		$stmt->bindParam(1,$username);
		$stmt->execute();
		
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(sizeof($resultado) > 0 ){
			foreach ($resultado as $linha) {
				if ($linha["perfil"] == $adm){
					if(!isset($_SESSION)){
						session_start();
					}
					$_SESSION["email"] = $username;
					$_SESSION["senha"] = $linha["senha"];
					//echo "username ".$username;
					echo "<script>window.location='page.php';</script>";
				}elseif($linha["perfil"] == $usu){
					if(!isset($_SESSION)){
						session_start();
					}
					$_SESSION["email"] = $username;
					$_SESSION["senha"] = $linha["senha"];
					//echo "username ".$username;
					echo "<script>window.location='index.php';</script>";
				}elseif($linha["perfil"] == $loc){
					if(!isset($_SESSION)){
						session_start();
					}
					$_SESSION["email"] = $username;
					$_SESSION["senha"] = $linha["senha"];
					//echo "username ".$username;
					echo "<script>window.location='loc.php';</script>";
				}
				
			}
		}
	

	}	catch(PDOException $e){
		$e->getMessage();
	}	

?>
