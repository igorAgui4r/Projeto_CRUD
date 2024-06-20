<?php
    require("conecta.php");

    $nome = $_POST['nome'];
    $sobrenome =  $_POST['sobrenome'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $obs = $_POST['obs'];
    $turno = $_POST['turno'];
    $material = $_POST['material'];
    $sql = "INSERT INTO dev (nome, sobrenome, email, curso, turno, material, obs)
    VALUES ('$nome', '$sobrenome', '$email', '$curso', '$turno', '$material', '$obs')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Aluno cadastrado com sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>
