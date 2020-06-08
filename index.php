<?php
    function concatenation($name, $firstname, $age){
        echo 'Bonjour ' . $name . ' ' . $firstname . ', tu as ' .  $age . 'ans.';
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
        <p><?php concatenation('Rouyer', 'tony', 24) ?></p>
    </body>
</html>