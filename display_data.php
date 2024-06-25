<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corretores_db";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, cpf, creci FROM corretores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir dados em uma tabela HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["cpf"] . "</td>
                <td>" . $row["creci"] . "</td>
                <td>
                    <a href='save_corretor.php?id=" . $row["id"] . "' onclick='return confirm(\"Atualizar registro?\")'>
                    <button onclick='editRecord(" . $row["id"] . ")'>Edit</button>
                    </a>
                    <a href='delete_corretor.php?id=" . $row["id"] . "' onclick='return confirm(\"Tem certeza que deseja deletar este registro?\")'>
                    <button>Delete</button>
                    </a>

                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>0 results</td></tr>";
}
?>