<?php
	try{
	 $conexao = new PDO("mysql:host=localhost;dbname=selectcar","root","#n3t020iB");
	 
	 
	 $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>
