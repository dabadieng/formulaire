<?php
$tab["modele"] = array("Twingo", "Clio", "Safrane", "Porshe");
$tab["forfait"] = array(35, 45, 50, 100);
$tab["prixkm"] = array(0.20, 0.25, 0.35, 0.50);
$prix=0;
$modele="";
$nbjour="";
$nbkm="";
if (isset($_POST["btSubmit"])) {
    extract($_POST);
    $prix=$nbjour*$tab["forfait"][$modele];
    if ($nbkm>50) {
        $prix += ($nbkm-50)*$tab["prixkm"][$modele];
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Location</title>
</head>

<body>
    <h1>Devis de location</h1>
    <form method="POST">
        <p>
            <label for="modele">Modèle</label>
            <select name="modele" id="modele">
                <?php
                foreach ($tab["modele"] as $cle => $valeur) {
                    if ($modele != $cle)
                        echo "<option value='$cle'>$valeur</option>";
                    else
                        echo "<option selected='selected' value='$cle'>$valeur</option>";
                }
                ?>
            </select>
        </p>
        <p>
            <label for="nbjour">Nombre de jours</label>
            <input type="number" id="nbjour" name="nbjour" value="<?=$nbjour?>" placeholder="Saisir le Nombre de jours de location" size="50" min="0" max="100"/>
        </p>
        <p>
            <label for="nbkm">Nombre de kilometres</label>
            <input type="number" id="nbkm" name="nbkm" value="<?=$nbkm?>" placeholder="Saisir le Nombre de km parcourus" size="50" min="0" max="5000"/>
        </p>
        <input type="submit" name="btSubmit" value="Envoyer" />
        <input type="reset" name="btReset" value="Annuler" />
    </form>
    <h2>Prix de la location : <?=$prix ?>
</body>

</html>