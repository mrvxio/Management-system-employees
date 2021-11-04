<?php
if(isset($_POST['list']))
{
    header("Location: show_all_employees.php");
}
if(isset($_POST['update_button']))
{
    $update = $_GET['update'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $departament = $_POST['departament'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    if(!($name && $number && $departament && $salary && $address))
    {
        echo "<h3>ALL FIELDS ARE REQUIRED</h3>";
    }
    else
    {
        $query = "UPDATE employee SET name='$name', number='$number', ";
        $query .= "departament='$departament', salary='$salary', address='$address' ";
        $query .= "WHERE id='$update'";
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
            die("QUERY FAILED");
        }
        header("Location: show_all_employees.php");
    }
}
$update = $_GET['update'];
$query = "SELECT * FROM employee WHERE id='$update'";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result))
{
?>
    <div class="author">
    <form action="" method="POST" class="row g-3">
        <div class="col-md-6">
        <label for="name" class="form-label">Employee name</label>
        <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" require>
        </div>
        <div class="col-md-6">
        <label for="number" class="form-label">Phone number</label>
        <input class="form-control" type="text" name="number" value="<?php echo $row['number']; ?>" require>
        </div>
        <div class="col-12">
        <label for="departament" class="form-label">Departament</label>
        <input class="form-control" type="text" name="departament" value="<?php echo $row['departament']; ?>" require>
        </div>
        <div class="col-12">
        <label for="salary" class="form-label">Salary</label>
        <input class="form-control" type="text" name="salary" value="<?php echo $row['salary']; ?>" require>
        </div>
        <div class="col-12">
        <label for="address" class="form-label">Home address</label>
        <textarea class="form-control" name="address" require><?php echo $row['address']; ?></textarea>
        </div>
<?php
} ?>
        <div class="col-12" style="text-align: right;">
        <input type="submit" class="btn btn-primary" name="list" value="Employees List">
        <input type="submit" class="btn btn-primary" name="update_button" value="Update Employee Data">
        </div>
    </form>
    </div>
    <a href="show_all_employees.php">LINK</a>