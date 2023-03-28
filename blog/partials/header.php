<?php
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySQL</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Iconscout cdn -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release-pro/v4.0.0/css/line.css">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>" class="nav__logo">Blog</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Sevices</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                <li><a href="<?= ROOT_URL ?>signin.php">Sign In</a></li>
                <!-- <li class="nav__profile">
                    <div class="avatar"><img src="./images/avatar1.jpg" alt=""></div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li> -->
            </ul>
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- ======================================= End of Nav ============================================================================ -->