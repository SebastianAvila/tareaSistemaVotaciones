<?php

include("con_base_datos.php");



<div class="container" style="padding-top:150px;">
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;">
        
        <?php

  require('config.php');

                        
        
  

            if(isset($_POST["submit"])){
            if(isset($_POST["selecioncandidato"]))
            {
               
                $selection= test_input($_POST["selecioncandidato"]);
            }
        }
        else
        {
            echo "<br>All Field Recquired";
        }
        

        


        $sql= "INSERT INTO registrovotos.votos VALUES(null,'".$selection."');";
            

        if(mysqli_query($conex, $sql)){
            ##echo "<img src='images/success.png' width='70' height='70'>";
            echo "<h3 class='text-info specialHead text-center'><strong> Has votado satisfactoriamente.</strong></h3>";
            ##echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finalizar</strong> </a>";
        }
        else
        {
            ##echo "<img src='images/error.png' width='70' height='70'>";
            echo "<h3 class='text-info specialHead text-center'><strong> Parece que tenemos un problema.</strong></h3>";
            ##echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finalizar</strong> </a>";
        }

        
        ?>

        
        
    </div>
    <div class="col-sm-4"></div>
</div>
</div>





?> 





