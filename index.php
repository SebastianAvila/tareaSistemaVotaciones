<html>
<head>   
<title> Boton </title> 
</head>

<body>
    <h1> Meter informacion de un radio buton</h1> 
        <div class ="container"> 
        <form action="" method="POST" > 
            <label> Nombre </label> <br>
            <input type="text" name="username" placeholder="Ingresa tu nombre"/> <br>
            <label> Radio btn </labe> 
            <input type="radio" name="opcion" value="op1"/> opcion1
            <input type="radio" name="opcion" value="op2"/> opcion2
            <input type="submit" name="insert" value="Insert info"/> 
            





        
        
        
        </form>
        </div>

        





 </body> 






</html>
  
<?php

$connection = mysqli_connecT("localhost","root","");
$db = mysqli_select_db($connection,'db_votos' );

if(isset($_POST['insert'])){


    $username = $_POST['username'];
    $opcion = $_POST['opcion'];

    $query = "INSERT INTO  tablavotos(nombre,voto) VALUES ('$username','$opcion')" ;
    $query_run=mysqli_query($connection, $query);


    if($query_run){

        echo '<script type ="text/javascript"> alert("Ya chigaste") </scrip>';

    }else{

        echo '<script type ="text/javascript"> alert("Ya chigaste") </scrip>';
        
    }

}





?>


