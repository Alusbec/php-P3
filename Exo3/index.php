<?php
$months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2p3</title>
</head>

<body>
    <p>
        <?php
        //   for ($numero = 0; $numero <= 11; $numero++)
        //  {
        //   echo $months[$numero] ; // affichera $ $months [0], $months[1] etc.
        //  }

        // $counter=0;

        //  while($counter <= 11){
        //     echo $months[$counter]; 
        //     $counter++;
        //  }


        foreach ($months as $element) { ?>
            <p> <?php echo $element; ?> </p>
        <?php } ?>

    </p>
</body>

</html>