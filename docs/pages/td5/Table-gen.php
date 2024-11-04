<?php

echo '<form method="POST">
    <label for="num_paragraphs">Nombre de lignes :</label>
    <input type="numberLign" id="num_paragraphs" name="num_paragraphs" min="1" max="30" required>
    <label for="num_paragraphs">Nombre de colonnes :</label>
    <input type="numberCol" id="num_paragraphs" name="num_paragraphs" min="1" max="30" required>
    <button type="submit">Générer</button>
</form>';

?>