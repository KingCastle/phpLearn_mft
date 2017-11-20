<?php
session_start();
include "db.php";
include "function/global.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/flickity.css">

    <title>Aric</title>
</head>
<body>
<!--Header -->
<div class="wrapper clearfix">
    <header class="clearfix">
        <div class="Toolbar clearfix">
            <div class="right-Toolbar clearfix">


                <a href="index.php">
                    <span><img src="../img/logo.png" alt="logo"/></span>
                </a>

            </div>
            <div class="left-Toolbar">
                <a href="#">

                    09101393153
                </a>
            </div>
        </div>

        <nav class="menu clearfix">

            <div class="menu-left clearfix">

                <?php
                

                if (isset($_SESSION['user'])) {

                    $user = $_SESSION['user'];
                    echo "<span> کاربر $user  خوش امدید  </span>";

                    echo "<span>خروج</span>";
                } else {
                    ?>

                    <a href="login.php">ورود</a>    /     <a href="register.php">ثبت نام</a>
                    <?php
                } ?>

            </div>

            <div class="menu-nav">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="menu-right">
                <ul>
                    <li><a href="index.php">صفحه اصلی</a></li>
                    <li><a href="category.php">سررسید و تقویم</a></li>
                    <li><a href="catalog.php">دانلود کاتالوگ</a></li>
                    <li><a href="tips.php">نکات سررسید</a></li>
                    <li><a href="news.php">اخبار</a></li>
                    <li><a href="about-us.php">درباره ما</a></li>
                    <li><a href="contact-us.php">تماس با ما</a></li>
                </ul>
            </div>

        </nav>
    </header>