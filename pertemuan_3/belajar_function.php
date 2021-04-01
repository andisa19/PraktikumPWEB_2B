<?php
    //built in function
    echo date('Y');
    echo '<br>';
    //user defined function
    function printMyName($name="unknown"){
        echo"My Name is $name";
    }
    // printMyName();
    echo '<br>';
    function printAngka(){
        return 4;
    }
    echo(printAngka()+printAngka());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar function</title>
</head>
<body>
    <h1><?php printMyName("Andi S");?></h1>
</body>
</html>