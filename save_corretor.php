<?php
$servername = "localhost";
$username = "root"; // Usuário padrão do XAMPP
$password = ""; // Senha padrão do XAMPP
$dbname = "corretores_db";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$cpf = $_POST['cpf'];
$creci = $_POST['creci'];

if ($id) {
    $sql = "UPDATE corretores SET name='$name', cpf='$cpf', creci='$creci' WHERE id=$id";
} else {
    $sql = "INSERT INTO corretores (name, cpf, creci) VALUES ('$name', '$cpf', '$creci')";
}

if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
exit();
?>
