<!DOCTYPE html>
<HTML>
    <meta charset="utf-8">
<body>
    <HEAD>
    <TITLE>Summer Code Camp</TITLE>
    <link rel="stylesheet" type="text/css" href="style/vitrine.css">
    
    <?php include_once ("header.php"); ?>
    <header>
        <h1>Summer Code Camp</h1>
<div class="navigation">
        <a href="vitrine-accueil.html"target="_BLANK">Accueil</a>
        <a href="vitrine-programme.html"target="_BLANK">Programme</a>
        <a href="vitrine-contacts.html"target="_BLANK">Contact</a>
        </div>
        </header>
        </HEAD>

    <h2>Contact</h2>

    <form method="post" action="traitement.php">
        <label for="pseudo"> Nom Prénom :</label>
        <input type="text" name="pseudo" id="pseudo"> <br<br>
    <form method="post" action="traitement.php">
        <label for="pseudo"> adresse email :</label>
        <input type="text" name="pseudo" id="pseudo"> <br<br>
    <form method="post" action="traitement.php">
        <label for="pseudo">message :</label>
        <input type="text" name="pseudo" id="pseudo"> <br<br>

        <input type="submit" value="envoyer">
    </form>
    </BODY>
    </HTML>