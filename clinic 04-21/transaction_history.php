<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transaction History | GNCI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include('sidebar.php'); ?>

<div id="content">

    <!-- Top Navbar -->
    <header class="top-navbar">
        <div style="width: 50px;"></div>
        <div class="header-title">GNCI CLINIC MANAGEMENT SYSTEM</div>
        <div class="header-right">
            <i class="fa-regular fa-envelope"></i>
            <i class="fa-regular fa-bell"></i>
            <div class="profile-circle">
                <img src="profile.png" alt="Profile">
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-container">

        <!-- Page Header -->
        <div class="form-header">
            Transaction History
        </div>

        <!-- Card -->
        <div class="form-body">

            <!-- Search -->
            <div style="display:flex; justify-content:flex-end; margin-bottom:15px;">
                <input
                    type="text"
                    placeholder="Search"
                    style="padding:8px 12px; width:220px; border:1px solid #ced4da; border-radius:6px;"
                >
            </div>

            <!-- Table -->
            <table class="history-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Year & Section</th>
                        <th>Age</th>
                        <th>Phone Number</th>
                        <th>Concern</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mar. 20, 2026</td>
                        <td>Santos, Pauline D.</td>
                        <td>BSIT-3B</td>
                        <td>21</td>
                        <td>09123456789</td>
                        <td>Medicine</td>
                        <td>
                            <a href="transaction_details.php" class="view-link">View</a>
                        </td>
                    </tr>

                    <!-- Empty rows for design -->
                    <?php for($i=0; $i<6; $i++): ?>
                    <tr>
                        <td colspan="7">&nbsp;</td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>

        </div>

    </main>
</div>

</body>
</html>
