<?php

include_once("../config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql = "DELETE FROM panel_header WHERE panel_seri=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

$sql = "DELETE FROM panel_detail WHERE panel_seri=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>