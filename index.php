<html>
<head>   
<!--- Titulo puedes cambiarlo  --> 
<title class="specialHead" > Candidatos 2022 </title> 
</head>

<body>
    <h1 class="specialHead"> Sistema de votos </h1> 
    <h1 class="specialHead"> Seleccione Al Candidato De Su Preferencia</h1> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <!--  Aqui esta el vinculo, solo cambia este nombre, por el del css que ocupes  -->
    <!--<link rel="stylesheet" type="text/css" href="estilos.css">--> 
    <link rel="stylesheet" type="text/css" href="estilosIndex.css">
        <div class ="container"> 
        <!--- No cambies esto, es el metodo de envio  --> 
        <form action="" method="POST" > 
            <label class="specialHead"> Nombre </label> <br>
            <input type="text" name="username" placeholder="Ingresa tu nombre"/> <br>
            <!--- radio buttoms aqui importa el "name" y el "value" es el que se manda a la base de datos  --> 
            <label class="specialHead"> Seleccione La Opcion Que Mas Le Convenga </label> <p>

            <label for="PRIM" class="specialHead"> PRIM </label>
            <input class="radio" id="PRIM" type="radio" name="opcion" value="PRIN"/> 
            <label for="PANA" class="specialHead"> PANA </label>
            <input class="radio" id="PANA" type="radio" name="opcion" value="PANA"/> 
            <label for="PRANDA" class="specialHead"> PRANDA </label>
            <input class="radio" id="PRANDA" type="radio" name="opcion" value="PRANDA"/> 
            <label for="PARTIDO AZUL" class="specialHead"> PARTIDO AZUL  </label>
            <input class="radio" id="PARTIDO AZUL" type="radio" name="opcion" value="PARTIDO AZUL"/>
            
            <input   type="submit" name="insert" value="Enviar"/> 
            
        </form>
        </div>
        
        <div class="barrasuperior" id="example-nav-collapse"> 
            <li><a href="admin.html"><strong>Panel Administrativo </strong></span></a></li>         
            
        </div>

        





 </body> 






</html>
  <!--- manda los datos de este .php a ResgistraRespuesta.php  --> 
<?php

include("RegistraRespuestas.php");
//include("graficas.php");


?>


