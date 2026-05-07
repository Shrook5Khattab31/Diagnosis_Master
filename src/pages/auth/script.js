//====forget password validation====//
function togglePass(id, icon) {
    let input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
}

function validateFormForgetPass() {
    var errors = [];

    var username = document.getElementById('username').value.trim();
    var password = document.getElementById('password').value;
    var confirm  = document.getElementById('confirmPassword').value;

    if (username === '')  errors.push('Username is required.');

    if (password === '')  errors.push('Password is required.');
    else if (password.length < 8) errors.push('Password must be at least 8 characters.');
    else if (!/[0-9]/.test(password))  errors.push('Password must contain a number.');
    else if (!/[A-Z]/.test(password))  errors.push('Password must contain an uppercase letter.');

    if (confirm === '')   errors.push('Please confirm your password.');
    else if (password !== confirm) errors.push('Passwords do not match.');

    var box = document.getElementById('error-box');
    if (errors.length > 0) {
        box.innerText = errors.join(' | ');
    } else {
        box.innerText = '';
        document.getElementById('forgetForm').submit();
    }
}

//====Sign-up validation====//
window.onload = function() {
    var now = new Date();
    var formatted =
    now.getFullYear() +
    "-" +
    String(now.getMonth() + 1).padStart(2, "0") +
    "-" +
    String(now.getDate()).padStart(2, "0") +
    " " +
    String(now.getHours()).padStart(2, "0") +
    ":" +
    String(now.getMinutes()).padStart(2, "0") +
    ":" +
    String(now.getSeconds()).padStart(2, "0");
    document.getElementById("created_at").value = formatted;
};

function validateForm() {
    var errors = [];

    var username = document.getElementById("username").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value;
    var confirm = document.getElementById("confirm_password").value;
    var major = document.getElementById("major").value;
    var level = document.getElementById("level").value;

    if (username === "") errors.push("Username is required.");
    else if (username.length < 3)
    errors.push("Username must be at least 3 characters.");
    else if (!/^[a-zA-Z0-9_]+$/.test(username))
    errors.push("Username: only letters, numbers, underscores.");

    if (email === "") errors.push("Email is required.");
    else if (!email.includes("@") || !email.includes("."))
    errors.push("Invalid email format.");

    if (password === "") errors.push("Password is required.");
    else if (password.length < 8)
    errors.push("Password must be at least 8 characters.");
    else if (!/[0-9]/.test(password))
    errors.push("Password must contain a number.");
    else if (!/[A-Z]/.test(password))
    errors.push("Password must contain an uppercase letter.");

    if (confirm === "") errors.push("Please confirm your password.");
    else if (password !== confirm) errors.push("Passwords do not match.");

    if (major === "") errors.push("Please select a major.");
    if (level === "") errors.push("Please select a level.");

    var box = document.getElementById("error-box");
    if (errors.length > 0) {
    box.innerText = errors.join(" ");
    } else {
    box.innerText = "";
    document.getElementById("signupForm").submit();
    }
}

//====login validation====//
function validateFormLogin() {
    var errors = [];

    var username = document.getElementById('username').value.trim();
    var password = document.getElementById('password').value;

    if (username === '')  errors.push('Username is required.');
    if (password === '')  errors.push('Password is required.');

    var box = document.getElementById('error-box');
    if (errors.length > 0) {
    box.innerText = errors.join('  |  ');
    } else {
    box.innerText = '';
    document.getElementById('loginForm').submit();
    }
}