<?php

    if (isset($_POST['user'])){
        $user = $_POST['user'];
        $user = strtolower($user);
        $pass = $_POST['pass'];
        if($user == "abraham" and $pass == '12345678'){
            header('Location: home.php');
        }else{
            $message = "Por favor verifique sus datos de ingreso";
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MigGo</title>
        <script src="https://kit.fontawesome.com/13c822f27c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-info is-fullheight">
            <div class="hero-body">
                <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        
                    <form action="index.php" method="post" class="box">
                        <?php
                            if(isset($message)){
                                echo "
                                    <div class='notification is-warning'>
                                        $message
                                    </div>
                                ";
                            }
                        ?>
                        <div class="field">
                        <label for="" class="label">Usuario</label>
                        <div class="control has-icons-left">
                            <input type="text" placeholder="usuario" class="input" name="user" required>
                            <span class="icon is-small is-left">
                            <i class="fa fa-user"></i>
                            </span>
                        </div>
                        </div>
                        <div class="field">
                        <label for="" class="label">Contraseña</label>
                        <div class="control has-icons-left">
                            <input type="password" placeholder="*******" class="input" name="pass" required>
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        </div>
                        <div class="field">
                        <button class="button is-link">
                            Iniciar Sesión
                        </button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </body>
</html>