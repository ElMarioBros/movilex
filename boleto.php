<?php

    //include('phpqrcode/qrlib.php');

    //$ruta = 'QR_img/';
    //$archivo = $ruta.uniqid().'.png';
    //$boleto_ID = '12345';


    //QRcode::png($boleto_ID,$archivo,'L',10); 


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/13c822f27c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilo.css">
        <title>MigGo</title>
    </head>
    <body>
        <nav>
            <p>MigGo</p>
        </nav>
        <main>
            <div class="boleto">
                    <center><img src='QR_img/qr.jpeg'></center>
            </div>
            <div class="controles-boleto">
                <a href="home.php" class="boton">Volver</a>
            </div>
        </main>
    </body>
</html>