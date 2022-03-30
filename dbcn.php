<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Assignment 02</title>
</head>
<body>
    <?php
        define("HOSTNAME","localhost");
        define("USERNAME","root");        
        define("PASSWORD","");        
        define("DATABASE","curd"); 

        $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

        if(!$connection){
            die("Connection Failed!");
        }
        
    ?>
</body>
</html>