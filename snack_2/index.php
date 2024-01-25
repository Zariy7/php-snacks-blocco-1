<?php
    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age']) && $_GET['name']!='' && $_GET['email']!='' && $_GET['age']!=''){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        $error = false;
    
        if(strlen($name)<3){
            $error = true;
        }
        if(!str_contains($email, '@') || !str_contains($email, '.')){
            $error = true;
        }
        if(!is_numeric($age)){
            $error = true;
        }
    }
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
            <div>
                <form action="./index.php" method="GET" class="row">
                    <div class="col-4">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Inserisci il nome..." required>
                    </div>
                    <div class="col-4">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Inserisci la mail..." required>
                    </div>
                    <div class="col-4">
                            <label for="age" class="form-label">Age:</label>
                            <input type="number" class="form-control" name="age" placeholder="Inserisci l'et/a'..." required>
                    </div>
                    <div class="col-4">
                            <input type="submit" value="Invia" />
                    </div>
                </form>

                <?php 
                    if($error){
                        echo 'Accesso negato';
                    }
                    else{
                        echo 'Accesso riuscito';
                    }
                ?>
            </div>
        </div>
    </body>
</html>