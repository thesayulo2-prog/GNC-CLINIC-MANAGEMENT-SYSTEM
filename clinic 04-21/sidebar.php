<div class="sidebar">
    <div class="logo-container">
        <img src="gnc logo.png" alt="GNCI Logo">
    </div>
<ul class="nav-menu">
    <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
        <a href="index.php" style="text-decoration: none; color: inherit;">
            <i class="fas fa-home"></i>
            <img src="dashboard.png" width="20">
            <span>Dashboard</span>
        </a>
    </li>

   <li class="nav-item">
            <a href="#">
                <i class="fas fa-boxes"></i>
                <img src="invent.png" width="20">
                <span>Inventory</span>
            </a>
        </li>

    <li class="nav-item">
            <a href="#">
                <i class="fas fa-boxes"></i>
                <img src="trans.png" width="20">
                <span>Transaction</span>
            </a>
        </li>

    <li class="nav-item">
            <a href="#">
                <i class="fas fa-boxes"></i>
                <img src="history.png" width="20">
                <span>Transaction History</span>
            </a>
        </li>

    <li class="nav-item">
            <a href="#">
                <i class="fas fa-boxes"></i>
                <img src="user management.png" width="20">
                <span>User Management</span>
            </a>
        </li>
</ul>
</div>