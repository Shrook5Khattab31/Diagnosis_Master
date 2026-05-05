<?php
$connection = new mysqli("localhost", "root", "", "diagnosis");

$error = "";

if (isset($_POST['username'])) {
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $major      = $_POST['major'];
    $level      = $_POST['level'];
    $created_at = date("Y-m-d H:i:s");

    // Check if username or email already taken
    $check = $connection->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $check->bind_param("ss", $username, $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $error = "Username or email already exists.";
    } else {
        $hashed = password_hash($password, PASSWORD_BCRYPT);

        // id is AUTO_INCREMENT so we do NOT insert it
        $add = $connection->prepare("INSERT INTO users (username, email, password, major, level, created_at) VALUES (?, ?, ?, ?, ?, ?)");
        $add->bind_param("ssssss", $username, $email, $hashed, $major, $level, $created_at);
        $add->execute();

        header("Location: login.php?registered=1");
        exit;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Diagnosis Master Sign Up</title>
  <link rel="stylesheet" href="styles/common.css" />
  <link rel="stylesheet" href="style_sign_up.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <div class="page-container">

    <div class="left">
      <img class="logo" src="../../assets/Logo.png" alt="" />
    </div>

    <div class="right">
      <a href="login.php"><img class="back-image" src="../../assets/back.png" alt="" /></a>

      <div class="signup-card">
        <div class="signup-icon">
          <i class="fa-regular fa-user"></i>
        </div>

        <h2>Sign Up</h2>

        <?php if ($error): ?>
          <p style="color:red; text-align:center; margin-bottom:10px;"><?= $error ?></p>
        <?php endif; ?>

        <form method="post" action="" id="signupForm">

          <!-- Hidden field: device datetime sent from JS -->
          <input type="hidden" id="created_at" name="created_at" />

          <!-- Username -->
          <label><i class="fa-regular fa-user"></i>&nbsp;<b>Username:</b></label>
          <div class="input-box">
            <input type="text" id="username" name="username" placeholder="Username"
              value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" />
          </div>
          <span class="error" id="err-username"></span>

          <!-- Email -->
          <label><i class="fa-solid fa-envelope"></i>&nbsp;<b>Email:</b></label>
          <div class="input-box">
            <input type="email" id="email" name="email" placeholder="Email"
              value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
          </div>
          <span class="error" id="err-email"></span>

          <!-- Password -->
          <label><i class="fa-solid fa-lock"></i>&nbsp;<b>Password:</b></label>
          <div class="input-box">
            <input type="password" id="password" name="password" placeholder="Password" />
          </div>
          <span class="error" id="err-password"></span>

          <!-- Confirm Password -->
          <label><i class="fa-solid fa-lock"></i>&nbsp;<b>Confirm Password:</b></label>
          <div class="input-box">
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" />
          </div>
          <span class="error" id="err-confirm"></span>

          <!-- Major & Level -->
          <div class="select-group">
            <div>
              <select id="major" name="major">
                <option value="">Major</option>
                <option value="physical therapy">Physical Therapy</option>
                <option value="Dentistry">Dentistry</option>
                <option value="Pharmacy">Pharmacy</option>
              </select>
              <span class="error" id="err-major"></span>
            </div>
            <div>
              <select id="level" name="level">
                <option value="">Level</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Expert">Expert</option>
              </select>
              <span class="error" id="err-level"></span>
            </div>
          </div>

          <br>
          <button class="btn-signup" type="button" onclick="validateForm()">Sign Up</button>

        </form>
      </div>
    </div>
  </div>

  <script>
    // Set device datetime into hidden field on page load
    window.onload = function() {
      var now = new Date();
      // Format: YYYY-MM-DD HH:MM:SS
      var formatted = now.getFullYear() + '-' +
        String(now.getMonth() + 1).padStart(2, '0') + '-' +
        String(now.getDate()).padStart(2, '0') + ' ' +
        String(now.getHours()).padStart(2, '0') + ':' +
        String(now.getMinutes()).padStart(2, '0') + ':' +
        String(now.getSeconds()).padStart(2, '0');
      document.getElementById('created_at').value = formatted;
    };

    function validateForm() {
      // Clear old errors
      document.querySelectorAll('.error').forEach(function(el) {
        el.innerText = '';
      });

      var username = document.getElementById('username').value.trim();
      var email    = document.getElementById('email').value.trim();
      var password = document.getElementById('password').value;
      var confirm  = document.getElementById('confirm_password').value;
      var major    = document.getElementById('major').value;
      var level    = document.getElementById('level').value;

      var valid = true;

      // --- Username ---
      if (username === '') {
        document.getElementById('err-username').innerText = 'Username is required.';
        valid = false;
      } else if (username.length < 3) {
        document.getElementById('err-username').innerText = 'Username must be at least 3 characters.';
        valid = false;
      } else if (!/^[a-zA-Z0-9_]+$/.test(username)) {
        document.getElementById('err-username').innerText = 'Only letters, numbers, and underscores allowed.';
        valid = false;
      }

      // --- Email ---
      if (email === '') {
        document.getElementById('err-email').innerText = 'Email is required.';
        valid = false;
      } else if (!email.includes('@') || !email.includes('.')) {
        document.getElementById('err-email').innerText = 'Invalid email format.';
        valid = false;
      }

      // --- Password ---
      if (password === '') {
        document.getElementById('err-password').innerText = 'Password is required.';
        valid = false;
      } else if (password.length < 8) {
        document.getElementById('err-password').innerText = 'Password must be at least 8 characters.';
        valid = false;
      } else if (!/[0-9]/.test(password)) {
        document.getElementById('err-password').innerText = 'Password must contain at least one number.';
        valid = false;
      } else if (!/[A-Z]/.test(password)) {
        document.getElementById('err-password').innerText = 'Password must contain at least one uppercase letter.';
        valid = false;
      }

      // --- Confirm Password ---
      if (confirm === '') {
        document.getElementById('err-confirm').innerText = 'Please confirm your password.';
        valid = false;
      } else if (password !== confirm) {
        document.getElementById('err-confirm').innerText = 'Passwords do not match.';
        valid = false;
      }

      // --- Major ---
      if (major === '') {
        document.getElementById('err-major').innerText = 'Please select a major.';
        valid = false;
      }

      // --- Level ---
      if (level === '') {
        document.getElementById('err-level').innerText = 'Please select a level.';
        valid = false;
      }

      // Submit only if all valid
      if (valid) {
        document.getElementById('signupForm').submit();
      }
    }
  </script>

</body>
</html>