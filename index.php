<?php
include "db.php";
include "add_new_employee.php";
if(isset($_POST['list']))
{
    header("Location: show_all_employees.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Add New Employee</title>
</head>
<body>
    <div class="author">
    <form action="" method="POST" class="row g-3">
        <div class="col-md-6">
        <label for="name" class="form-label">Employee name</label>
        <input class="form-control" type="text" name="name" require>
        </div>
        <div class="col-md-6">
        <label for="number" class="form-label">Phone number</label>
        <input class="form-control" type="text" name="number" require>
        </div>
        <div class="col-12">
        <label for="departament" class="form-label">Departament</label>
        <input class="form-control" type="text" name="departament" require>
        </div>
        <div class="col-12">
        <label for="salary" class="form-label">Salary</label>
        <input class="form-control" type="text" name="salary" require>
        </div>
        <div class="col-12">
        <label for="address" class="form-label">Home address</label>
        <textarea class="form-control" name="address" require></textarea>
        </div>
        <div class="col-12" style="text-align: right;">
        <input type="submit" class="btn btn-primary" name="list" value="Employees List">
        <input type="submit" class="btn btn-primary" name="submit" value="Add Employee">
        </div>
    </form>
    </div>
    <a href="show_all_employees.php">LINK</a>
</body>
</html>