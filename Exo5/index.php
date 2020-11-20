<?php
$departments  = array('02' => 'Aisne', '60' => 'Oise', '80' => 'Somme', '59' => 'Nord', '62' => 'Pas-de-Calais');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5p3</title>
</head>
<body>
        <?php
        foreach ($departments as $key => $element) { ?>
            <p> <?php echo $element; ?> </p>
        <?php }
        ?>
</body>
</html>