<?php
$dbServer="localhost:8888";
$dbUsername="root"; //This is the same username as phpMyAdmin
$dbPassword="root"; //This is the same password as phpMyAdmin
$dbName="blog_cms";

//create connection
$conn=mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
?>
