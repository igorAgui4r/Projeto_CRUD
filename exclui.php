<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Aluno</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <center>
        <h1>Excluir Aluno</h1>
        <form method="POST" action="deleta.php">
            <label for="email">Digite o email do aluno que deseja excluir:</label>
            <input type="email" name="email" required><br><br>
            <input type="submit" value="Excluir">
        </form>
        <br>
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>
