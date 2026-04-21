<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GNCI Clinic Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include('sidebar.php'); ?>

    <div class="main-content">
        <div class="header">
            GNCI CLINIC MANAGEMENT SYSTEM
        </div>

        <div class="dashboard-container">
            <h2>ADMIN DASHBOARD</h2>

            <div class="top-cards">
                <div class="card"><p>Today's Admission</p><h1>1</h1></div>
                <div class="card"><p>Today's Transaction</p><h1>3</h1></div>
                <div class="card"><p>Total Medicine Supplies</p><h1>253</h1></div>
                <div class="card"><p>Other Necessities</p><h1>53</h1></div>
            </div>

            <div class="bottom-grid">
                <div class="white-box">
                    <div style="display: flex; justify-content: space-between;">
                        <p style="font-weight: bold; color: #666;">RECENT TRANSACTIONS</p>
                        <b style="font-size: 20px; cursor: pointer;">+</b>
                    </div>
                    <ul class="transaction-list">
                        <li><span>Thesa Shane G. Yulo</span><span class="status status-necessities">Necessities</span></li>
                        <li><span>Taylor A. Swift</span><span class="status status-admitted">Admitted</span></li>
                        <li><span>Limuel B. Escoltura</span><span class="status status-medicine">Medicine</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>