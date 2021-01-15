<?php
if (isset($_POST["nom"] , $_POST['prenom'])) {
    //je commence toujours par session_start pour utiliser le systeme de session et avoir accès a $_SESSION
    session_start();
    //j'affecte la valeur entré par l'utilisateur $_POST["nom"] dans la variable $_SESSION["nom"]
    $_SESSION["nom"] = $_POST["nom"];
    $_SESSION['prenom'] = $_POST['prenom'];
    //je redirige l'utilisateur vers la page1.php
    header("Location: http://localhost:80/phpTest/Exercices/exLogin/index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <p>
            <label for="nom">Nom : </label> <input type="text" name="nom" />
        </p>
        <p>
            <label for="prenom">Prénom : </label><input type="text" name="prenom" />
        </p>

        <p>
            <input type="submit" value="Login" />
        </p>
    </form>

</body>

</html>
</body>

</html>
