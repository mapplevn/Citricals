<?php

    include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/search.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="nav">
        <a href="#" class="title">Citricals</a>
        <ul class="nav-links">
            <li><a href="./home.php">Home</a></li>
            <li><a href="./sair.php">Sair</a></li>
        </ul>
        <i class="uil uil-search search-icon" id="searchIcon"></i>
        <form action="search.php" method="POST">
            <div class="search-box">
                <i class="uil uil-search search-icon"></i>
                <input type="text" placeholder="O que deseja procurar?">
            </div>
        </form>
     </nav>
    <div class="article-container">
        <?php
        
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM articles WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search' OR a_author LIKE '%$search%' OR a__date LIKE '%$search%' ";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo " <a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                        <p>".$row['a_date']."</p>
                        <p>".$row['a_author']."</p>
                        </div></a>";
                }
            } else {
                echo "Não existem resultados para esta pesquisa";
            }
        }
        ?>
    </div>
    <script src="./js/home.js" defer></script>
</body>
</html>