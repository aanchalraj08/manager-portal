<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Project Panel</h1>
        <form action="project-panel.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="Project Name" placeholder="Project Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Project Description" placeholder="Write project desciption">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="Project Start Date" placeholder="Project Start Date">
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="Project Deadline" placeholder="Project Deadline">
            </div>
            <div class="form-group">
                <input type="status" class="form-control" name="Project status" placeholder="update status:">
</div>
        </form>
        
        <a href="update.php" class="btn btn-warning">Update</a>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>