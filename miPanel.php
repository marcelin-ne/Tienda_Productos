<?php
#crear session
session_start();

#Session diferente a Vacio
if($_SESSION["nombre"]=="" || $_SESSION["nombre"]== null){
    header("Location:index.php");
}

$idioma= "es";
if(isset($_GET['lang'])){
    setcookie("lang",$_GET['lang'],time()+(60*60*24));
    $idioma = $_GET['lang'];
}else{
    if(isset($_COOKIE['lang'])){
        $idioma = $_COOKIE['lang'];
    }
}
?>

<html>
    <head></head>
    <body>
        <h1>Panel Principal</h1>
        <h2>Bienvenido Usuario: <?php echo $_SESSION["nombre"];?></h2>
        <a href="mipanel.php?lang=es">Español </a>
        <a href="mipanel.php?lang=en">English</a>
        <a href="cerrarsesion.php">Cerrar Sesion</a>
    </body>
</html>