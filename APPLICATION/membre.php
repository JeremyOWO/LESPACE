<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
        require "header.html"; 
        ?>
        
    </head>
    <body>
        <div class="container">
            <div class="row">   
                <div class="col-md-3">
                <?php
                if(!empty($_SESSION['id']) && !empty($_SESSION['pseudo']))
                {
                        echo " Bienvenu dans ton espace " . $_SESSION['pseudo'] . "<br/>"; 
                ?>
                </div>
                <div class="col-md-3">
                    <p><a href="deconnexion.php">Deconnexion</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div id="map"></div>
                </div>
            </div>
        
        
                <div>
                    <h2> Résultat de votre recherche </h2>
                    <p id="div2"></p>
                </div>
        <?php         
        }
        else
        {
        ?>
            <form action="connexion.php" method="POST">
                <label name="pseudo">Pseudo:</label><br>
                <input name="pseudo" id="pseudo"/><br>
                <label name="mdp">Mot de passe:</label><br>
                <input name="mdp" id="mdp" type="password"/><br>
                <input type="submit" name="envoyer" id="envoyer" value="envoyer"/><br>
            </form>
            <p>Vous n'est pas encore inscrit ? <a href="inscription.php">Je m'inscris</a></p>
        <?php
        }
        ?>
        <p><a href="index.php">Retour à l'accueil</a></p>
        
    </div>
    </body>            
</html>
