<?php
 require_once './config.php';

  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $calendario = $_POST['calendario'];
  $telefone = $_POST['telefone'];
  $horario = $_POST['horario'];
  

  $sql = "INSERT INTO usuarios (nome, cpf, email, calendario, telefone, horario) VALUES (:nome, :cpf, :email, :calendario, :telefone, :horario)";
  $stmt = $conn->prepare($sql);
  $stmt-> bindValue(':nome', $nome);
  $stmt-> bindValue(':cpf', $cpf);
  $stmt-> bindValue(':email', $email);
  $stmt-> bindValue(':calendario', $calendario);
  $stmt-> bindValue(':telefone', $telefone);
  $stmt-> bindValue(':horario', $horario);
  $stmt-> execute();

  if($stmt->rowCount() > 0){
    header("Location: ../index.php");
  }else{
    echo "Erro ao tentar adicionar informações";
  }
?>
