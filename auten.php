<?php 
$admin="admin123";
$adminPass = "12345";


if(isset($_POST['ingresa'])){


    $getAdmin = $_POST['admin'];
    $getPass  = $_POST['password'];

    if($getAdmin == $admin and $getPass == $adminPass){

        header("location:graficas.php");
        

    }else{ 
        
        ?> <h3>Usuario y contraseña incorrectas </h3>
        <a href="admin.html">Reintentar</a><?php 
       
    }


}




?>