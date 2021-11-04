<?php
include "db.php";
include "data_delete_employee.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['update']))
        {
          include "data_update_employee.php";
        }
    ?>
    <div class="special">
    <table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Employee name</th>
            <th scope="col">Phone number</th>
            <th scope="col">Departament</th>
            <th scope="col">Salary</th>
            <th scope="col">Address</th>
            <th></th>
        </tr>
        <?php
        $query = "SELECT * FROM employee";
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
            die("QUERY FAILED");
        }
        else
        {
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td scope="row"><?php echo $row['id']; ?></td>
                <td scope="row"><?php echo $row['name']; ?></td>
                <td scope="row"><?php echo $row['number']; ?></td>
                <td scope="row"><?php echo $row['departament']; ?></td>
                <td scope="row"><?php echo $row['salary']; ?></td>
                <td scope="row"><?php echo $row['address']; ?></td>
                <td scope="row"><a href="show_all_employees.php?update=<?php echo $row['id'];?>">Update</a><br><a href="show_all_employees.php?delete=<?php echo $row['id'];?>">Delete</a>
            </tr>
         <?php   }
        }  ?>
    </table>
    </div>
</body>
</html>