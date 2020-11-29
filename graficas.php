<!DOCTYPE html>
<html lang="en">
<!--simplemente le da formato a las graficas-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap del css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <!--crea fonts es decir estilos de letra para un buen diseño-->
    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>
<body>
<!---crea el formato de la tabla  y sus dimensiones-->
    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          <!--genera el formato de cabecera asi cmo su tamaño-->
          <div class="page-header">
            <h2 class="specialHead">Grafica De Las Encuestas</h2>
          </div>
          <!--divide la tabla en 2 -->
          <div class="col-sm-12">
            <?php
            ///pide el php de las configuraciones para poder acceder a la base de datos
              require 'Conex_BD_Retorna.php';

              ///creo las variables por cada partidos (uso nombres similares para no perderme)
              $PRIN=0;
              $PANA=0;
              $PRANDA=0;
              $PA=0;

              ///una variable que guarda la conexion
              $conn = mysqli_connect($hostname, $username, $password, $database);
              ///lo genera en booleano para verificar si la conexion es exitosa
              if(!$conn)
              {
                echo "Hubo un fallo en la conexión.";
              }
              else
              {
                //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

                //Bloque de graficas de PRIN 
                //Este codigo genera las graficas para poder ver la cantidad de votos 


                ///crea una variable que guarda la direccion en slots de la base de datos
                $sql ="SELECT * FROM tablavotos WHERE voto='PRIN'";
                ///genera la cantidad que tienen dicho slot
                $result= mysqli_query($conn, $sql);

                ///pregunta si en tal row los resultados son mayores a 0
                if(mysqli_num_rows($result)>0)
                {
                ///mientras en dicho row sea igual a un resultado pondra el valor del voto y lo sumara a la variable
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto'])
                      $PRIN++;
                  }

                  ///se crea una operacion para dar el largo de la grafica sin tocar el la variable principal
                  $pranda_value= $PRIN*10;

                  echo "<strong>Votos Al PRIN</strong><br>";//se crea el encabezado de la grafica
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$pranda_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }
                //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


                //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
                
                //Bloque de graficas de PANA
                //Este codigo genera las graficas para poder ver la cantidad de votos 
                $sql ="SELECT * FROM tablavotos WHERE voto='PANA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto'])
                      $PANA++;
                  }

                  //Grafica PANA
                  $pana_value= $PANA*10;

                  echo "<strong>Votos Al PANA</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$pana_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }
                //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

                //°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°

                
                //Bloque de graficas de PRANDA 
                //Este codigo genera las graficas para poder ver la cantidad de votos 
                $sql ="SELECT * FROM tablavotos WHERE voto='PRANDA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto'])
                      $PRANDA++;
                  }


                  $pranda_value= $PRANDA*10;

                  echo "<strong>Votos Al PRANDA</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$pranda_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }
                 //°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°

                 //&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
                
                 
                //Bloque de graficas del PARTIDO AZUL 
                //Este codigo genera las graficas para poder ver la cantidad de votos 
                $sql ="SELECT * FROM tablavotos WHERE voto='PARTIDO AZUL'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voto'])
                      $PA++;
                  }


                  $pa_value= $PA*10;

                  echo "<strong>Votos Al Pa</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$pa_value."%'>
                      <span class='sr-only'>TMC</span>
                    </div>
                  </div>
                  ";
                }
              
                //&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

               echo "<hr>";

               ///se crea una variable que almacenara el toal de datos
                $total=0;

                // Total
                $sql ="SELECT * FROM tablavotos";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                    ///quite el while porque contaba todos los atributos en la base de datos y lo que hice fue sumar unicamente los datos de los partidos
                  //while($row= mysqli_fetch_assoc($result))
                  //{
                  //  if($row['voto'])
                  //    $total++;
                    $total = $PRIN+$PANA+$PRANDA+$PA;
                  //}

                  echo "<strong>Número total de Votos</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>Votos : $total </h3>
                  </div>
                  ";
                }

              }
            ?>
          </div>

        </div>
      </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
