<!DOCTYPE html>
<html>
<head>
    <title>Affichage de message</title>
</head>
<body>

<?php
// Récupérer le message depuis l'URL (méthode GET)
$message = isset($_GET['message']) ? $_GET['message'] : 'Message par défaut';

// Afficher le message
echo "<p>$message</p>";

// Créer les liens hypertextes avec des messages différents
echo '<a href="message.php?message=Premier%20message">Premier message</a><br>';
echo '<a href="message.php?message=Deuxi%C3%A8me%20message">Deuxième message</a><br>';
echo '<a href="message.php">Message par défaut</a>';
?>

</body>
</html>