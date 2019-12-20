<?php
var_dump($_POST);
$present = $_POST["present"] ?? "0";
$parfum = $_POST["parfum"] ?? "";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulaire2</title>
</head>

<body>
    <form method="POST">

        <fieldset>
            <legend>Statut</legend>
            <p>
                <label for="present">Présent</label>
                <input type="checkbox" id="present" name="statut[]" value="1" />
            </p>
            <p>
                <label for="ensalle">En salle</label>
                <input type="checkbox" id="ensalle" name="statut[]" value="2" />
            </p>
            <p>
                <label for="enchambre">En Chambre</label>
                <input type="checkbox" id="enchambre" name="statut[]" value="3" />
            </p>
        </fieldset>


        <p>Veuillez choisir un parfum : </p>
        <p>
            <label for="vanille">Vanille</label>
            <input type="radio" accesskey="v" id="vanille" name="parfum" value="vanille" <?= ($parfum == "vanille") ? "checked='checked'" : "" ?> />
        </p>
        <p>
            <label for="chocolat">chocolat</label>
            <input type="radio" id="chocolat" name="parfum" value="chocolat" <?= ($parfum == "chocolat") ? "checked='checked'" : "" ?> />
        </p>
        <p>
            <label for="pistache">pistache</label>
            <input type="radio" id="pistache" name="parfum" value="pistache" <?= ($parfum == "pistache") ? "checked='checked'" : "" ?> />
        </p>
        <p>
            <label for="couleur">couleur</label>
            <select id="couleur" name="couleur[]" size="5" multiple="true">
                <option value="#FF0000">Rouge</option> 
                <option value="#00FF00">Vert</option>
                <option value="#0000FF">Bleu</option>
            </select>
        </p>
        <input type="submit" name="btSubmit" value="Envoyer" />
    </form>
</body>

</html>