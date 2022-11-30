<?php
#Made By: Marcelinne Tarea 1 de Aplicaciones Web 
#Variables 
$user="";
$password="";
$band="";

#Set Cookie
if (isset($_COOKIE["C_remember"])) {
    $user=$_COOKIE["c_user"];
    $password=$_COOKIE["c_password"];
    $band=true;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title> <!-- Titulo de la pagina -->
</head>
        <body>
            <h1> LOGIN </h1>
            <form method="POST" action="miPanel.php">
                <fieldset>
                Usuario*: <br>
                <br>
                <input type="text" name ="nombre" value="<?php if($band){echo $user;}else{echo "";} ?>"/><br>
                <br>
                Password*: <br>
                <br/>  
                <input type="password" name ="clave" value="<?php if($band){echo $password;}else{echo "";} ?>"/><br>
                <br>
                <input type="checkbox" name="checkRemerberme" <?php if($band){echo "checked";}?>>Remember Me </input><br>
                <br>
                <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </body>

</html>