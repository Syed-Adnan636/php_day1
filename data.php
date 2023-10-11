<?php
$conn = mysqli_connect('localhost','root','','school') or die ('Connection Failed');
$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = $_POST['age'];
$class = $_POST['class'];
if ($age<18) {
    echo '<script>'; 
    echo 'alert("YOU ARE NOT ELIGIBLE");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
    
} else{
    $insert = "INSERT INTO student (name,age,class) VALUES ('{$name}',$age,'{$class}')";
mysqli_query($conn,$insert);
header('Location:http://localhost/Php_Day1/index.php');

};
?>