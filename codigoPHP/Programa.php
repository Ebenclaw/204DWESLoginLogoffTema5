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
    header('Location: Login.php');
    // Termina el programa
    exit();
}

// Se valida si el usuario hace click en el botón 'Cerrar Sesion' 
if (isset($_REQUEST['salir'])) { 
    // Se destruye su sesión
    session_destroy(); 
    // Se redirige al usuario al Login
    header('Location: Login.php'); 
    // Termina el programa
    exit();
}

// DECLARACION E INICIALIZACION DE VARIABLES
// Se incuye la libreria de validacion para usar los metodos de validacion de las entradas del formulario
require_once '../core/231018libreriaValidacion.php';
// Se incuye la libreria de configuracion de bases de datos que almacena las constantes de la conexion
require_once '../config/confDBPDO.php';

try {
    // Se instancia un objeto tipo PDO que establece la conexion a la base de datos con el usuario especificado
    $miDB = new PDO('mysql:host='.IPMYSQL.'; dbname='.NOMBREDB,USUARIO,PASSWORD);

    // Se inicializan variables que almacenan las consultas
    $sql = 'SELECT * FROM T01_Usuario WHERE T01_CodUsuario="'.$_SESSION['user204DWESLoginLogoffTema5'].'";';                    

    // Se preparan las consultas
    $consulta = $miDB->prepare($sql);
    // Se ejecuta la consulta
    $consulta->execute();
    // Se obtiene el registro de la consulta
    $registro = $consulta->fetchObject(); 

    // Almacenamos los datos que queremos mostrar en diferentes variables
    $nombre_usuario = $registro->T01_DescUsuario;
    $num_conexiones = $registro->T01_NumConexiones;
    $ultima_conexion = $registro->T01_FechaHoraUltimaConexion;

} catch (PDOException $exception) {
    // Si aparecen errores, se muestra por pantalla el error
    echo('<div class="ejercicio"><span class="error">❌ Ha fallado la conexion: '. $exception->getMessage().'</span></div>');
} finally {
    // Se cierra la conexion con la base de datos
    unset($miDB); 
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
        <h1>Programa</h1>
    </header>
    <main  class="main2">
        <?php
        // $_SERVER
//            echo('<div class="ejercicio">');
//            echo('<h3>$_SESSION</h3>');
//            foreach ($_SESSION as $key => $valor) {
//                echo('<u>'.$key.'</u> => <b>'.$valor.'</b><br>');
//            }
            echo('</div>');
            echo('<div class="mensajeSesion">');
            echo('Bienvenid@, <b>'.$nombre_usuario.'</b>! <br>');
            echo('Esta es la <b>'.$num_conexiones.'</b> vez que te conectas.<br>');  
            echo('Tu ultima conexion fue el <b>'.$ultima_conexion.'</b>.');
            echo('</div>');
        ?>
        <div class="ejercicio">
            <!-- Se crea un formulario tipo post para agregar la opcion de busqueda-->
            <form name= "programa" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form1" method="post">
                <input type="submit" form="form1" value="Detalle" name="detalle" class="botonPrograma">
                <input type="submit" form="form1" value="Cerrar Sesion" name="cerrarSesion" class="botonPrograma">
            </form>
        </div> 
    </main>
    <footer>
        <div id="derechos">2023-2024 © Todos los derechos reservados: <a href="../../index.html">Rebeca Sánchez Pérez</a></div>
        <div id="fotos">
            <a href="https://github.com/Ebenclaw/204DWESLoginLogoffTema5" target="_blank"><img id="git" src="../webroot/image/GitHub.png" alt="GitHub"></a>
            <a href="http://ieslossauces.centros.educa.jcyl.es/sitio/" target="_blank"><img id="sauces" src="../webroot/image/sauces.png" alt="Sauces"></a>
            <a href="../indexLoginLogoffTema5.php"><img id="home" src="../webroot/image/home.png" alt="Inicio"></a>
    </footer>
</body>

</html>


