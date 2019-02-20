<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title> formulaire</title>
</head>
<body>
<form action="index.php" method="post">

    <h1> Nous contacter </h1>

    <div><label for="nom"> Nom : </label> <input type="text" id="nom" name="nom" placeholder="saisir votre nom ici" /></div>

    <div><label for="prenom"> Prenom : </label> <input type="text" id="prenom" name="prenom" placeholder="saisir votre prenom ici"/></div>

    <div><label for="email"> Email : </label> <input type="text" id="email" name="email" placeholder="saisir votre email ici" /></div>

    <div><label for="sujet"> Sujet : </label> <input type="sujet" id="sujet" name="sujet" placeholder="saisir le sujet de votre message ici"/></div>

    <div><label for="message"> Message : </label> <input type="message" id="message" name="message" placeholder="saisir votre message ici"/></div>


    <input type="reset" value="effacer">
    <input type="submit" value="Envoyer">
</form>

</body>
</html>
