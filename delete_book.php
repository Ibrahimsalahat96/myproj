<?php

include "data.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$query="DELETE FROM product WHERE id = '$id'"; // delete query
$res=mysqli_query($con,$query);
if($res)
{
    mysqli_close($con); // Close connection
    header("location:admin.php"); 
    exit;
    
}
else
{
    echo "Error deleting book"; // display error message if not delete
}
?>