<!--- Coneccion a mysql  --> 

<!---  si quieres añadir mas campos tienes que añadirlos tanto en la BD e iniciarlos en donde te lo digo mas abajo
 y enviarlo a traves de la consulta asignandole la variable que enviara y a que parte de la tabla 

--> 

<?php
include("conect/Conex_BD_Envia.php");

?>
<?php




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
           
        }else{

           
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
