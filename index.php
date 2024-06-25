<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Corretor Form</title>
    <style>
        /* Estilos */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form id="corretorForm" action="save_corretor.php" method="post">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required minlength="11" maxlength="11">
        <br>
        <label for="creci">Creci:</label>
        <input type="text" id="creci" name="creci" required minlength="2">
        <br>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required minlength="2">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <table id="corretoresTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Creci</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'display_data.php'; ?>
        </tbody>
    </table>
    <script src="form_validation.js"></script>
</body>
</html>
