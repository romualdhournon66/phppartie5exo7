<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 5 exercice 7</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 5 exercice 7</h1>        
                    <p align="center">Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
                </div>
            </div>
            <div align="center">
                <?php
                $dpt = array(
                    02 => 'Aisne',
                    59 => 'Nord',
                    60 => 'Oise',
                    62 => 'Pas de calais',
                    80 => 'Somme',
                    51 => 'Reims');
                $newvalue = 51;
                $newsvalue2 = 'Marne';
                function funct($departement,$toto,$tata){
                    $departement[$toto] = $tata;
                    foreach ($departement as $toto => $tata);{
                        echo $toto.' '.$tata.'<br>';
                    }
                   
                }
                ?>
                <p><?= funct($departement,$toto,$tata); ?></p>
            </div>
        </div>
    </body>
</html>
