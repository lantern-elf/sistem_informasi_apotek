<?php
session_start();
include 'connection.php';

$got_username = $_GET['username'];

$sql = "select * from user_data where username= '$got_username'";
$posted_username = mysqli_query($conn, $sql);

echo $got_username;
// echo $posted_username;
