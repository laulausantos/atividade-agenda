<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda ETEC</title>

</head>
<body>

<h1>Agenda de Eventos da ETEC</h1>

<h2>Laura Lima</h2>
<a href="get.php" target="_blank">Verificar eventos</a>

<hr>

<h2>Cadastrar Evento</h2>

<form method="POST" action="post.php">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Data:</label><br>
    <input type="date" name="data" required><br><br>

    <label>Local:</label><br>
    <input type="text" name="local" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>