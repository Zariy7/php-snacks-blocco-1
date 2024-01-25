<?php
    $allChat = [];
    
    for($i = 1; $i<4; $i++){
        $dayKey = rand(1, 31).' - '.rand(1, 12).' - '.rand(2012, 2024);

        $dayChat = [];

        for($j = 1; $j<=(rand(1, 3)); $j++){
            $oneChat = [];

            $oneChat['title'] = 'title #'.$j;
            $oneChat['author'] = 'author #'.$j;
            $oneChat['text'] = 'text #'.$j;

            $dayChat[] = $oneChat;
        }

        $allChat[$dayKey] = $dayChat;
    }
    
    //var_dump($allChat);
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
        <div class="container">
            <?php 
                foreach($allChat as $key => $firstOutput){
                    echo "<ul class='list-group my-3'><li class='list-group-item'><h3>".$key."</h3></li>";

                    //var_dump($firstOutput);
                    foreach($firstOutput as $secondOutput){
                        foreach($secondOutput as $thirdOutput){
                            echo "<li class='list-group-item'>".$thirdOutput."</li>";
                        }
                    }

                    echo "</ul>";
                }
            ?>
        </div>
    </body>
</html>