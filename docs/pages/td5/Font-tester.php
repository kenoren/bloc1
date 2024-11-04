<!DOCTYPE html>
<html>
<head>
    <title>Affichage dynamique de messages</title>
    <style>
        .message {
            font-size: 12px; /* Taille par défaut */
        }
    </style>
</head>
<body>

<?php
// Récupération des paramètres de l'URL
 
$color = isset($_GET['color']) ? $_GET['color'] : 'black';
$size = isset($_GET['size']) && is_numeric($_GET['size']) ? $_GET['size'] : 12;

// Affichage du message si des paramètres sont fournis
if (!empty($message)) {
    echo "<div id='message' style='color: $color; font-size: {$size}px;'>$message</div>";
}else {
    echo "<p>Veuillez fournir un message, une couleur et une taille.</p>";
}
?>

<a href="?message=Message%20rouge&color=red&size=15">Rouge 15</a>
<a href="?message=message%20vert&color=green&size=30">Vert 30</a>
<a href="?message=message%20bleu&color=blue&size=50">Bleu 50</a>

<form method="GET">
    <input type="text" name="message" placeholder="Votre message">
    <input type="text" name="color" placeholder="Couleur">
    <input type="number" name="size" placeholder="Taille">
    <button type="submit">Envoyer</button>
</form>

<button id="increment">+</button>
<button id="decrement">-</button>

</body>
</html>