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
                <img src="profile.png" alt="Profile">
            </div>
        </div>
    </header>

    <main class="main-container">

        <!-- PAGE HEADER -->
        <div class="dashboard-box" style="background:#1a3026; color:white; display:flex; justify-content:space-between; align-items:center;">
            <strong>System User Accounts &amp; Management</strong>
            <button class="btn-save" style="padding:6px 15px; font-size:13px;">
                + Add User
            </button>
        </div>

        <!-- SUMMARY CARDS -->
        <div class="dashboard-cards" style="grid-template-columns: repeat(4, 1fr); margin-top:15px;">
            <div class="dash-card">
                <span>Total Admins</span>
                <h3>1</h3>
            </div>
            <div class="dash-card">
                <span>Total Staff</span>
                <h3>5</h3>
            </div>
            <div class="dash-card">
                <span>Active Sessions</span>
                <h3>2</h3>
            </div>
            <div class="dash-card">
                <span>Pending Role Approvals</span>
                <h3>0 <small style="color:#22C55E;">(Approved)</small></h3>
            </div>
        </div>

        <!-- FILTER BAR -->
        <div class="dashboard-box" style="margin-top:15px;">
            <div style="display:flex; gap:10px; align-items:center; flex-wrap:wrap;">

                <input type="text" placeholder="Search" style="padding:6px 10px; font-size:13px;">

                <select style="padding:6px 10px; font-size:13px;">
                    <option>Role</option>
                    <option>Administrator</option>
                    <option>Staff</option>
                </select>

                <select style="padding:6px 10px; font-size:13px;">
                    <option>Department</option>
                    <option>Clinic</option>
                    <option>Pharmacy</option>
                </select>

                <select style="padding:6px 10px; font-size:13px;">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>

                <button class="btn-save" style="padding:6px 12px; font-size:13px;">
                    Generate Report
                </button>

            </div>
        </div>

        <!-- USER TABLE -->
        <div class="dashboard-box">
            <table class="history-table">
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
                        <td>Usis, Angel L.</td>
                        <td>usisangl@gmail.com</td>
                        <td>Administrator</td>
                        <td><span class="tag green">Active</span></td>
                        <td>2026-02-24 3:15 PM</td>
                        <td>
                            ✏️ 🗑️ 👁️
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</div>

</body>
</html>
