<?php

$usuario = $_POST["name"];
$password = $_POST["password"];


//echo $usuario;
//echo $password;

$usuariosql = "root";
$passsql = "root";
$basededatos = "administradores";
$mysqli =new mysqli("localhost", $usuariosql, $passsql, $basededatos);

$select = "SELECT user FROM admin WHERE user = '$usuario' AND pass = '$password'";



$query = $mysqli -> query("$select");
if ($query->num_rows > 0)
{
    header('Location: http://localhost\workspace\asir2-php\login\loginok\index.html');
}
else {
    header('Location: http://localhost/workspace/asir2-php/proyecto/ContactFrom_v1/index.html?error=1');
}
