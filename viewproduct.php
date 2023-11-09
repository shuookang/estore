<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        require_once("dbinfo.php");

        $mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

        $sqlStatement = "SELECT * from menu";
        
        $result = $mysqli -> query($sqlStatement); 
        echo $result;
        while($record = $result -> fetch_assoc()){
            // display product by retrieve the $rec ord["name"] etc
        }
        $result->free_result();

        $mysqli->close();

    ?>

</body>
</html>

