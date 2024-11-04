<?php

$paragraphs = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "Vestibulum vehicula orci et nulla dictum, vitae cursus velit vestibulum.",
    "Fusce ut velit viverra, pretium nulla ut, fermentum eros.",
    "Etiam faucibus massa a tortor varius, non fermentum tortor venenatis.",
    "Donec consectetur eros eu tortor dictum, sit amet sollicitudin augue posuere.",
    "Phasellus malesuada nulla ac ultricies fermentum.",
    "Mauris hendrerit nisl eu sem dapibus, sit amet faucibus nunc sollicitudin.",
    "Suspendisse potenti. Proin convallis sem quis nulla mollis, eget placerat mauris auctor.",
    "Praesent a lorem ac nisi convallis malesuada.",
    "Nullam dapibus orci et vestibulum scelerisque.",
    "Aliquam sed eros sed mi scelerisque malesuada.",
    "Curabitur at orci eget metus pharetra convallis.",
    "Vivamus dictum libero nec dui tempor, at faucibus velit aliquam.",
    "Quisque et augue eu nisi tincidunt pharetra.",
    "Integer commodo sapien nec libero fermentum, ac cursus ante eleifend.",
    "Etiam et dolor sit amet nibh scelerisque ultricies.",
    "Curabitur nec urna et velit blandit lacinia.",
    "Ut vel enim ac elit gravida interdum.",
    "Phasellus eget metus nec felis viverra consectetur.",
    "Nam ornare dolor at lacus luctus, nec scelerisque nisl consectetur.",
    "Maecenas ut augue nec purus eleifend varius.",
    "Praesent tempor lorem ac ex fringilla, id viverra dui elementum.",
    "Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.",
    "Proin sit amet sapien auctor, bibendum risus ut, facilisis turpis.",
    "Aliquam erat volutpat. Cras fringilla convallis tortor.",
    "Sed ac neque vel leo vehicula vehicula.",
    "Vivamus a leo sit amet risus volutpat laoreet.",
    "Duis et arcu sed lacus luctus pulvinar.",
    "Sed at massa accumsan, aliquet lectus ut, facilisis nisl.",
    "Donec sit amet ligula ac sapien tincidunt dictum."
];

echo '<form method="POST">
    <label for="num_paragraphs">Nombre de paragraphes :</label>
    <input type="number" id="num_paragraphs" name="num_paragraphs" min="1" max="30" required>
    <button type="submit">Générer</button>
</form>';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer la sélection de l'utilisateur et la convertir en nombre entier
    $num_paragraphs = (int)$_POST['num_paragraphs'];

    // Générer les paragraphes sélectionnés en fonction de l'entrée de l'utilisateur
    $generated_text = '';
    for ($i = 0; $i < $num_paragraphs; $i++) {
        $generated_text .= $paragraphs[$i] . "\n\n"; // Ajout de deux sauts de ligne pour espacer les paragraphes
    }

    // Afficher le texte généré dans une textarea non modifiable
    echo '<label for="generated_text">Texte généré :</label>';
    echo '<textarea id="generated_text" rows="15" cols="60" readonly>' . htmlspecialchars($generated_text) . '</textarea>';
}


?>