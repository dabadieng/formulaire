<?php
function affichePlanetes($tableau) {
    ?>
    <table>
        <caption>Les planètes</caption>
        <tr>
            <th>Planètes</th>
            <th>Masse</th>
            <th>Rayon</th>
        </tr>
    <?php
    foreach($tableau as $cle => $ligne) {
        echo "<tr>";
        foreach($ligne as $indice => $valeur)
            echo "<td>$valeur</td>";
        echo "</tr>";
    }
    ?>
    </table>
    <?php    
}


$tab = [];
$tab[1] = ["MERCURY", 3.303e+23, 2.4397e6];
$tab[2] = ["VENUS",   4.869e+24, 6.0518e6];
$tab[3] = ["EARTH",   5.976e+24, 6.37814e6];
$tab[4] = ["MARS",    6.421e+23, 3.3972e6];
$tab[5] = ["JUPITER", 1.9e+27,   7.1492e7];
$tab[6] = ["SATURN",  5.688e+26, 6.0268e7];
$tab[7] = ["URANUS",  8.686e+25, 2.5559e7];
$tab[8] = ["NEPTUNE", 1.024e+26, 2.4746e7];
const G = 6.67300E-11;

$poids="";
$masse="";
$planete="";

if (isset($_POST["btSubmit"])) {
    extract($_POST);    
    $poids=$masse * G * $tab[$planete][1]/pow($tab[$planete][2],2);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Planetes</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>        
    <?php affichePlanetes($tab); ?>
    <h1>calcul de son poids sur une planète</h1>
    <form method="POST">
        <p>
            <label for="planete">Planètes</label>
            <select name="planete" id="planete">
                <?php
                foreach ($tab as $cle => $ligne) {
                    if ($planete != $cle)
                        echo "<option value='$cle'>$ligne[0]</option>";
                    else
                        echo "<option selected='selected' value='$cle'>$ligne[0]</option>";
                }
                ?>
            </select>
        </p>
        <p>
            <label for="masse">Saisir votre masse (en Kg)</label>
            <input type="number" id="masse" name="masse" value="<?=$masse?>" placeholder="Saisir votre masse en kg" size="50"/>
        </p>        
        <input type="submit" name="btSubmit" value="Envoyer" />
        <input type="reset" name="btReset" value="Annuler" />
    </form>
    <h2>Votre poids (en Newton) sur <?=isset($tab[$planete][0]) ? $tab[$planete][0] : ""; ?> est de : <?=$poids ?>
</body>

</html>