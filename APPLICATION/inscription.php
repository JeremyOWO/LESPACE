<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
        <form action="inscription_1.php" method="POST">
            <label name="pseudo">Pseudo:</label><br>
            <input name="pseudo" id="pseudo"/><br>
            <label name="mdp">Mot de passe:</label><br>
            <input name="mdp" id="mdp" type="password"/><br>
            <label name="confMdp">Confirmation du Mot de passe:</label><br>
            <input name="confMdp" id="confMdp" type="password"/><br>
            <label name="email">E-mail:</label><br>
            <input name="email" type="email" id="email"/><br>
            <label name="confEmail">E-mail:</label><br>
            <input name="confEmail" type="email" id="confEmail"/><br>
            <input type="submit" name="envoyer" id="envoyer" value="envoyer"/><br>
        </form>
    </body>
</html>