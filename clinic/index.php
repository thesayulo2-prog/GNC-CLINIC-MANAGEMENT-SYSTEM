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

    <div id="content">
        <header class="top-navbar">
            <div style="width: 50px;"></div> <div class="header-title">GNCI CLINIC MANAGEMENT SYSTEM</div>
            <div class="header-right">
                <i class="fa-regular fa-envelope"></i>
                <i class="fa-regular fa-bell"></i>
                <div class="profile-circle">
                    <img src="profile.png" alt="Profile">
                </div>
            </div>
        </header>

        <main class="main-container">
    <div class="form-card">
        
        <div class="form-header">
            Add Transaction
        </div>
        
    </div>
</main>

        <main class="main-container">
            <div class="form-card">
                <form class="form-body">
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
                            <input type="text" name="age">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="field-group">
                            <label>School ID *</label>
                            <div class="search-wrapper">
                                <input type="text" name="sid">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                        <div class="field-group">
                            <label>Gender *</label>
                            <select><option>- select -</option>
                            <option>Female</option>
                            <option>Male</option></select>
                        </div>
                        <div class="field-group">
                            <label>Student Type *</label>
                            <select><option>- select -</option>
                            <option>Elemantary</option>
                            <option>Junior Highschool</option>
                            <option>Senior Highschool</option>
                            <option>College</option></select>
                        </div>
                        <div class="field-group">
                            <label>Concern *</label>
                            <select><option>- select -</option>
                            <option>Medicine</option>
                            <option>Necessities</option>
                            <option>Clinic Admission</option></select>
                        </div>
                    </div>

                    <div class="form-row-split">
                        <div class="left-col">
                            <div class="field-group">
                                <label>Department *</label>
                                <select><option>- Select -</option></select>
                            </div>
                            <div class="field-group" style="margin-top: 15px;">
                                <label>Address *</label>
                                <input type="text" name="address">
                            </div>
                        </div>
                        <div class="right-col">
                            <div class="field-group">
                                <label>Details (optional) *</label>
                                <textarea></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-cancel">Cancel</button>
                        <button type="submit" class="btn-save">Save</button>
                        /* wala pang save successfully */
                    </div>
                </form>
            </div>
        </main>
    </div>

</body>
</html>