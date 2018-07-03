<?php
try{

include("conexao.php");

$nome = $_GET["nameUsu"];
$email = $_GET["emailUsu"];
$telefone = $_GET["telUsu"];
$senha = $_GET["senha"];

$stmt = $conexao->prepare("insert into usuario (email,nome,telefone,senha) values(?,?,?,?)");

$stmt->bindParam(1,$email);
$stmt->bindParam(2,$nome);
$stmt->bindParam(3,$telefone);
$stmt->bindParam(4,$senha);

$stmt->execute();

$query = $conexao->query("select email, nome,telefone,senha from usuario");

	}catch(PDOException $e){

//echo "Ocorreu um erro ao tentar executar, favor entrar em contato com nosso suporte";
 echo $e->getMessage(); echo $e->getCode();


}

?>
