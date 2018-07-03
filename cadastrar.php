<?php
try{

include("conexao.php");

$data = explode("/", $POST["dataNasc"]);
$dataNasc = $data[0]."-".$data[1]."-".$data[2];
$nome = $_POST["nameUsu"];
$email = $_POST["emailUsu"];
$telefone = $_POST["telUsu"];
$senha = $_POST["senha"];

$stmt = $conexao->prepare("insert into usuario (email,nome,telefone,senha) values(?,?,?,?)");

$stmt->bindParam(1,$email);
$stmt->bindParam(2,$nome);
$stmt->bindParam(3,$telefone);
$stmt->bindParam(4,$senha);

$stmt->execute();

	echo "<script>window.location='index.php';</script>";
	}
	

}catch(PDOException $e){

echo "Ocorreu um erro ao tentar executar, favor entrar em contato com nosso suporte";
 echo $e->getMessage(); echo $e->getCode();


}

?>
