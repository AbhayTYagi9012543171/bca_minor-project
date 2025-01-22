<?php
$host = 'localhost'; // Your MySQL server address (for XAMPP, this is 'localhost')
$dbname = 'exam_system'; // The name of your database
$username = 'root'; // Default username for XAMPP MySQL
$password = ''; // Default password for XAMPP MySQL is empty
$con=mysqli_connect($host,$dbname,$username ,$password);
if(!$con)
{
    die("error detected" mysqli_error($con));
}
?>

