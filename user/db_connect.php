<?php
//create database connection
$conn = mysqli_connect('localhost', 'root', '', 'crms');
//Check Database connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
