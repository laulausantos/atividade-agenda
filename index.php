<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda De Eventos da ETEC</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0b1f3a;
            margin: 0;
            padding: 0;
            color: #ffffff;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #ffffff;
        }

        h2 {
            text-align: center;
            color: #a9c9ff;
        }

        form {
            background-color: #132f57;
            max-width: 400px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }

        label {
            font-weight: bold;
            color: #cfe2ff;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #2a4d80;
            border-radius: 5px;
            background-color: #0b1f3a;
            color: white;
        }

        input:focus {
            border-color: #4da3ff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #1f4e8c;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #163a6b;
        }
</style>
</head>
<body>
    <h1>Agenda de Eventos da ETEC</h1>

    <h2>Consultar Eventos</h2>
    <form action="api.php?metodo=post" method="POST">
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