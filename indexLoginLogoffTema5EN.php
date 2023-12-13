<?php
if( $_REQUEST['es'] ) {
    $lang = 'es';
    setcookie( 'lang', $lang, time() +3600 );
} elseif( $_REQUEST['en']) {
    $lang = 'en';
    header("Location: indexLoginLogoffTema5EN.php");
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
                            <input type="image" name="es" form="formIndex" class="fotoIdioma" src="webroot/image/español.png" alt="Idioma Español">
                            <input type="image" name="en" form="formIndex" class="fotoIdioma" src="webroot/image/ingles.png" alt="Idioma Ingles">
                        </form>
                    </li>
                    <li></li>
                    <li><a class="botonInicioSesion" href="codigoPHP/Login.php">Log in</a></li>
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



