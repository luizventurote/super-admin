<!doctype html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="description" content="Painel do sistema">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icons -->
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- Style -->
        <link rel="stylesheet" href="css/style.min.css">

        <!-- Modernizr -->
        <script src="lib/js/modernizr.js"></script>

    </head>
    <body class="login-page">

        <main >

            <div class="content-box-center">

                <div class="col-sm-12">

                    <h1 class="login-logo">EasyDocs</h1>

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title">Área de Administração</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="user_op"><i class="fa fa-user"></i> Usuário</label>
                                <input type="email" class="form-control" id="user_op" placeholder="Digite o seu e-mail">
                            </div>

                            <div class="form-group">
                                <label for="user_op"><i class="fa fa-lock"></i> Senha</label>
                                <input type="password" class="form-control" id="user_op" placeholder="Digite sua senha">
                            </div>

                            <button type="button" class="btn btn-default panel-btn">Entrar</button>

                            <div class="input-group">
                                <div class="checkbox">
                                    <label><input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar senha</label>
                                </div>
                                <a class="forgot-pass" href="#">Esqueceu sua senha?</a>
                            </div>                            

                        </div>
                    </div>
                </div>

            </div>

        </main>
        
        <script src="js/main.min.js"></script>

    </body>
</html>