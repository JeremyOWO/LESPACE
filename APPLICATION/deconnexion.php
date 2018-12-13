<?php


// Initialisation de la session.
// Si vous utilisez un autre nom
// session_name("autrenom")
session_start();
 

if (session_destroy()) {
    header('Location: index.php');
} else {
    header('Location: index.php');
}


?>

