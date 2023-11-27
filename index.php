<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="shortcut icon" href="./images/orange_food_fruit_icon_182571.svg" type="image/x-icon">
    <title>Login Page</title>
</head>
<body>
    <form action="testLogin.php" method="POST">
        <div class="main-login">
            <div class="left-login">
                <h1>
                    <center>CITRICALS<br> Seu site de reviews de filmes e séries!</center>
                </h1>
                <img src="./images/login-page-image.svg" class="left-login-image" alt="animação da página de login">
            </div>
            <div class="right-login"></div>
            <div class="card-login">
                <img src="./images/orange_food_fruit_icon_182571.svg" alt="icon do site">
                <div class="textfield">
                    <label for="usuario">Login</label>
                    <input type="email" name="email" placeholder="Digite seu email aqui" required>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha aqui" required>
                </div>
                <input class="btn-login" type="submit" name="submit" value="Login">
                <div class="submit">
                    <p class="sign">Ainda não se cadastrou? <a href="cadastro.php" class="sign-here">Clique aqui!</a></p>
                </div>
            </div>
        </div>
    </form>
</body>

</html>