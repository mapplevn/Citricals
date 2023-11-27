<?php
    include "./salvar_avaliacao.php";


    
$sql = "SELECT * FROM avaliacoes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comentario'>";
        echo "<p>Nome: " . $row['nome'] . "</p>";
        echo "<p>Avaliação: " . $row['ratings'] . "/5</p>";
        echo "<p>Comentário: " . $row['comentarios'] . "</p>";
        echo "</div>";
    }
} else {
    echo "Nenhuma avaliação encontrada.";
}
