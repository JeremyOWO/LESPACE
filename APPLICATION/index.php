<?php 
        session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>OWO</title>
    </head>

    <body>
    <ul>
    <li><a href="membre.php">
    <?php


        if(isset($_SESSION['id']) && isset($_SESSION['pseudo']))
        {
            echo $_SESSION['pseudo'];
           
        }
        else
        {
            echo "Mon compte";
        }     
    ?>  
    </a></li>   
    </ul>
    </body>
</html>