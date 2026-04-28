<?php
session_start();

// 🔥 CRITICAL: disable caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// 🔐 session check
if (!isset($_SESSION['user'])) {
    header("Location: loginpage.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | GNCI</title>

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

            <h2 class="dashboard-title">ADMIN DASHBOARD</h2>

            <!-- SUMMARY CARDS -->
            <div class="dashboard-cards">
                <div class="dash-card">
                    <span>TODAY’S ADMISSION / STUDENTS</span>
                    <h3 id="admissionCount">1</h3>
                </div>
                <div class="dash-card">
                    <span>TODAY’S TRANSACTION</span>
                    <h3 id="transactionCount">3</h3>
                </div>
                <div class="dash-card">
                    <span>TOTAL MEDICINE SUPPLIES</span>
                    <h3 id="medicineCount">253</h3>
                </div>
                <div class="dash-card">
                    <span>OTHER NECESSITIES</span>
                    <h3 id="necessitiesCount">53</h3>
                </div>
            </div>

            <!-- LOWER DASHBOARD -->
            <div class="dashboard-grid">

                <!-- RECENT TRANSACTIONS -->
                <div class="dashboard-box recent-transactions">
                    <div class="box-header">
                        <span>RECENT TRANSACTIONS</span>
                        <strong class="add-btn">+</strong>
                    </div>

                    <ul class="recent-list" id="recentTransactions">
                        <li>Thesa Shane G. Yulo <span class="tag blue">Necessities</span></li>
                        <li>Taylor A. Swift <span class="tag red">Admitted</span></li>
                        <li>Limuel B. Escultura <span class="tag green">Medicine</span></li>
                    </ul>
                </div>

                <!-- CHARTS -->
                <div class="charts-grid">

                    <div class="dashboard-box">
                        <span class="box-title">MOST USED MEDICINE</span>
                        <canvas id="medicineChart"></canvas>
                    </div>

                    <div class="dashboard-box">
                        <span class="box-title">MOST USED NECESSITIES / SUPPLIES</span>
                        <canvas id="necessitiesChart"></canvas>
                    </div>

                    <div class="dashboard-box chart-wide">
                        <span class="box-title">OVERALL TRANSACTIONS</span>
                        <canvas id="overallChart"></canvas>
                    </div>

                </div>
            </div>

        </main>
    </div>

    <script>
        /* =============================
   DASHBOARD JAVASCRIPT
============================= */

        document.addEventListener("DOMContentLoaded", () => {

            /* MOST USED MEDICINE */
            new Chart(document.getElementById("medicineChart"), {
                type: "pie",
                data: {
                    labels: ["Neozep", "Biogesic", "Loperamide"],
                    datasets: [{
                        data: [20, 10, 70],
                        backgroundColor: ["#0088FF", "#EF4444", "#22C55E"]
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: "right",
                            labels: {
                                usePointStyle: true
                            }
                        }
                    }
                }
            });

            /* MOST USED NECESSITIES */
            new Chart(document.getElementById("necessitiesChart"), {
                type: "pie",
                data: {
                    labels: ["Wheelchair", "Betadine", "Bandages", "Alcohol", "Face Mask"],
                    datasets: [{
                        data: [28, 20, 10, 15, 45],
                        backgroundColor: [
                            "#D2970B",
                            "#0088FF",
                            "#EF4444",
                            "#E9F45B",
                            "#22C55E"
                        ]
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: "right",
                            labels: {
                                usePointStyle: true
                            }
                        }
                    }
                }
            });

            /* OVERALL TRANSACTIONS */
            new Chart(document.getElementById("overallChart"), {
                type: "bar",
                data: {
                    labels: ["Admission", "Medicine", "Necessities"],
                    datasets: [{
                        data: [10, 70, 20],
                        backgroundColor: "#22C55E"
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

        });

        // Prevent going back to dashboard after logout
        window.addEventListener("pageshow", function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        });
    </script>

</body>

</html>
``