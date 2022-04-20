<?php
//Create database connection
$conn = mysqli_connect('localhost', 'root', '', 'crms');
//Check database connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
