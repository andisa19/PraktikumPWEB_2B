<?php
    require 'Kubus.php';
    $kubus=new Kubus;
    $kubus->setSisi(4);
    // $kubus->getLuas ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1><?=$kubus->getLuas()?></h1>
    <br>
    <h1><?=$kubus->getVolume()?>.</h1>

    <h1><?php echo $kubus= getLuas();?></h1>

</body>
</html>