<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Get Data</title>
</head>
<body>
    <div class="col-lg-6 mx-auto mt-5">
    <form class="border border-info rounded-5 p-5" action="./data.php" method="POST" autocomplete="off">
    <div class="display-1 text-center text-uppercase fw-bold">Add Data</div>
        <label for="">Name</label>
        <input class="form-control" type="text" name="name">
        <label for="">Age</label>
        <input class="form-control" type="number" name="age">
        <label for="">Class</label>
        <input class="form-control" type="text" name="class">
        <button class="btn btn-dark w-100 mt-5" type="submit">Submit</button>
    </form>
    </div>
    
</body>
</html>