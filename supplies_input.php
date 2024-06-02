<?php
include 'connection.php';
$item_name = $_POST['item_name'];
$item_category = $_POST['item_category'];
$item_total = $_POST['item_total'];
$item_price = $_POST['item_price'];
$sql = "INSERT INTO supplies(item_name, item_category, item_total, price) VALUES('$item_name', '$item_total', '$item_price')";
$select = "SELECT * FROM supplies WHERE item_name = '$item_name'";
$result = $db->query($select);
$row = mysqli_fetch_array($result);

if ($result->num_rows > 0) {
    $existing_total = $row['item_total'];
    $item_id = $row['item_id'];
    if (!$item_total) {
        echo "<script> alert ('Atleast do not let total empty'); window.location='supplies.php';</script>";
    } else {
        $new_total = $existing_total + $item_total;
        $update_total = $db->query("UPDATE supplies SET item_total ='$new_total' WHERE item_id = '$item_id'");
        if ($update_total) {
            echo "<script> alert ('Item is already exist. The item total has updated.'); window.location='supplies.php';</script>";
        }
    }
} else {
    if (!$item_name || !$item_category || !$item_total || !$item_price) {
        echo "<script> alert ('Enter the item!'); window.location='supplies.php';</script>";
    } else {
        $insert_data = $db->query($sql);
        echo "<script> alert ('Item entered'); window.location='supplies.php';</script>";
    }
}
