<?php
include 'library/DBConnection.php';


$sql = "UPDATE `phone features` 
        SET 
            brand=?,
            screen=?, 
            description=?, 
            price=?,
            picture=?            
        WHERE id=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssssi", 
$brand, $screen,  
$description, $price, $picture, $id);

$id = $_POST["id"];
$brand = $_POST["brand"];;
$screen = $_POST["screen"];
$description = $_POST["description"];
$price = $_POST["price"];
$picture = $_POST["picture"];

// Send to database
$stmt->execute();

$conn->close();

header("Location: index.php");


?>