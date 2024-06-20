<?php
    require("conecta.php");

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $devweb = $_POST['curso'];
    $experiencia = $_POST['obs'];

    $sql = "UPDATE dev SET nome='$nome', sobrenome='$sobrenome', curso='$curso', obs='$obs' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Registro Atualizado com Sucesso</h1>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
