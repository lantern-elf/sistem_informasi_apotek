<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suplies | Sistem Informasi Apotek</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'layout/nav.html' ?>
    <main class="content" id="content">
        <div class="data">
            <div class="table_content">
                <div class="table_header">
                    <label for="">Item Supplies</label>
                </div>
                <table class="supplies_table">
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Total</th>
                        <th>Price (Rp)</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    // error_reporting(0);
                    $get_data_supplies = mysqli_query($db, "SELECT * FROM supplies");
                    $no_supplies = 1;
                    foreach ($get_data_supplies as $row) { ?>
                        <tr>
                            <td><?php echo $no_supplies++; ?></td>
                            <td><?php echo $row['item_id']; ?></td>
                            <td><?php echo $row['item_name']; ?></td>
                            <td><?php echo $row['item_category']; ?></td>
                            <td><?php echo $row['item_total']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td>
                                <ul class="dropdown_act">
                                    <i class="fa-sharp fa-solid fa-ellipsis"></i>
                                    <div class="act">
                                        <a href="supplies_delete.php?item_id=<?php echo $row['item_id']; ?>">Delete</a>
                                        <a href="supplies_edit.php?item_id=<?php echo $row['item_id']; ?>">Edit</a>
                                        <a href="supplies_buy.php?item_id=<?php echo $row['item_id']; ?>">Purhcase</a>
                                    </div>
                                </ul>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <form action="supplies_input.php" method="post">
                            <?php
                            $id_preview = $row['item_id'];
                            ?>
                            <td><?php echo $no_supplies++; ?></td>
                            <td><?php echo $id_preview + 1; ?></td>
                            <td><input class="item_input_table" placeholder="Item name" type="text" name="item_name"></td>
                            <td>
                                <select class="item_input_table" placeholder="Item name" type="text" name="item_category">
                                    <option value="Over-the-counter drugs">Over-the-counter drugs</option>
                                    <option value="Limited over-the-counter drugs">Limited over-the-counter drugs</option>
                                    <option value="Hard drugs">Hard drugs</option>
                                </select>
                            </td>
                            <td><input class="item_input_table" placeholder="Item total" type="number" name="item_total"></td>
                            <td><input class="item_input_table" placeholder="Item price" type="number" name="item_price"></td>
                            <td><input class="item_input_table" type="submit"></td>
                        </form>
                    </tr>
                </table>
            </div>
            <div class="table_content">
                <div class="table_header">
                    <label for="">Transactions</label>
                </div>
                <table class="supplies_table">
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Total</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $no_transactions = 1;
                    $get_data_transactions = mysqli_query($db, "SELECT * FROM transactions");
                    foreach ($get_data_transactions as $row) { ?>
                        <tr>
                            <td><?php echo $no_transactions++; ?></td>
                            <td><?php echo $row['transaction_on']; ?></td>
                            <td><?php echo $row['transaction_item_id']; ?></td>
                            <td><?php echo $row['item_name']; ?></td>
                            <td><?php echo $row['total_item']; ?></td>
                            <td><?php echo $row['total_price']; ?></td>
                            <td>
                                <ul class="dropdown_act">
                                    <i class="fa-sharp fa-solid fa-ellipsis"></i>
                                    <div class="act">
                                        <a href="transaction_delete.php?transaction_on=<?php echo $row['transaction_on']; ?>">Delete</a>
                                    </div>
                                </ul>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </main>
    <script src="main.js"></script>
</body>

</html>