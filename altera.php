<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Informações do Aluno</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <center>
        <h1>Alterar Informações do Aluno</h1>
        <form method="POST" action="atualiza.php">
            <label for="email">Digite o email do aluno que deseja alterar:</label>
            <input type="email" name="email" required><br><br>
            <label for="nome">Novo Nome:</label>
            <input type="text" name="nome" required><br><br>
            <label for="sobrenome">Novo Sobrenome:</label>
            <input type="text" name="sobrenome" required><br><br>
            <label for="devweb">Novo Turno:</label><br>
            <input type="radio" name="turno" value="manha"> Manhã
            <input type="radio" name="turno" value="tarde"> Tarde
            <input type="radio" name="turno" value="noite"> Noite<br><br>
            <label for="obs">Novas Observações:</label><br>
            <textarea name="obs" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Atualizar">
        </form>
        <br>
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>
