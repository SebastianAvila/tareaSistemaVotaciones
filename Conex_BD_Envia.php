<?php

// coneccion direta a la base de datos 
$localhost = "localhost"; //nombre default de la base de datos
$root = "root"; //nombre default del adminstador 
$pass = ""; //contraseña (que no  exixste :v ) defaul de la base de datos

$connection = mysqli_connecT($localhost, $root, $pass);
//db_votos es el nombre de la base de datos 
$db = mysqli_select_db($connection,'db_votos' );



?> 