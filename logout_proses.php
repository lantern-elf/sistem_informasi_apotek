<?php
session_start();
include 'connection.php';
if (session_destroy()) {
    header('location:login.php');
}
