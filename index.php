<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>
    <div class="Text-center col-lg-6 mx-auto p-5 mt-3 text-uppercase">
        <h1>Student Data</h1>
        <a class="btn btn-dark rounded-pill w-50 mt-2 p-2" href="http://localhost/Php_Day1/getData.php">ADD DATA</a>
        <table class="table table-striped table-dark mt-2 text-capitalize Text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Class</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect('localhost','root','','school') or die('Connection Failed');
                $select = 'SELECT * FROM student';
                $result = mysqli_query($conn,$select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['class']}</td>
                        <td>
                        <a href='update-form.php?id={$row['id']}' class='btn btn-info text-decoration-none text-white'>Update</a></td>
                        <td>
                        <a href='delete.php?id={$row['id']}' class='btn btn-danger text-decoration-none text-white'>Delete</a></td>
                        </tr>";
                    }
                };
                ?>
            </tbody>
        </table>
    </div>
    
    <?php
    $_conn = mysqli_connect('localhost','root','','school') or die('connection failed');
    ?>
</body>
</html>