<?php

function bissextile(int $annee): bool
{
    if (($annee % 4 == 0 and $annee % 100 != 0) or ($annee % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

if (isset($_GET["annee"])) {
    $resultat =  bissextile($_GET["annee"]);
    if ($resultat)
        echo $_GET["annee"]  . " est une année bissextile";
    else
        echo  $_GET["annee"] . " n'est PAS une année bissextile";
} 

//Boucle de 100 années
for($i=2000; $i<2100; $i++)
    echo "<p><a href='bissextile.php?annee=$i'>$i</a><p>";