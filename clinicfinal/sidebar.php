<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
    /* =============================
   SIDEBAR SMOOTH SWITCH STYLES
============================= */

    .nav-links li {
        margin-bottom: 5px;
        transition: background-color 0.25s ease, transform 0.25s ease;
    }

    .nav-links li a {
        transition: color 0.25s ease, padding-left 0.25s ease;
    }

    /* ACTIVE (WHITE) */
    .nav-links li.active {
        background-color: white;
        border-radius: 10px;
        margin-right: 15px;
        transform: translateX(6px);
        /* smooth slide */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .nav-links li.active a {
        color: #1a3026;
        font-weight: bold;
    }

    /* HOVER (SMOOTH FEEL) */
    .nav-links li:hover {
        background-color: rgba(255, 255, 255, 0.12);
        border-radius: 10px;
    }

    .nav-links li:hover a {
        padding-left: 25px;
    }

    .logout-btn {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 15px;
        margin-top: 20px;
        color: #fff;
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        border-radius: 10px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
    }

    .logout-btn i {
        font-size: 16px;
    }

    .logout-btn:hover {
        background: linear-gradient(135deg, #c0392b, #a93226);
        transform: translateX(5px);
        box-shadow: 0 6px 18px rgba(231, 76, 60, 0.5);
    }
</style>

<div id="sidebar">
    <div class="sidebar-logo">
        <img src="gnc logo.png" alt="GNCI Logo">
    </div>

    <ul class="nav-links">

        <li class="<?= $current_page === 'dashboard.php' ? 'active' : '' ?>">
            <a href="dashboard.php">
                <img src="dash.png" class="nav-icon"> Dashboard
            </a>
        </li>

        <li class="<?= $current_page === 'inventory.php' ? 'active' : '' ?>">
            <a href="#">
                <img src="inventory.png" class="nav-icon"> Inventory
            </a>
        </li>

        <li class="<?= $current_page === 'index.php' ? 'active' : '' ?>">
            <a href="#">
                <img src="transaction.png" class="nav-icon"> Transaction Record
            </a>
        </li>

        <li class="<?= $current_page === 'transaction_history.php' ? 'active' : '' ?>">
            <a href="#">
                <img src="history.png" class="nav-icon"> Transaction History
            </a>
        </li>

        <li class="<?= $current_page === 'user.php' ? 'active' : '' ?>">
            <a href="#">
                <img src="user management.png" class="nav-icon"> User Management
            </a>
        </li>

        <a href="logout.php" class="logout-btn">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>
    </ul>
</div>