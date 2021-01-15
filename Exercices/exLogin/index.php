<?php session_start();
if (!isset($_SESSION["nom"] , $_SESSION["prenom"] )) {
    //je redirige l'utilisateur vers la page login.php
    //ATTENTION VEUILLEZ CORRIGER L'URL SELON VOTRE LOCALHOST !!!
    header("Location: http://localhost:80/phpTest/Exercices/exLogin/login.php");
    //et j'indique au script de s'arreter afin de pouvoir se rediriger correctement
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENUE</h1>
    <p>Page Annexe : <a href="page1.php">Page Annexe</a></p>
    <p>Bonjour <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?></p>
    <a href="deconnection.php">Deconnexion</a>
</body>

</html>