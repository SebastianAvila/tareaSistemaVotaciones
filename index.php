<html>
<head>   
<!--- Titulo puedes cambiarlo  --> 
<title> Candidatos 2022 </title> 
</head>

<body>
    <h1> Seleccione Al Candidato De Su Preferencia</h1> 

    <!--  Aqui esta el vinculo, solo cambia este nombre, por el del css que ocupes  -->
    <link rel="stylesheet" type="text/css" href="estilos.css">
        <div class ="container"> 
        <!--- No cambies esto, es el metodo de envio  --> 
        <form action="" method="POST" > 
            <label> Nombre </label> <br>
            <input type="text" name="username" placeholder="Ingresa tu nombre"/> <br>
            <!--- radio buttoms aqui importa el "name" y el "value" es el que se manda a la base de datos  --> 
            <label> Seleccione La Opcion Que Mas Le Convenga </label> <p>
            <input type="radio" name="opcion" value="PRIN"/> PRIN
            <input type="radio" name="opcion" value="PANA"/> PANA
            <input type="radio" name="opcion" value="PRANDA"/> PRANDA
            <input type="radio" name="opcion" value="PARTIDO AZUL"/> PARTIDO AZUL            
            <input type="submit" name="insert" value="Enviar"/> </p>
            
        </form>
        </div>
        
        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
            <li><a href="caracteristicasProgramaVotos.html"><strong>Características</strong></span></a></li>
            <li><a href="programadores.html"><strong>Nosotros</strong></span></a></li>
            
        	
          </ul>
          

          <a href="admin.html" ><strong>Panel Administrativo</strong></a></span>
        </div>

        





 </body> 






</html>
  <!--- manda los datos de este .php a ResgistraRespuesta.php  --> 
<?php

include("RegistraRespuestas.php");
//include("graficas.php");


?>


