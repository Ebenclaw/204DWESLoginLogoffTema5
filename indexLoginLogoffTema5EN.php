<?php
// Se comprueba si esta declarada la cookie del idioma
if (!isset($_COOKIE['idioma'])) { 
    // Si no está declarada, se pone por defecto el valor de ES (español)
    setcookie('idioma', 'ES', time() + 2592000); 
}

// Se comprueba si se ha pulsado algun boton de idioma
if(isset($_REQUEST['idioma'])) {
    // Si se ha pulsado una bandera, se declara una cookie con el valor del idioma seleccionado
    setcookie( 'idioma', $_REQUEST['idioma'], time() + 2592000);
    // Si comprueba el idioma seleccionado
    if($_REQUEST['idioma']=='EN'){
        // Si el idioma seleccionado es ingles, se redirige la pagina al index en ingles
        header('Location: indexLoginLogoffTema5EN.php');
        exit();
    }elseif($_REQUEST['idioma']=='ES'){
        // Si el idioma seleccionado es español, se redirige la pagina al index en español
        header('Location: indexLoginLogoffTema5ES.php');
        exit();
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="webroot/css/style.css">
        <link rel="icon" type="image/x-icon" href="/webroot/image/flora.png">
        <title>Rebeca Sánchez Pérez</title>
    </head>

    <body>
        <header>
            <p id="pTitulo">Wellcome to my app</p>
            <h1>Login Logoff</h1>
        </header>
        <main class="main1">         
            <div class="container">
                <ul class="listaIndex">
                    <li>
                        <form name="index" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formIndex" method="post">
                            <button type="submit" value="ES" name="idioma"><img src="webroot/image/español.png" alt="esp" class="fotoIdioma"></button>
                            <button type="submit" value="EN" name="idioma"><img src="webroot/image/ingles.png" alt="eng" class="fotoIdioma"></button>
                        </form>
                    </li>
                    <li></li>
                    <li><a class="botonInicioSesion" href="codigoPHP/LoginEN.php">Log in</a></li>
                </ul>
                <img src="webroot/image/esquema.PNG" alt="alt"/>
            </div>
        </main>
        <footer>
            <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../index.html">Rebeca Sánchez Pérez</a></div>
            <div id="fotos">
                <a href="https://github.com/Ebenclaw/204DWESLoginLogoffTema5" target="_blank"><img id="git" src="webroot/image/GitHub.png" alt="GitHub"></a>
                <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="webroot/image/sauces.png" alt="Sauces"></a>
                <a href="../204DWESProyectoDWES/indexProyectoDWES.php"><img id="home" src="webroot/image/home.png" alt="Inicio"></a>
            </div>
        </footer>
    </body>

</html>



