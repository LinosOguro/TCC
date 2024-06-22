<?php
//echo "<br> Conexao-2 entrou na conexao";
try{
    $pdo = new PDO('mysql:dbname=site;host=localhost','root','');
	//echo "<BR>conexao-5 $ pdo";
    
} catch (PDOException $e) {
    print "Erro: " . $e->getMessage() . "<br>";
    die();
}

?>