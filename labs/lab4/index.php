<?php
$host = "localhost";
$username = "dakell3162";
$password = "";
$dbname = "tech_checkout";

// Create connection
   $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql = "select * from device order by deviceName;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $records = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
    echo "<table>";
    foreach($records as $record){
    echo "<tr>";
    echo "<th>" . $record['deviceName'] . "<th/>";
    echo "<th>" . $record['price'] . "<th/>";
    echo "<th>" . $record['status'] . "<th/>";
    echo "<th>" . $record['deviceType'] . "<th/>";
    
    echo "<tr/>";
    }
    
    echo "</table>"
?>