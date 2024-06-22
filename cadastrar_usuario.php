<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo $nome."<BR>";
    echo $email."<br>";
    echo $senha. "<br>";

    $verifica_produto = $pdo->prepare("SELECT email FROM usuario WHERE email = :p");
    $verifica_produto->bindValue(":p", $email);
    $verifica_produto->execute();
    $count = $verifica_produto->rowCount();
    //echo "<br>cadastro-20  variavel $count";
    if($count == 0){
        $pdo->query("INSERT INTO usuario(nome, email, senha) VALUES('$nome','$email','$senha')");
        echo"<br>Cadastro realizado com sucesso";
         header('Location:login.html');
    }
    else{
        echo"Usuário ja cadastrado";    
    } 
    
?>