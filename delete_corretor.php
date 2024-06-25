<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corretores_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_GET['id'];

$sql = "DELETE FROM corretores WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
exit();
?>
