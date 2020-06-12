<?php
    function concatenation($name, $firstname, $age){
        return 'Bonjour ' . $name . ' ' . $firstname . ', tu as ' .  $age . 'ans.';
        } 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 4 exercice 6</title>
    </head>
    <body>
        <p><?= concatenation('Rouyer', 'Tony', 24) ?></p>
    </body>
</html>