<?php

include 'library/DBConnection.php';


// sql to delete a record
$sql = "DELETE FROM `phone features` WHERE id=?";

$stmt=$conn->prepare($sql);

$stmt->bind_param("i", $id);

$id = $_GET['id'];

$stmt->execute();
$conn->close();


header("Location: index.php");
footer("Location: index.php");

?>

<?php include 'NavBar.php' ?>