<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>Formulaire</title>		
    </head>
    <body>
		<form method="POST">        
            <input type="hidden" id="secret" name="secret" value="42" />    
            <p>
                <label for="prenom">type text</label>
                <input type="text" id="prenom" name="prenom" value="" maxlength="5" />
            </p>
            <p>
                <label for="date">date</label>
                <input type="date" id="date" name="date" value="" />
            </p>
            <p>
                <label for="heure">heure</label>
                <input type="time" id="heure" name="heure" value="" />
            </p>
            <p>
                <label for="telephone">telephone</label>
                <input type="tel" id="telephone" name="telephone" value="" />
            </p>
            <p>
                <label for="couleur">couleur</label>
                <input type="color" id="couleur" name="couleur" value="#123456" />
            </p>
            <input type="button" id="btLireCouleur" value="Lire Couleur" onclick="lireCouleur()" />
            <input type="submit" name="btSubmit" value="Envoyer" />
        </form>
    </body>
    <script>
        function lireCouleur() {
            alert(couleur.value);
        }
        
    </script>
</html>