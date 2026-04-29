<div class="sidebar">
    <div class="logo-container">
        <img src="gnc logo.png" alt="GNCI Logo">
    </div>
    <ul class="nav-menu">
        <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>"> 
            <a href="index.php" style="text-decoration: none; color: inherit;">Dashboard</a>
        </li>
        <li class="nav-item">Inventory</li>
        <li class="nav-item">Transaction Record</li>
        <li class="nav-item">Transaction History</li>
        <li class="nav-item">User Management</li>
    </ul>
</div>