<?php
//create database connection
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=crms', 'root', '');

//Set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
