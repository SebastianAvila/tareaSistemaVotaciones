<!--- Coneccion a mysql  --> 

<!---  si quieres añadir mas campos tienes que añadirlos tanto en la BD e iniciarlos en donde te lo digo mas abajo
 y enviarlo a traves de la consulta asignandole la variable que enviara y a que parte de la tabla 

--> 
<?php

// coneccion direta a la base de datos 
$localhost = " localhost"; //nombre default de la base de datos
$root = "root"; //nombre default del adminstador 
$pass = ""; //contraseña (que no  exixste :v ) defaul de la base de datos

$connection = mysqli_connecT($localhost, $root, $pass);
//db_votos es el nombre de la base de datos 
$db = mysqli_select_db($connection,'db_votos' );


//isset verifica que el boton (el normal ) haya sido precionado 
if(isset($_POST['insert'])){
    // el strlen verifica la cantidad de datos sobre el textfield y verifica que sea mayo de uno de lo contrario no dejarea pasar al registro 
    if(strlen($_POST['username'])  >= 1){
        //asigna el valor a variables que mysqli detecta 
        $username = $_POST['username']; //manda el valor del user name 
        $opcion = $_POST['opcion'];//manda el valor de los buttons
        //consulta que inserta los datos a la DB
        $query = "INSERT INTO  tablavotos(nombre,voto) VALUES ('$username','$opcion')" ;

        //sigo sin saber que hace esta madre pero sin esto no funciona asi que mejor ni le muevas 
        $query_run=mysqli_query($connection, $query);
    
        //verifica que el &query_run funcione 
        if($query_run){
            //de funcionar notifica que el registro es correcto
            //la clase OK es para el css manda un mensaje en verde 
            ?>
            
            <h3 class="ok"> ¡Registro correcto!  </h3> 
            <?php
    
        }else{

            //de lo contrario manda el error 
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error con la base de datos !</h3>
           <?php
    
            
            
        }
    
        
    }else{

        //verifica que los campos esten llenos de no estarlos manda el siguiente mensaje 
        //la clase bad es para el css manda un mensaje en rojo
        ?> 
        <h3 class="bad" >¡Rellene todos los campos! </h3>
       <?php

    }


    
}





?>
