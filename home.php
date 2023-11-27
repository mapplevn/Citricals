<?php
session_start();
if ((!isset($_SESSION['email']) ==  true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: index.php');
}
$logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/slides.css">
    <link rel="shortcut icon" href="./images/orange_food_fruit_icon_182571.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <title>Página Inicial</title>
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

     <div class="slider">

        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <input type="radio" name="radio-btn" id="radio6">
            <input type="radio" name="radio-btn" id="radio7">





            <div class="slide first">
                <a href="./page/filme5.html"><img src="images/All The Great Things The _Harry Potter_ Movies Added And All The Things They Shouldn't Have.jpeg" alt="image1">
                </a>
            </div>

            <div class="slide">
                <a href="./page/filme2.php">
                    <img src="images/Sen to Chihiro Kamikakushi_Spirited Away.jpeg" alt="image2">
                </a>
            </div>

            <div class="slide">
                <a href=""><img src="images/Pôster Pantera negra elenco.jpeg" alt="image3" >
                </a>
            </div>

            <div class="slide">
                <a href=""><img src="images/baixados.jpeg" alt="image4">
                </a>
            </div>

            <div class="slide">
                <a href=""><img src="images/Spencer 2021.jpeg" alt="image5">
                </a>
            </div>

            <div class="slide">
                <a href=""><img src="images/Vingadores - Ultimato.jpeg" alt="image6">
                </a>
            </div>

            <div class="slide">
                <a href=""><img src="images/150 Must-See Anime Movies To Add To Your List.jpeg" alt="image7">
                </a>
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
                <div class="auto-btn6"></div>
                <div class="auto-btn7"></div>
            </div>

        </div>

        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
            <label for="radio6" class="manual-btn"></label>
            <label for="radio7" class="manual-btn"></label>

        </div>

     </div>
    
    <script src="./js/slide.js"></script>
    <script src="./js/home.js" defer></script>
</body>
</html>