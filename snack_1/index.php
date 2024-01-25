<?php 
    $matches = [];
    $teams = ['Milano', 'Bologna', 'Treviso', 'Reggio Emilia', 'Napoli', 'Torino', 'Genova', 'Venezia', 'Sassari', 'Tortona'];
    
    for($i = 1; $i<6; $i++){
        $match = [];

        $match['home'] = $teams[rand(0, count($teams)-1)];
        unset($teams[array_search($match['home'], $teams)]);
        array_values($teams);
        sort($teams);

        $match['away'] = $teams[rand(0, count($teams)-1)];
        unset($teams[array_search($match['away'], $teams)]);
        array_values($teams);
        sort($teams);

        $match['home-points'] = rand(30, 80);
        $match['away-points'] = rand(30, 80);

        $matches[] = $match;
    }

    //var_dump($matches);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <?php foreach($matches as $match){?>
                <li>
                    <?php
                        echo $match['home']." - ".$match['away']." | ".$match['home-points']." - ".$match['away-points']
                    ?>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>