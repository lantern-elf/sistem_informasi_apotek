<?php
session_start();
include 'connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($select);
    $row = mysqli_fetch_array($result);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        echo "<script> alert ('Login Succeed')</script>";
        header('location:index.php');
    } else {
        echo "<script> alert ('Invalid username or password')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistem Informasi Apotek</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="parent display_center">
        <div class="card login_container">
            <div class="login_head">Log In</div>
            <div class="form_login">
                <form action="" method="post">
                    <ul class="input_list">
                        <li>
                            <label class="input_component" for="">username</label>
                            <input class="input_component" type="text" name="username">
                        </li>
                        <li>
                            <label class="input_component" for="">Password</label>
                            <input class="input_component" type="password" name="password">
                        </li>
                        <li>
                            <a class="register_link" href="/register.php">Register now</a>
                        </li>
                        <li class="submit_login">
                            <input class="input_component" type="submit" name="login" value="Log in">
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="main.js"></script>

</html>