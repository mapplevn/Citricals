<?php
include './config.php';

$sql = "SELECT * FROM comentarios ORDER BY data DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['nome'];
        $comment = $row['comentario'];
        $rating = $row['avaliacao'];
        $date = $row['data'];

        echo "<div class='comment'>
                <p class='name'>$name</p>
                <p class='rating'>Avaliação: $rating</p>
                <p>$comment</p>
                <p class='date'>$date</p>
            </div>";
    }
} else {
    echo "Nenhum comentário encontrado.";
}

$conn->close();
?>
