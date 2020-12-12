<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <title>Mensajes</title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <nav>
        <div class="nav-wrapper black">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Inicio</a></li>
                <li><a href="badges.html">Mensaje</a></li>
                <li><a href="collapsible.html">Login</a></li>
            </ul>
        </div>
    </nav>

    <br>
    <form action="index.php" method="post">
        <div class="container">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Para" name="Para" type="text" class="validate" required>
                    <label for="Para"> Para</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Asunto" name="Asunto" type="text" class="validate" required>
                    <label for="Asunto"> Asunto</label>
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="Mensaje" class="materialize-textarea"></textarea>
                        <label for="Mensaje">Mensaje</label>
                    </div>
                </div>

            </div>
            <button type="submit" name="btnEnviar" class="btn black">Enviar Mensajes</button>
    </form>
    </div>

    <?php
    error_reporting(0);
    $enviar = $_POST['btnEnviar'];
    $Para = $_POST['Para'];
    $Asunto = $_POST['Asunto'];
    $Mensaje = $_POST['Mensaje'];
    
    if (isset($enviar)) {
        if (mail($Para,$Asunto,$Mensaje)) {
            echo "mensaje enviado";
        } else {
            echo "mensaje no enviado";
        }
    }
    ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>