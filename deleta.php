<?php
    include("conexao.php");

	try{
		$login= $_POST["login"];

		$stmt = $conexao->prepare("delete from usuario where email= ?");

		$stmt->bindParam(1,$login);

		$stmt->execute();

		if($stmt->rowCount() > 0 )
			echo "<script>window.location='index.html';</script>"; 
		else
			echo "<script>alert('Não foi possível realizar a exclusão.')";
		

	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>