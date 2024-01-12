<?php
/*
* @author Carlos García Cachón, Rebeca Sánchez Pérez
* @version 1.0
* @since 04/12/2023
*/
// Se renauda la sesion existente
session_start();

// Se valida si el usuario ha sido identificado
if (!isset($_SESSION['user204DWESLoginLogoffTema5'])) { 
    // Se redirige al usuario al Login para que se autentifique
    header('Location: LoginEN.php');
    // Termina el programa
    exit();
}

// Se valida si el usuario hace click en el botón 'Cerrar Sesion' 
if (isset($_REQUEST['cerrarSesion'])) { 
    // Se destruye su sesión
    session_destroy(); 
    // Se redirige al usuario al Login
    header('Location: ../indexLoginLogoffTema5EN.php'); 
    // Termina el programa
    exit();
}

// Se valida si el usuario hace click en el botón 'Detalle' 
if (isset($_REQUEST['detalle'])) {
    // Se redirige al usuario al Login
    header('Location: DetalleEN.php'); 
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
    <header class="programa">
        <?php
        echo('<h1>Program</h1>');
        ?>
        
    </header>
    <main  class="main2">
        <?php
            // Se muestra el mensaje de bienvenida en ingles
            echo('</div>');
            echo('<div class="mensajeSesion">');
            echo('Wellcome, <b>'.$_SESSION['DescripcionUsuario'].'</b>! <br>');
            echo('This is your <b>'.$_SESSION['NumeroConexiones'].'</b> conection.<br>');  
            if($_SESSION['FechaHoraUltimaConexionAnterior']!=null){
                echo('Your last conection was <b>'.$_SESSION['FechaHoraUltimaConexionAnterior'].'</b>.');                
            }
            echo('</div>');
        ?>
        <div class="ejercicio">
            <!-- Se crea un formulario tipo post para agregar la opcion de busqueda-->
            <form name= "programa" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form1" method="post">
                <input type="submit" form="form1" value="Detail" name="detalle" class="botonPrograma">
                <input type="submit" form="form1" value="Log off" name="cerrarSesion" class="botonPrograma">
            </form>
        </div> 
    </main>
    <footer>
        <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../../index.html">Rebeca Sánchez Pérez</a></div>
        <div id="fotos">
            <a href="https://github.com/Ebenclaw/204DWESLoginLogoffTema5" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
            <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="../webroot/image/sauces.png" alt="Sauces"></a>
            <a href="../indexLoginLogoffTema5EN.php"><img id="home" src="../webroot/image/home.png" alt="Inicio"></a>
    </footer>
</body>

</html>


