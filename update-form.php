<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update Data</title>
</head>
<body>
        <?php
        $conn = mysqli_connect('localhost','root','','school') or die('Connection Failed');
        $id = $_GET['id'];
        $select = "SELECT * FROM student WHERE id = $id";
        $result = mysqli_query($conn,$select);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<form action='./update.php' method='POST' class='border border-info col-lg-6 mx-auto mt-5 p-5 rounded-5'>
                <div class='display-6 mb-3'>Enter Data you want to Update!</div>
                    <input class='form-control' type='hidden' name='id' value='{$row['id']}'>
                    <label for=''>Name</label>
                    <input class='form-control' type='text' name='name' value='{$row['name']}'>
                    <label for=''>Age</label>
                    <input class='form-control' type='number' name='age' value='{$row['age']}'>
                    <label for=''></label>Class</label>
                    <input class='form-control' type='text' name='class' value='{$row['class']}'>
                    <button class='btn btn-primary mt-4 w-100'>Update Record</button>
                </form>
            </div>";
            }
        }
        ?>


    
</body>
</html>