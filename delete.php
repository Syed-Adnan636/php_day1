<?php
$conn = mysqli_connect('localhost','root','','school') or die('Connection Failed');
    $id = $_GET['id'];
$delete = "DELETE FROM student WHERE id = $id";
mysqli_query($conn,$delete);
header('Location: http://localhost/php_Day1/index.php')
?>