<?php
    $allChat = [];
    
    for($i = 1; $i<4; $i++){
        $dayKey = rand(1, 31).' - '.rand(1, 12).' - '.rand(2012, 2024);
        $oneChat = [];

        $oneChat['title'] = 'title #'.$i;
        $oneChat['author'] = 'author #'.$i;
        $oneChat['text'] = 'text #'.$i;
        
        //$dayKey[] = $oneChat;
        $allChat[$dayKey] = $oneChat;
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
                foreach($allChat as $key => $chat) {
                    echo $key.'<br>'; 
            ?>
            <ul class="list-group">
                    <?php 
                        foreach($chat as $info){  
                    ?>
                            <li class="list-group-item">
                                <?php echo $info; ?>
                            </li>
                    <?php 
                        }
                    ?>
                <?php 
                    }
                ?>
            </ul>
        </div>
    </body>
</html>