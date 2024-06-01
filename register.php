<?php
// session_start();
include 'connection.php';

if (isset($_POST['register'])) {
    $created_username = $_POST['username'];
    $created_password = $_POST['created_password'];
    $confirmed_password = $_POST['confirmed_password'];

    $insert_account = "INSERT INTO users (username, password) VALUES('$created_username', '$created_password')";
    if (!$created_username || !$created_password || !$confirmed_password) {
        echo "<script> alert ('Enter username and password')</script>";
    } else {
        if ($created_password != $confirmed_password) {
            echo "<script> alert ('Created password and confirm password are no same')</script>";
        } else {
            if ($db->query($insert_account)) {
                echo "<script> alert ('Account Created')</script>";
                header('location:login.php');
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Sistem Informasi Apotek</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="parent display_center">
        <div class="card login_container">
            <div class="login_head">Register</div>
            <div class="form_login">
                <form action="" method="post">
                    <ul class="input_list">
                        <li>
                            <label class="input_component" for="">Create username</label>
                            <input class="input_component" type="text" name="username">
                        </li>
                        <li>
                            <label class="input_component" for="">Create Password</label>
                            <input class="input_component" type="password" name="created_password">
                        </li>
                        <li>
                            <label class="input_component" for="">Confirm Password</label>
                            <input class="input_component" type="password" name="confirmed_password">
                        </li>
                        <li>
                            <a class="register_link" href="login.php">Login now</a>
                        </li>
                        <li class="submit_register">
                            <input class="input_component" type="submit" name="register" value="Register">
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="main.js"></script>

</html>