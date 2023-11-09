<?php
        $id = $_GET["id"];  //Hint: pass the product id via the URL
        $sqlStatement = "SELECT * from menu where id=$id";
        $result = $mysqli -> query($sqlStatement);
        $record = $result -> fetch_assoc();

?>