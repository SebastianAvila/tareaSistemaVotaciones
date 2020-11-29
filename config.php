<?php
///esta seccion de php lo que hace es solicitar la direccion y atributos de nuestro base de datos
$hostname="localhost";
$username= "root";
$password= "";
$database="db_votos";

// UserInput Test
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
    
      return $data;
    }	
?>