<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $mesas = array();
    for ($x =0; $x <10; $x++){

            array_push($mesas, rand(0,5));
    }

    for ($x =0; $x < count($mesas); $x++){

        if($mesas[$x] == 0){
            echo "<p>A la taula ", $x, " esta buida</p>";
        }else if($mesas[$x] == 5){
            echo "<p>A la taula ", $x, " esta plena</p>";
        }else{
            echo "<p>A la taula ", $x, " hi ha ", $mesas[$x] ," comercials</p>";
        }
    }
    ?>
</body>
</html>