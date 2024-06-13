<?php
session_start();
include 'connection.php';

if (session_destroy()) {
    // header('location:login.php');
} else {
    echo "login?";
}

$get_supplies = "SELECT * FROM supplies";
$get_supplies_result = $db->query($get_supplies);
$suplies_row = mysqli_fetch_array($get_supplies_result);

$total_count_supplies_sql = "SELECT count(*), sum(item_total) FROM supplies";
$get_supplies_item_total = $db->query($total_count_supplies_sql);
$supplies_total_item = mysqli_fetch_array($get_supplies_item_total);

$total_count_sold_sql = "SELECT count(*), sum(total_item) FROM transactions";
$get_sold_total = $db->query($total_count_sold_sql);
$sold_total = mysqli_fetch_array($get_sold_total);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Sistem Informasi Apotek</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'layout/nav.html' ?>
    <main class="content" id="content">
        <h1 class="home_header">Overview</h1>
        <div class="overwiew">
            <div class="overview_card">
                <label for="">Drugs Total</label>
                <div class="card_overview">
                    <?php echo $supplies_total_item['sum(item_total)']; ?>
                </div>
            </div>
            <div class="overview_card">
                <label for="">Drugs Sold</label><br />
                <div class="card_overview">
                    <?php echo $sold_total['sum(total_item)'] ?>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="main.js"></script>

</html>