<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.1
 * @since 05/11/2023
 */
// Se renauda la sesion existente
session_start();

// Se valida si el usuario ha sido identificado
if (!isset($_SESSION['user204DWESLoginLogoffTema5'])) { 
    // Se redirige al usuario al Login para que se autentifique
    header('Location: Login.php');
    // Termina el programa
    exit();
}

// Se valida si el usuario hace click en el botón 'Volver' 
if (isset($_REQUEST['volver'])) { 
    // Se redirige al usuario al Programa
    header('Location: Programa.php'); 
    // Termina el programa
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link rel="icon" type="image/x-icon" href="../webroot/image/flora.png">
    <title>Rebeca Sánchez Pérez</title>
</head>

<body>
    <header class="detalle">
        <h1>Detalle</h1>
    </header>
    <main  class="mainDetalle">
        <div class="ejercicio ejercicioDetalle">
            <!-- Se crea un formulario tipo post para agregar la opcion de busqueda-->
            <form name="programa" action="<?php echo $_SERVER['PHP_SELF'];?>" id="formDetalle" method="post">
                <input type="submit" form="formDetalle" value="Volver" name="volver" class="botonDetalle">
            </form>
        </div>
        <?php
            // $_SESSION
            echo('<div class="ejercicio">');
            echo('<h3>$_SESSION</h3>');
            foreach ($_SESSION as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_COOKIE
            echo('<div class="ejercicio">');
            echo('<h3>$_COOKIE</h3>');
            foreach ($_COOKIE as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_SERVER
            echo('<div class="ejercicio">');
            echo('<h3>$_SERVER</h3>');
            foreach ($_SERVER as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');
            
            // $GLOBALS
            echo('<div class="ejercicio">');
            echo('<h3>$GLOBALS</h3>');
            foreach ($GLOBALS as $key => $valor) {
                foreach ($valor as $clave => $valor2) {
                    echo('<u>'.$clave.'</u> => <b>'.$valor2.'</b><br>');
                }
            }
            echo('</div>');

            // $_GET
            echo('<div class="ejercicio">');
            echo('<h3>$_GET</h3>');
            foreach ($_GET as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_POST
            echo('<div class="ejercicio">');
            echo('<h3>$_POST</h3>');
            foreach ($_POST as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_FILES
            echo('<div class="ejercicio">');
            echo('<h3>$_FILES</h3>');
            foreach ($_FILES as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_REQUEST
            echo('<div class="ejercicio">');
            echo('<h3>$_REQUEST</h3>');
            foreach ($_REQUEST as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');

            // $_ENV
            echo('<div class="ejercicio">');
            echo('<h3>$_ENV</h3>');
            foreach ($_ENV as $key => $valor) {
                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
            }
            echo('</div>');
            
            // Se muestra en pantalla la información de PHP de nuestro servidor
            phpinfo();
        ?>
    </main>
    <footer>
        <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../../index.html">Rebeca Sánchez Pérez</a></div>
        <div id="fotos">
            <a href="https://github.com/Ebenclaw/204DWESLoginLogoffTema5" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
            <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="../webroot/image/sauces.png" alt="Sauces"></a>
            <a href="../indexLoginLogoffTema5ES.php"><img id="home" src="../webroot/image/home.png" alt="Inicio"></a>
    </footer>
</body>

</html>


