<?php
$servename ="localhost";
$username = "root";
$password ="";
$dbname ="sistema";

try{
    $conn = new PDO("mysql:host=$servename;dbname=$dbname",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOexception $erro){
    echo "Erro na conexão: " . $erro->getMessage();
}
?>