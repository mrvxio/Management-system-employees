<?php
if(isset($_POST['submit']))
{
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
        $query = "INSERT INTO employee (name,number,departament,salary,address
        ) ";
        $query .="VALUES ('$name','$number','$departament','$salary','$address')";
        $result = mysqli_query($connection,$query);
        if(!$result)
        {
            die("QUERY FAILED");
        }
    }
}
?>