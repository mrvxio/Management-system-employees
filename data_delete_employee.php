<?php
if(isset($_GET['delete']))
{
    $delete = $_GET['delete'];
    $query = "DELETE FROM employee WHERE id='$delete'";
    $result = mysqli_query($connection,$query);
    if(!$result)
    {
        die("DELETE QUERY FAILED");
    }
    header("Location: show_all_employees.php");
}
?>