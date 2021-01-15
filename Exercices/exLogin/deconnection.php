<?php
//je demarre la session
session_start();
//je detruit tout ce qui se trouve dans la variable $_SESSION
session_destroy();
//je redirige l'utlisateur vers login.php
header("Location: http://localhost:80/phpTest/Exercices/exLogin/login.php");
exit;