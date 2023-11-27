<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'citricalsdb';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $avaliacao = $_POST['ratings'];
    $comentario = $_POST['comentarios'];

    $sql = "INSERT INTO avaliacoes (item_id, ratings, comentarios) VALUES (1, $avaliacao, '$comentario')";

    if ($conn->query($sql) === TRUE) {
        echo "Avaliação salva com sucesso!";
    } else {
        echo "Erro ao salvar avaliação: " . $conn->error;
    }
}

$conn->close();
?>
