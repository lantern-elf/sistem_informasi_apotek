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
        <div class="parent">
            <?php include 'layout/suplies_nav.html' ?>
            <div class="table_content">
                <div class="table_header">
                    <label for="">Item Supplies</label>
                </div>
                <table>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Total</th>
                        <th>Price</th>
                        <th>Act</th>
                    </tr>
                    <?php
                    $get_data = mysqli_query($db, "SELECT * FROM suplies");
                    $no = 1;
                    foreach ($get_data as $row) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['item_id']; ?></td>
                            <td><?php echo $row['item_name']; ?></td>
                            <td><?php echo $row['item_total']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td>
                                <div class="act">
                                    <a href="">Delete</a>
                                    <a href="">Edit</a>
                                    <a href="">Buy</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="table_content">

            </div>
        </div>
    </main>
    <script src="main.js"></script>
</body>

</html>