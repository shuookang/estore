<?php
        require_once("dbInfo.php");

        $mysqli = new mysqli($hostname,$dbUser,$dbPassword,$db); 

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

        $sqlStatement = "SELECT * from menu";

        $result = $mysqli -> query($sqlStatement); 
        while($record = $result -> fetch_assoc()){
            // display product by retrieve the $rec ord["name"] etc
        }
        $result->free_result();

        $mysqli->close();

    ?>
