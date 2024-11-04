<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des lignes et colonnes
    $num_rows = intval($_POST['num_rows']);
    $num_columns = intval($_POST['num_columns']);
    
    // Générer le tableau HTML
    $table_html = '<table border="1">';
    for ($i = 0; $i < $num_rows; $i++) {
        $table_html .= '<tr>';
        for ($j = 0; $j < $num_columns; $j++) {
            $table_html .= '<td>Cellule ' . ($i + 1) . '-' . ($j + 1) . '</td>';
        }
        $table_html .= '</tr>';
    }
    $table_html .= '</table>';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de Tableau</title>
</head>
<body>

<form method="POST">
    <label for="num_rows">Nombre de lignes :</label>
    <input type="number" id="num_rows" name="num_rows" min="1" max="30" required>
    
    <label for="num_columns">Nombre de colonnes :</label>
    <input type="number" id="num_columns" name="num_columns" min="1" max="30" required>
    
    <button type="submit">Générer</button>
</form>

<?php if (isset($table_html)): ?>
    <h2>Tableau généré :</h2>
    <?php echo $table_html; ?>

    <h3>Code HTML du tableau :</h3>
    <textarea rows="10" cols="50"><?php echo htmlspecialchars($table_html); ?></textarea>
<?php endif; ?>

</body>
</html>
