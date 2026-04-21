<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Transaction</title>

<style>
/* ===== GENERAL LAYOUT ===== */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #e6e6e6;
}

.main-content {
    margin-left: 230px;
    padding: 20px;
}

/* ===== HEADER ===== */
.header {
    background: #204d3a;
    color: white;
    text-align: center;
    padding: 12px;
    font-weight: bold;
    border-radius: 6px;
}

/* ===== FORM CONTAINER ===== */
.form-container {
    margin-top: 15px;
    background: #f0f0f0;
    padding: 15px;
    border-radius: 8px;
}

.form-header {
    background: #204d3a;
    color: white;
    padding: 10px 15px;
    font-weight: bold;
    border-radius: 6px 6px 0 0;
}

/* ===== FORM ===== */
form {
    background: white;
    padding: 20px;
    border-radius: 0 0 6px 6px;
}

/* GRID */
.form-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
}

/* INPUTS */
.form-grid input,
.form-grid select,
.form-grid textarea {
    padding: 8px;
    font-size: 13px;
    border: 1px solid #cfcfcf;
    border-radius: 4px;
    width: 100%;
}

.form-grid textarea {
    height: 55px;
    resize: none;
}

.full-width {
    grid-column: span 4;
}

/* BUTTONS */
.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 15px;
}

.btn-cancel {
    background: #cfcfcf;
    border: none;
    padding: 7px 16px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-save {
    background: #204d3a;
    color: white;
    border: none;
    padding: 7px 18px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-save:hover {
    background: #173a2d;
}
</style>

</head>
<body>

<?php include 'sidebar.php'; ?>

<div class="main-content">

    <div class="header">GNCI CLINIC MANAGEMENT SYSTEM</div>

    <div class="form-container">
        <div class="form-header">Add Transaction</div>

        <form method="POST">
            <div class="form-grid">

                <input type="text" name="first_name" placeholder="First name *" required>
                <input type="text" name="middle_name" placeholder="Middle name">
                <input type="text" name="last_name" placeholder="Last name *" required>
                <input type="text" name="visit_action" placeholder="Visit & action">

                <input type="email" name="email" placeholder="Email *">
                <input type="text" name="phone" placeholder="Phone *">
                <input type="date" name="dob">
                <input type="number" name="age" placeholder="Age">

                <input type="text" name="school_id" placeholder="School ID *">

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

                <textarea name="details" class="full-width" placeholder="Details (optional)"></textarea>

                <textarea name="address" class="full-width" placeholder="Address"></textarea>

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