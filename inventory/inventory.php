<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GNC Clinic Management System - Inventory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="sidebar">
        <div class="sidebar-logo">
            <img src="gnc logo.png" alt="GNC Logo">
        </div>
        <ul class="nav-links">
            <li><a href="#"><img src="dashboard.png" class="icon"> Dashboard</a></li>
            <li class="active"><a href="#"><img src="invent.png" class="icon"> Inventory</a></li>
            <li><a href="#"><img src="trans.png" class="icon"> Transaction Record</a></li>
            <li><a href="#"><img src="history.png" class="icon"> Transaction History</a></li>
            <li><a href="#"><img src="user management.png" class="icon"> User Management</a></li>
        </ul>
    </div>

    <div id="content">
        <div class="top-bar">
            <h2>GNCI CLINIC MANAGEMENT SYSTEM</h2>
            <div class="user-info">
                <i class="fa-regular fa-envelope"></i>
                <i class="fa-regular fa-bell"></i>
                <i class="fa-solid fa-circle-user" style="font-size: 24px;"></i>
            </div>
        </div>

        <div class="main-container">
            <div class="card-header">All Inventory Items</div>

            <div class="inventory-card">
                <div class="table-controls">
                    <button class="btn-add" id="addBtn"> 
                        <i class="fa-solid fa-circle-plus"></i> Add Item
                    </button>
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search">
                    </div>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Item Name</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Expiration Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr><td>1</td><td>Biogesic</td><td>Medicine</td><td>25</td><td>2027-05-12</td><td><span class="status normal">NORMAL</span></td><td class="actions"><i class="fa-regular fa-trash-can"></i><i class="fa-regular fa-pen-to-square"></i><i class="fa-regular fa-eye"></i></td></tr>
                    <tr><td>2</td><td>Paracetamol</td><td>Medicine</td><td>20</td><td>2027-01-10</td><td><span class="status normal">NORMAL</span></td><td class="actions"><i class="fa-regular fa-trash-can"></i><i class="fa-regular fa-pen-to-square"></i><i class="fa-regular fa-eye"></i></td></tr>
                    <tr><td>3</td><td>Cetirizine</td><td>Medicine</td><td>18</td><td>2026-10-12</td><td><span class="status normal">NORMAL</span></td><td class="actions"><i class="fa-regular fa-trash-can"></i><i class="fa-regular fa-pen-to-square"></i><i class="fa-regular fa-eye"></i></td></tr>
                    <tr><td>4</td><td>Amoxicillin</td><td>Medicine</td><td>3</td><td>2026-10-20</td><td><span class="status low">LOW STOCK</span></td><td class="actions"><i class="fa-regular fa-trash-can"></i><i class="fa-regular fa-pen-to-square"></i><i class="fa-regular fa-eye"></i></td></tr>
                    <tr><td>5</td><td>Bandage</td><td>Medical Supply</td><td>50</td><td>N/A</td><td><span class="status normal">NORMAL</span></td><td class="actions"><i class="fa-regular fa-trash-can"></i><i class="fa-regular fa-pen-to-square"></i><i class="fa-regular fa-eye"></i></td></tr>
                    <tr><td>6</td><td>Gauze</td><td>Medical Supply</td><td>30</td><td>N/A</td><td><span class="status normal">NORMAL</span></td><td class="actions"><i class="fa-regular fa-trash-can"></i><i class="fa-regular fa-pen-to-square"></i><i class="fa-regular fa-eye"></i></td></tr>
                    <tr><td>7</td><td>Face Mask</td><td>Medical Supply</td><td>100</td><td>N/A</td><td><span class="status normal">NORMAL</span></td><td class="actions"><i class="fa-regular fa-trash-can"></i><i class="fa-regular fa-pen-to-square"></i><i class="fa-regular fa-eye"></i></td></tr>
                    <tr><td>8</td><td>Cotton</td><td>Medical Supply</td><td>20</td><td>N/A</td><td><span class="status normal">NORMAL</span></td><td class="actions"><i class="fa-regular fa-trash-can"></i><i class="fa-regular fa-pen-to-square"></i><i class="fa-regular fa-eye"></i></td></tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="addItemModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Clinic Inventory System</h3>
                </div>
                <div class="modal-body">
                    <form id="inventoryForm">
                        <div class="form-group">
                            <label>Item Name:</label>
                            <input type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Category:</label>
                            <select>
                                <option value="" disabled selected hidden>- select -</option>
                                <option>- select -</option>
                                <option>Medicine</option>
                                <option>Medical Supply</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Quantity:</label>
                                <input type="number">
                            </div>
                            <div class="form-group">
                                <label>Unit:</label>
                                <select>
                                    <option value="" disabled selected hidden>- select -</option>
                                    <option>- select -</option>
                                    <option>Tablet</option>
                                    <option>Box</option>
                                    <option>Pack</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date Added:</label>
                            <input type="date">
                        </div>

                        <hr> <p class="section-title">Medicine Details</p>

                        <div class="form-group">
                            <label>Expiration Date:</label>
                            <input type="date">
                        </div>
                        <div class="form-group">
                            <label>Batch Number:</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label>Dosage:</label>
                            <input type="text" placeholder="e.g. 500mg">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn-save" id="saveBtn">
                        <i class="fa-solid fa-floppy-disk"></i> Save
                    </button>
                    <button class="btn-cancel" id="cancelBtn">
                        <i class="fa-solid fa-xmark"></i> Cancel
                    </button>
                </div>
            </div>
        </div>

        <script>
            const modal = document.getElementById("addItemModal");
            const addBtn = document.querySelector(".btn-add");
            const cancelBtn = document.getElementById("cancelBtn");

             // I-hide agad pag load ng page
            modal.classList.remove("show");

            // Pag-click sa Add Item
            addBtn.onclick = function() {
                modal.classList.add("show");
            }

            // Pag-click sa Cancel
            cancelBtn.onclick = function() {
                modal.classList.remove("show");
            }

            // Pag-click sa labas
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.classList.remove("show");
                }
            }
        </script>

</body>
</html>