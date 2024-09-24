<?php
include 'connect.php';
session_start();
if ( $_SESSION['log'] == '') {
    header("location:adminindex.php");
    exit; // Stop further execution
}
include 'adminheader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins Data Base</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .container {
            border-spacing: 10px;
            font-family: Montserrat, sans-serif;
            font-size: 18px !important;
            border: 2px solid grey;
            margin-top: 50px;
            margin-bottom: 200px;
            padding: 50px 120px;
            align-content: center;
        }
    </style>
</head>
<body>
    <h1><center><b> Admins Data Base <img src="https://img.icons8.com/clouds/100/000000/lock-database-.png"/> </center></b></h1>
    <div class="container">
        <table>
            <tr>
                <td><a href='admintraindb.php'><button style="background-color: black; border-color: black;">View Train Bookings</button></a></td>
            </tr>
            <!-- Uncomment this block if you want to add more links -->
            <!--
            <tr>
                <td><a href='adminbusdb.php'><button style="background-color: black; border-color: black;">View Bus Bookings</button></a></td>
            </tr>
            -->
        </table>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
