<?php
include 'entities/includes.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p> Nome Utente: <?php echo( $user1->name) ?></p>
                <p> Cognome Utente: <?php echo( $user1->surname) ?></p>
                <p> Status: <?php echo( $user1->setSconto($user1->registration)) ?></p>
            </div>
            <div class="col-6">
                <p> Nome Utente: <?php echo( $user2->name) ?></p>
                <p> Cognome Utente: <?php echo( $user2->surname) ?></p>
                <p> Status: <?php echo( $user2->setSconto($user2->registration)) ?></p>
            </div>
            <div class="col-6">
                <p> Tipo di cibo: <?php echo( $crocchette->typeOfFood) ?></p>
                <p> Animali: <?php echo( $crocchette->animal) ?></p>
                <p> Prezzo: <?php echo( $crocchette->price) ?></p>
            </div>
        </div>
    </div>


<?php 

?>

</body>
</html>