<?php
include_once("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$verifica_produto = $pdo->prepare("SELECT email FROM usuario WHERE email = :p");
$verifica_produto = $pdo->prepare("SELECT senha FROM usuario WHERE senha = :p");
$verifica_produto->bindValue(":p", $email);
$verifica_produto->bindValue(":p", $senha);
$verifica_produto->execute();
$count = $verifica_produto->rowCount();

if($count == 0){
    $pdo->query("SELECT email FROM usuario WHERE email = $email");
    $pdo->query("SELECT senha FROM usuario WHERE senha = $senha");
    header('Location:erro.php');
     
}
else{
    header('Location:http://coldimpact3.wordpress.com');  
} 
?>