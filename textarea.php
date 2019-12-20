<?php

if(isset($_POST["btSubmit"])) {
    extract($_POST); 
    

}else{
    $commentaire=""; 
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulaire2</title>
</head>

<body>

    <h1>&lt;</h1>
    <form method="POST">
        <textarea id="commentaire" name="commentaire" cols="30" rows="5"><?= $commentaire ?></textarea>
        <input type="submit" name="btSubmit" value="Envoyer" />
    </form>

</body>

</html>