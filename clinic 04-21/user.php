<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management | GNCI</title>
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

        <!-- Header -->
        <div class="user-header">
            <span>System User Accounts &amp; Management</span>
            <button class="btn-add-user">+ Add User</button>
        </div>

        <!-- Stats -->
        <div class="user-stats">
            <div class="stat-box">Total Admins <h3>1</h3></div>
            <div class="stat-box">Total Staff <h3>5</h3></div>
            <div class="stat-box">Active Sessions <h3>2</h3></div>
            <div class="stat-box">
                Pending Role Approvals
                <h3>0 <small>(Approved)</small></h3>
            </div>
        </div>

        <!-- Filters -->
        <div class="user-filters">
            <input type="text" placeholder="Search">

            <select>
                <option>Role</option>
                <option>Administrator</option>
                <option>Staff</option>
            </select>

            <select>
                <option>Department</option>
                <option>Clinic</option>
                <option>Inventory</option>
            </select>

            <select>
                <option>Status</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>

            <button class="btn-report">Generate Report</button>
        </div>

        <!-- Table -->
        <div class="form-body">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Assigned Role</th>
                        <th>Status</th>
                        <th>Last Login</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>S-001</td>
                        <td>Ussi, Angel L.</td>
                        <td>ussiel@email.com</td>
                        <td>Administrator</td>
                        <td><span class="status active">Active</span></td>
                        <td>2026‑02‑24 3:15 PM</td>
                        <td class="actions">✏️ 🗑️ 👁️</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</div>

</body>
</html>