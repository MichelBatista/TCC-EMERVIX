<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/css/pages/telaLogin/style.css">


</head>

<body>

    <div class="container" id="container">
        
        <div class="form-container sign-in-container">
            <div class="form">
                <h1 id="titulo">EmerVix</h1>
                <input type="email" placeholder="Email" id="login-email" />
                <input type="password" placeholder="Senha" id="login-senha" />
                <a href="#">Esqueceu sua senha?</a>
                <button id="login-usuario" onclick="logar();">Entrar</button>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Olá de Volta!</h1>
                    <img src="../../assets/img/ambulancia_logo.svg" style="width: 250px;">
                    <p>Insirida seus dados de login ao lado para prosseguir com exito!</p>
                </div>
            </div>
        </div>
    </div>

    

    <script src="../../assets/js/pages/telaLogin/script.js"></script>
    <!-- JS JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>