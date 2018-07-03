<!DOCTYPE html>
<html>
	<body>
		<?php
			if(!isset($_SESSION)){
				session_start();
				echo "Seja bem-vindo: ".$_SESSION["email"]." Você está logado como ".$_SESSION["email"];

				
			}
		?>
		<br> <br>
		<a href="logout.php">Sair</a>
	</body>
</html>
