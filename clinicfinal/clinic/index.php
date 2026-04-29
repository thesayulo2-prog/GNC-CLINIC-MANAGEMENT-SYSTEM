<?php
$showPopup = false;
if (isset($_POST['save'])) {
    // Dito mo ilalagay ang database code mo sa susunod.
    $showPopup = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GNCI Clinic Management System</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <?php include('sidebar.php'); ?>

    <div id="content">
        <header class="top-navbar">
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
            <div class="form-header">Add Transaction Page</div>
        </main>

        <main class="main-container">
            <div class="form-body">
                <form>
                    <div class="form-row">
                        <div class="field-group">
                            <label>First name *</label>
                            <input type="text" name="fname">
                        </div>
                        <div class="field-group">
                            <label>Middle name *</label>
                            <input type="text" name="mname">
                        </div>
                        <div class="field-group">
                            <label>Last name *</label>
                            <input type="text" name="lname">
                        </div>
                        <div class="field-group">
                            <label>Year & section *</label>
                            <input type="text" name="ysec">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="field-group">
                            <label>Email *</label>
                            <input type="email" name="email">
                        </div>
                        <div class="field-group">
                            <label>Phone *</label>
                            <input type="text" name="phone">
                        </div>
                        <div class="field-group">
                            <label>Date of birth *</label>
                            <input type="date" name="dob">
                        </div>
                        <div class="field-group">
                            <label>Age *</label>
                            <input type="text" name="age" readonly placeholder="Auto">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="field-group">
                            <label>School ID *</label>
                            <div class="input-with-icon">
                                <input type="text" name="sid">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                        <div class="field-group">
                            <label>Gender *</label>
                            <select name="gender">
                                <option value="">- select -</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div class="field-group">
                            <label>Student Type *</label>
                            <select name="type">
                                <option value="">- select -</option>
                                <option value="Elemantay">Elemantary</option>
                                <option value="JHS">Junior Highschool</option>
                                <option value="SHS">Senior High</option>
                                <option value="College">College</option>
                            </select>
                        </div>
                        <div class="field-group">
                            <label>Concern *</label>
                            <select name="concern">
                                <option value="">- select -</option>
                                <option value="Medicine">Medicine</option>
                                <option value="Necessities">Necessities</option>
                                <option value="Clinic Admission">Clinic Admission</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row-split">
                        <div class="left-col">
                            <div class="field-group">
                                <label>Department *</label>
                                <select name="dept">
                                    <option value="">- Select -</option>
                                    <option value="BSED">BSED</option>
                                    <option value="BSBA">BSBA</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="BSTM">BSTM</option>
                                </select>
                            </div>
                            <div class="field-group" style="margin-top: 15px;">
                                <label>Address *</label>
                                <input type="text" name="address">
                            </div>
                        </div>
                        <div class="field-group">
                            <label>Details (optional) *</label>
                            <textarea name="details"></textarea>
                        </div>
                    </div>

                    <form method="POST">
                        <div class="form-actions">
                            <button type="button" class="btn-cancel">Cancel</button>
                            <button type="submit" name="save" class="btn-save">Save</button>
                        </div>
                    </form>
                    
                    <?php if ($showPopup): ?>
                        <div class="success-popup-container" style="display: flex;">
                            <div class="success-popup">
                                <i class="fa-solid fa-check"></i>
                                <p>Saved Successfully</p>
                                <button onclick="window.location.href='index.php'" style="margin-top:10px; cursor:pointer; padding:5px 15px; border-radius:5px; border:1px solid #ddd;">OK</button>
                            </div>
                        </div>
                        <?php endif; ?>
                    </main>
                </div>
</body>
</html>