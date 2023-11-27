<?php
include './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];
    $date = date('Y-m-d');

    $sql = "INSERT INTO comentarios (nome, comentario, avaliacao, data) VALUES ('$name', '$comment', '$rating', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Comentário salvo com sucesso";
    } else {
        echo "Erro ao salvar o comentário: " . $conn->error;
    }
}

$conn->close();
?>

