<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | GNCI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include('sidebar.php'); ?>

<div id="content">

    <!-- Top Navbar -->
    <header class="top-navbar">
        <div style="width:50px;"></div>
        <div class="header-title">GNCI CLINIC MANAGEMENT SYSTEM</div>
        <div class="header-right">
            <i class="fa-regular fa-envelope"></i>
            <i class="fa-regular fa-bell"></i>
            <div class="profile-circle">
                <img src="profile.png">
            </div>
        </div>
    </header>

    <main class="main-container">

        <!-- Page Title -->
        <h2 class="dashboard-title">ADMIN DASHBOARD</h2>

        <!-- Summary Cards -->
        <div class="dashboard-cards">
            <div class="dash-card">
                <span>TODAY’S ADMISSION/STUDENTS</span>
                <h3>1</h3>
            </div>
            <div class="dash-card">
                <span>TODAY’S TRANSACTION</span>
                <h3>3</h3>
            </div>
            <div class="dash-card">
                <span>TOTAL MEDICINE SUPPLIES</span>
                <h3>253</h3>
            </div>
