<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Sistem Informasi Apotek</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'layout/nav.html' ?>
    <main class="content_about" id="content">
        <div class="card_about">
            <h1>ABOUT</h1>
            <p>
                This is a Apotek information sistem web based. This web created with Html, CSS, and Javascript as front-end and Php as back-end, also uses mysql as database.
            </p>
        </div>
    </main>
    <footer>
        <hr />
        <p>
            Created by R.M. Arsy
        </p>
    </footer>
</body>
<script src="main.js"></script>

</html>