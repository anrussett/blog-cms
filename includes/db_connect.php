<?php
$dbServer="localhost";
$dbUsername="root@localhost"; //This is the same username as phpMyAdmin
$dbPassword=""; //This is the same password as phpMyAdmin
$dbName="blog_cms";

//create connection
$conn=mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
?>
