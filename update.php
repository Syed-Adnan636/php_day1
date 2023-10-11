<?php
$conn = mysqli_connect('localhost','root','','school') or die('Connection Failed');
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$class = $_POST['class'];
$update = "UPDATE student SET name = '{$name}', age = $age, class = '{$class}' WHERE id = $id";
mysqli_query($conn,$update);
header("Location: http://localhost/php_day1/index.php");
?>