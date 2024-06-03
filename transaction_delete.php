<?php
include 'connection.php';
$get_transaction_on = $_GET['transaction_on'];

$sql = "DELETE FROM transactions WHERE transaction_on = '$get_transaction_on'";
$delete_data = mysqli_query($db, $sql);

if ($delete_data) {
    mysqli_query($db, "ALTER TABLE transactions AUTO_INCREMENT=0");
    echo "<script> alert ('Data deleted'); window.location='supplies.php';</script>";
} else
    echo "<script> alert ('Failed to deleting data'); window.location='supplies.php';</script>";
