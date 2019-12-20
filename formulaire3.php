<?php
var_dump($_POST);
$commentaire=$_POST["commentaire"] ?? "";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>Formulaire3</title>		
    </head>
    <body>
        <h1>&lt;</h1>
		<form method="POST">
            <textarea id="commentaire" name="commentaire" cols="30" rows="5"><?=$commentaire?></textarea>               
            <input type="submit" name="btSubmit" value="Envoyer" />
        </form>
        <div>
        <?=nl2br(htmlspecialchars($commentaire,ENT_QUOTES,"UTF-8"))?>
        <button onclick="alert('hello')">
            <img src="batman.png" /> <p>Cliquez-moi</p>
        </button>
        </div>
    </body>    
</html>