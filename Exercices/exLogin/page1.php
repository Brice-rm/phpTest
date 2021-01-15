<?php
session_start();

if (!isset($_SESSION['nom'], $_SESSION['prenom'])) {
    //je redirige l'utilisateur vers la page login.php
    header("Location: http://localhost:80/phpTest/Exercices/exLogin/login.php");
    //et j'indique au script de s'arreter afin de pouvoir se rediriger correctement
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Titre de ma page</title>

<body>
    <p>Re-bonjour !</p>
    <?php echo $_SESSION['nom'] . ' ' . $_SESSION['prenom']; ?>
</body>

</html>