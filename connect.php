<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'train';
$connect = mysqli_connect('localhost', 'root', '#Satyajit1106', 'train');
if (!$connect) {
    die('Could not connect: ' . mysqli_error());
}
?>  