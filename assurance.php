<?php
//message à afficher
$message="";

//si on reçoit des données du formulaire
if (isset($_POST["btSubmit"])) {
    extract($_POST);
    $couleur=array("bleu","vert","orange","rouge");   
    //tarif bleu
    $indice=0;
    if ($age<25)
        $indice+=2;
    if ($annee<2)
        $indice++;
    $indice += $accident;
    if ($fidelity>2)
        $indice--;

    if ($indice<0)
        $indice=0;

    if ($indice<=3)
        $message = "votre tarif est $couleur[$indice]";
    else
        $message = "Vous n'etes pas assurable chez nous";
} else {
    $age="";
    $annee="";
    $accident="";
    $fidelity="";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>Assurance</title>		
    </head>
    <body>
        <h1>Détermination de votre tarif d'assurance<?php echo " : $message"?></h1>
		<form method="POST" action="assurance.php">
            <p>
                <label for="age">Votre Age</label>
                <input type="text" id="age" name="age" value="<?php echo $age ?>" />
            </p>
            <p>
                <label for="annee">Depuis combien d'année avez-vous le permis ? </label>
                <input type="text" id="annee" name="annee" value="<?php echo $annee ?>" />
            </p>
            <p>
                <label for="accident">De combien d'accident avez-vous été responsable ? </label>
                <input type="text" id="accident" name="accident" value="<?php echo $accident ?>" />
            </p>
            <p>
                <label for="fidelity">Depuis combien d'année êtes vous assurez chez nous ? </label>
                <input type="text" id="fidelity" name="fidelity" value="<?php echo $fidelity ?>" />
            </p>
            <input type="submit" name="btSubmit" value="Envoyer" />
        </form>
    </body>
</html>