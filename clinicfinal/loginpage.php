<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Portal - Elite UI</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* --- CORE STYLES --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            overflow: hidden;
            background: #f8f9fa;
        }

        .view {
            display: none;
            width: 100%;
            height: 100vh;
            opacity: 0;
            transition: opacity 0.4s ease-in-out;
        }

        .view.active {
            display: flex;
            opacity: 1;
        }

        .left {
            width: 50%;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 20px;
        }

        .right {
            width: 50%;
            height: 100%;
            background: linear-gradient(rgba(47, 111, 78, 0.1), rgba(47, 111, 78, 0.1)),
                url("images/nurse-concept-illustration_114360-15668.avif");
            background-position: center;
            background-size: cover;
        }

        @media (max-width: 768px) {
            .right {
                display: none;
            }

            .left {
                width: 100%;
            }
        }

        .form-container {
            width: 100%;
            max-width: 380px;
            text-align: center;
        }

        .logo-main {
            width: 200px;
            margin-bottom: 40px;
            cursor: pointer;
        }

        .logo-small {
            width: 100px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #264d3b;
        }

        .input-group {
            position: relative;
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group i.main-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
            font-size: 18px;
            z-index: 2;
        }

        .toggle-eye {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
            cursor: pointer;
            z-index: 5;
            transition: 0.2s;
        }

        .toggle-eye:hover {
            color: #2f6f4e;
        }

        .input-field {
            width: 100%;
            padding: 14px 40px;
            border-radius: 12px;
            border: 1px solid #ddd;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        .input-field:focus {
            border-color: #2f6f4e;
            box-shadow: 0 0 8px rgba(47, 111, 78, 0.1);
        }

        /* --- DROPDOWN SYSTEM --- */
        .custom-select {
            width: 100%;
            position: relative;
            margin-bottom: 15px;
            text-align: left;
        }

        .select-box {
            padding: 14px 15px 14px 45px;
            border-radius: 12px;
            border: 1px solid #ddd;
            cursor: pointer;
            background: #fff;
            user-select: none;
            font-size: 14px;
            color: #555;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .select-box::after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: #777;
            transition: transform 0.3s ease, opacity 0.3s ease;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .custom-select.selected .select-box::after {
            opacity: 0;
            pointer-events: none;
        }

        .custom-select.open .select-box::after {
            transform: translateY(-50%) rotate(180deg);
            color: #2f6f4e;
        }

        .custom-select.open .select-box {
            border-color: #2f6f4e;
            box-shadow: 0 0 0 3px rgba(47, 111, 78, 0.1);
        }

        .options-container {
            position: absolute;
            width: 100%;
            background: #fff;
            border-radius: 12px;
            border: 1px solid #eee;
            margin-top: 8px;
            z-index: 100;
            padding: 6px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .custom-select.open .options-container {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .option {
            padding: 12px 15px;
            cursor: pointer;
            border-radius: 8px;
            font-size: 14px;
            color: #444;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .option:hover {
            background: rgba(47, 111, 78, 0.08);
            color: #2f6f4e;
            padding-left: 20px;
        }

        /* --- BUTTONS & TOAST --- */
        .btn-submit {
            width: 100%;
            padding: 14px;
            background: #2f6f4e;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        .btn-submit:hover:not(:disabled) {
            background: #24563d;
            transform: translateY(-1px);
        }

        .btn-submit:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .validation-msg {
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
            display: block;
            min-height: 15px;
        }

        .link-green {
            color: #2f6f4e;
            font-weight: 600;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        #toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        .toast {
            background: #2f6f4e;
            color: white;
            padding: 16px 24px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
            transform: translateX(120%);
            transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.error {
            background: #e74c3c;
        }
    </style>
</head>

<body>

    <div id="toast-container"></div>

    <div id="landingView" class="view active">
        <div class="left">
            <div class="form-container">
                <img src="images/download.png" class="logo-main" alt="logo">
                <button class="btn-submit" onclick="showView('loginView')">Login to Portal</button>
                <button class="btn-submit" style="background:transparent; color:#2f6f4e; border:2px solid #2f6f4e; margin-top:15px;" onclick="showView('registerView')">Register New Account</button>
            </div>
        </div>
        <div class="right"></div>
    </div>

    <div id="loginView" class="view">
        <div class="left">
            <div class="form-container">
                <img src="images/download.png" class="logo-small" alt="logo" onclick="showView('landingView')">
                <h1>Login</h1>
                <form id="loginForm">
                    <div class="custom-select" id="loginRoleSelect">
                        <i class="fa fa-user-shield main-icon" style="position:absolute; left:15px; top:16px; color:#777; z-index:10;"></i>
                        <div class="select-box">Select Role</div>
                        <div class="options-container">
                            <div class="option" data-value="ADMIN"><i class="fa fa-shield-halved"></i> ADMIN</div>
                            <div class="option" data-value="USER"><i class="fa fa-user"></i> USER</div>
                        </div>
                    </div>
                    <input type="hidden" id="loginRole">
                    <div class="input-group"><i class="fa fa-envelope main-icon"></i><input type="email" id="loginEmail" placeholder="Email" class="input-field" oninput="validateLogin()"></div>
                    <div class="input-group">
                        <i class="fa fa-key main-icon"></i>
                        <input type="password" id="loginPassword" placeholder="Password" class="input-field" oninput="validateLogin()">
                        <i class="fa fa-eye toggle-eye" onclick="togglePass('loginPassword', this)"></i>
                    </div>
                    <p style="text-align:right; margin-bottom:15px;"><a onclick="showView('forgotView')" class="link-green">Forgot Password?</a></p>
                    <button type="submit" id="loginBtn" class="btn-submit" disabled>Login</button>
                    <p style="text-align:center; margin-top:20px; font-size:14px;">Don't have an account? <a onclick="showView('registerView')" class="link-green">Register</a></p>
                </form>
            </div>
        </div>
        <div class="right"></div>
    </div>

    <div id="registerView" class="view">
        <div class="left">
            <div class="form-container">
                <img src="images/download.png" class="logo-small" alt="logo" onclick="showView('landingView')">
                <h1>Register</h1>
                <form id="registerForm">
                    <div class="custom-select" id="regRoleSelect">
                        <i class="fa fa-user-shield main-icon" style="position:absolute; left:15px; top:16px; color:#777; z-index:10;"></i>
                        <div class="select-box">Select Role</div>
                        <div class="options-container">
                            <div class="option" data-value="ADMIN"><i class="fa fa-shield-halved"></i> ADMIN</div>
                            <div class="option" data-value="USER"><i class="fa fa-user"></i> USER</div>
                        </div>
                    </div>
                    <input type="hidden" id="regRole">
                    <div class="input-group"><i class="fa fa-user main-icon"></i><input type="text" id="regName" placeholder="Full Name" class="input-field" oninput="validateReg()"></div>
                    <div class="input-group"><i class="fa fa-envelope main-icon"></i><input type="email" id="regEmail" placeholder="Email" class="input-field" oninput="validateReg()"></div>
                    <div class="input-group">
                        <i class="fa fa-lock main-icon"></i>
                        <input type="password" id="regPass" placeholder="Password" class="input-field" oninput="validateReg()">
                        <i class="fa fa-eye toggle-eye" onclick="togglePass('regPass', this)"></i>
                    </div>
                    <div class="input-group"><i class="fa fa-check-circle main-icon"></i><input type="password" id="regConfirm" placeholder="Confirm Password" class="input-field" oninput="validateReg()"></div>
                    <span id="regStatus" class="validation-msg"></span>
                    <button type="submit" id="registerBtn" class="btn-submit" disabled>Create Account</button>
                    <p style="text-align:center; margin-top:20px; font-size:14px;">Already have an account? <a onclick="showView('loginView')" class="link-green">Login</a></p>
                </form>
            </div>
        </div>
        <div class="right"></div>
    </div>

    <div id="forgotView" class="view">
        <div class="left">
            <div class="form-container">
                <img src="images/download.png" class="logo-small" alt="logo" onclick="showView('landingView')">
                <h1>Reset</h1>
                <form id="forgotForm">
                    <div class="custom-select" id="forgotRoleSelect">
                        <i class="fa fa-user-shield main-icon" style="position:absolute; left:15px; top:16px; color:#777; z-index:10;"></i>
                        <div class="select-box">Select Role</div>
                        <div class="options-container">
                            <div class="option" data-value="ADMIN"><i class="fa fa-shield-halved"></i> ADMIN</div>
                            <div class="option" data-value="USER"><i class="fa fa-user"></i> USER</div>
                        </div>
                    </div>
                    <input type="hidden" id="forgotRole">
                    <div class="input-group"><i class="fa fa-envelope main-icon"></i><input type="email" id="forgotEmail" placeholder="Email" class="input-field" oninput="validateForgot()"></div>
                    <div class="input-group">
                        <i class="fa fa-lock main-icon"></i>
                        <input type="password" id="newPass" placeholder="New Password" class="input-field" oninput="validateForgot()">
                        <i class="fa fa-eye toggle-eye" onclick="togglePass('newPass', this)"></i>
                    </div>
                    <div class="input-group"><i class="fa fa-check-circle main-icon"></i><input type="password" id="confirmReset" placeholder="Confirm Password" class="input-field" oninput="validateForgot()"></div>
                    <span id="forgotStatus" class="validation-msg"></span>
                    <button type="submit" id="resetBtn" class="btn-submit" disabled>Update Password</button>
                    <p style="text-align:center; margin-top:15px;"><a onclick="showView('loginView')" class="link-green">Back to Login</a></p>
                </form>
            </div>
        </div>
        <div class="right"></div>
    </div>


    <script>
        function clearDropdowns() {
            document.querySelectorAll('.custom-select').forEach(s => {
                s.classList.remove('selected');
                s.querySelector('.select-box').innerHTML = 'Select Role';
                s.querySelector('.select-box').style.color = "#555";
            });
            document.querySelectorAll('input[type="hidden"]').forEach(i => i.value = "");
        }

        function showView(viewId) {
            document.querySelectorAll('.view').forEach(v => {
                v.classList.remove('active');
                v.style.opacity = "0";
            });
            const target = document.getElementById(viewId);
            target.classList.add('active');
            setTimeout(() => target.style.opacity = "1", 50);
        }

        function togglePass(id, icon) {
            const field = document.getElementById(id);
            if (field.type === "password") {
                field.type = "text";
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                field.type = "password";
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        function showToast(message, isError = false) {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = `toast ${isError ? 'error' : ''}`;
            toast.innerHTML = `<i class="fa ${isError ? 'fa-circle-xmark' : 'fa-circle-check'}"></i> ${message}`;
            container.appendChild(toast);
            setTimeout(() => toast.classList.add('show'), 100);
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => toast.remove(), 500);
            }, 3000);
        }

        function initDropdown(containerId, hiddenInputId, callback) {
            const container = document.getElementById(containerId);
            const box = container.querySelector('.select-box');
            const hiddenInput = document.getElementById(hiddenInputId);
            box.onclick = (e) => {
                e.stopPropagation();
                container.classList.toggle('open');
            };
            container.querySelectorAll('.option').forEach(opt => {
                opt.onclick = () => {
                    box.innerHTML = opt.innerHTML;
                    hiddenInput.value = opt.dataset.value;
                    container.classList.add('selected');
                    container.classList.remove('open');
                    if (callback) callback();
                };
            });
        }

        function validateLogin() {
            const role = document.getElementById("loginRole").value;
            const email = document.getElementById("loginEmail").value;
            const pass = document.getElementById("loginPassword").value;
            document.getElementById("loginBtn").disabled = !(role && email.includes('@') && pass.length >= 8);
        }

        function validateReg() {
            const role = document.getElementById("regRole").value;
            const match = (document.getElementById("regPass").value === document.getElementById("regConfirm").value && document.getElementById("regPass").value.length >= 8);
            document.getElementById("regStatus").innerText = match ? "Passwords match" : "Mismatch/Too Short";
            document.getElementById("regStatus").style.color = match ? "#2ecc71" : "#e74c3c";
            document.getElementById("registerBtn").disabled = !(role && match && document.getElementById("regEmail").value.includes('@'));
        }

        function validateForgot() {
            const match = (document.getElementById("newPass").value === document.getElementById("confirmReset").value && document.getElementById("newPass").value.length >= 8);
            document.getElementById("forgotStatus").innerText = match ? "Valid entry" : "Mismatch/Too Short";
            document.getElementById("forgotStatus").style.color = match ? "#2ecc71" : "#e74c3c";
            document.getElementById("resetBtn").disabled = !(document.getElementById("forgotRole").value && match);
        }

        document.getElementById("loginForm").onsubmit = (e) => {
            e.preventDefault();

            const users = JSON.parse(localStorage.getItem("users") || "[]");

            const user = users.find(u =>
                u.email === document.getElementById("loginEmail").value.toLowerCase().trim() &&
                u.password === document.getElementById("loginPassword").value &&
                u.role === document.getElementById("loginRole").value
            );

            if (user) {

                // 🔥 CREATE PHP SESSION
                fetch("create_session.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify(user)
                    })
                    .then(() => {
                        showToast("Login Successful!");

                        // ✅ REDIRECT to REAL dashboard
                        window.location.href = "dashboard.php";
                    });

            } else {
                showToast("Invalid Credentials", true);
            }
        };

        document.getElementById("registerForm").onsubmit = (e) => {
            e.preventDefault();
            let users = JSON.parse(localStorage.getItem("users") || "[]");
            users.push({
                name: document.getElementById("regName").value,
                email: document.getElementById("regEmail").value.toLowerCase().trim(),
                password: document.getElementById("regPass").value,
                role: document.getElementById("regRole").value
            });
            localStorage.setItem("users", JSON.stringify(users));
            showToast("Successfully Registered!");
            showView('loginView');
        };

        document.getElementById("forgotForm").onsubmit = (e) => {
            e.preventDefault();
            let users = JSON.parse(localStorage.getItem("users") || "[]");
            const email = document.getElementById("forgotEmail").value.toLowerCase().trim();
            const role = document.getElementById("forgotRole").value;
            const newPassword = document.getElementById("newPass").value;

            const userIndex = users.findIndex(u => u.email === email && u.role === role);

            if (userIndex !== -1) {
                if (users[userIndex].password === newPassword) {
                    showToast("New password cannot be your old password!", true);
                    return;
                }
                users[userIndex].password = newPassword;
                localStorage.setItem("users", JSON.stringify(users));
                showToast("Password updated!");
                showView('loginView');
            } else showToast("Account not found.", true);
        };

        initDropdown('loginRoleSelect', 'loginRole', validateLogin);
        initDropdown('regRoleSelect', 'regRole', validateReg);
        initDropdown('forgotRoleSelect', 'forgotRole', validateForgot);

        window.onclick = () => document.querySelectorAll('.custom-select').forEach(s => s.classList.remove('open'));
    </script>
</body>

</html>