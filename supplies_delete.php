<?php
include 'connection.php';
$item_id = $_GET['item_id'];

$sql = "DELETE FROM supplies WHERE item_id = '$item_id'";
$delete_data = mysqli_query($db, $sql);

if ($delete_data) {
    mysqli_query($db, "ALTER TABLE supplies AUTO_INCREMENT=0");
    echo "<script> alert ('Data deleted'); window.location='supplies.php';</script>";
} else
    echo "<script> alert ('Failed to deleting data'); window.location='supplies.php';</script>";
