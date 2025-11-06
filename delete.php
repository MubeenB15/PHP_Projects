<?php include 'db.php'

$id = $GET['id'];
$sql = "DELETE FROM students WHERE id = $id";
$result = $conn->query($sql);

header("Location:index.php");
?>