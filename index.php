<html>
<head>   
<!--- Titulo puedes cambiarlo  --> 
<title> Boton </title> 
</head>

<body>
    <h1> Meter informacion de un radio buton</h1> 
    <link rel="stylesheet" type="text/css" href="estilos.css">
        <div class ="container"> 
        <!--- No cambies esto, es el metodo de envio  --> 
        <form action="" method="POST" > 
            <label> Nombre </label> <br>
            <input type="text" name="username" placeholder="Ingresa tu nombre"/> <br>
            <!--- radio buttoms aqui importa el "name" y el "value" es el que se manda a la base de datos  --> 
            <label> Radio btn </labe> 
            <input type="radio" name="opcion" value="PRIN"/> PRIN
            <input type="radio" name="opcion" value="PANA"/> PANA
            <input type="radio" name="opcion" value="PRANDA"/> PRANDA 
            <input type="submit" name="insert" value="Insert info"/> 
            
        </form>
        </div>

        





 </body> 






</html>
  <!--- manda los datos de este .php a ResgistraRespuesta.php  --> 
<?php

include("RegistraRespuestas.php");


?>


