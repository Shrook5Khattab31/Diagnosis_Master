<?php
$connection = new mysqli("localhost", "root", "", "diagnosis");

$error = "";
$success = "";

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username exists
    $check = $connection->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $result = $check->get_result();

    if (!$result->fetch_assoc()) {
        $error = "Username not found.";
    } else {
        $hashed = password_hash($password, PASSWORD_BCRYPT);
        $update = $connection->prepare("UPDATE users SET password = ? WHERE username = ?");
        $update->bind_param("ss", $hashed, $username);
        $update->execute();
        $success = "true";
    }
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diagnosis Master</title>
  <link rel="stylesheet" href="style1.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
  <div class="container">

    <div class="left">
      <img class="logo" src="..\..\assets\Logo.png" alt="" />
    </div>

    <div class="right">
      <a href="..\landing\Landing.php">
        <img class="back-image" src="..\..\assets\back.png" />
      </a>

      <div class="box">

        <div class="user-icon">
          <i class="fa-solid fa-lock"></i>
        </div>

        <h2>Forget Password</h2>

        <form id="forgetForm" method="post" action="">

          <!-- Username -->
          <label><i class="fa-regular fa-user"></i> Username</label>
          <div class="input-box">
            <input type="text" id="username" name="username" placeholder="Enter your username"
              value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" />
          </div>

          <!-- New Password -->
          <label><i class="fa-solid fa-lock"></i> New Password</label>
          <div class="input-box">
            <input type="password" id="password" name="password" placeholder="New Password" />
            <i class="fa-solid fa-eye-slash" onclick="togglePass('password', this)"></i>
          </div>

          <!-- Confirm Password -->
          <label><i class="fa-solid fa-lock"></i> Re-enter Password</label>
          <div class="input-box">
            <input type="password" id="confirmPassword" placeholder="Confirm Password" />
            <i class="fa-solid fa-eye-slash" onclick="togglePass('confirmPassword', this)"></i>
          </div>

          <!-- Single error line -->
          <div class="error-wrapper">
            <div id="error-box"></div>
            <?php if ($error) { ?>
              <div class="php-error"><?= $error ?></div>
            <?php } ?>
            <button type="button" onclick="validateFormForgetPass()">Update</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- Success Popup -->
  <div id="successPopup" class="overlay" <?= $success ? 'style="display:flex;"' : '' ?>>
    <div class="popup-card">
      <div class="popup-circle">
        <i class="fa-solid fa-bell"></i>
      </div>
      <h2>Password Changed</h2>
      <p>Your password has been changed successfully.<br>Please login with the new password.</p>
      <button onclick="window.location.href='login.php'">Log in</button>
    </div>
  </div>

  <script src="script.js"></script>

</body>
</html>