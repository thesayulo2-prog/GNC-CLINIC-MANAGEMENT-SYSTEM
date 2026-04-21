<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Transaction</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<div class="main-content">

    <div class="header">
        GNCI CLINIC MANAGEMENT SYSTEM
    </div>

    <div class="form-container">
        <div class="form-header">
            Add Transaction
        </div>

        <form method="POST" action="">
            <div class="form-grid">
                <input type="text" name="first_name" placeholder="First name *" required>
                <input type="text" name="middle_name" placeholder="Middle name">
                <input type="text" name="last_name" placeholder="Last name *" required>
                <input type="text" name="visit_action" placeholder="Visit & action">

                <input type="email" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
                <input type="date" name="dob">
                <input type="number" name="age" placeholder="Age">

                <input type="text" name="school_id" placeholder="School ID">

                <select name="gender">
                    <option value="">Gender *</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>

                <select name="student_type">
                    <option value="">Student Type *</option>
                    <option>Student</option>
                    <option>Staff</option>
                </select>

                <select name="concern">
                    <option value="">Concern *</option>
                    <option>Medicine</option>
                    <option>Necessities</option>
                    <option>Admitted</option>
                </select>

                <select name="department" class="full-width">
                    <option value="">Department *</option>
                    <option>IT</option>
                    <option>Nursing</option>
                    <option>Education</option>
                </select>

                <textarea name="details" placeholder="Details (optional)" class="full-width"></textarea>

                <textarea name="address" placeholder="Address" class="full-width"></textarea>
            </div>

            <div class="form-actions">
                <button type="button" class="btn-cancel" onclick="history.back()">Cancel</button>
                <button type="submit" class="btn-save">Save</button>
            </div>
        </form>
    </div>

</div>

</body>
</html>