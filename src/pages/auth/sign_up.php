<?php
require_once 'db.php';

$errors = [];
$success = "";

$allowed_majors = ['physical therapy', 'Dentistry', 'Pharmacy'];
$allowed_levels = ['1', '2', '3', '4', '5'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username        = trim($_POST["username"] ?? "");
  $email           = trim($_POST["email"] ?? "");
  $password        = $_POST["password"] ?? "";
  $confirm         = $_POST["confirm_password"] ?? "";
  $major           = $_POST["major"] ?? "";
  $level           = $_POST["level"] ?? "";

  // --- Validate Username ---
  if (empty($username)) {
    $errors["username"] = "Username is required.";
  } elseif (strlen($username) < 3) {
    $errors["username"] = "Username must be at least 3 characters.";
  } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
    $errors["username"] = "Username can only contain letters, numbers, and underscores.";
  } else {
    // Check if username already taken
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->fetch()) {
      $errors["username"] = "Username is already taken.";
    }
  }

  // --- Validate Email ---
  if (empty($email)) {
    $errors["email"] = "Email is required.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Invalid email format.";
  } else {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
      $errors["email"] = "Email is already registered.";
    }
  }

  // --- Validate Password ---
  if (empty($password)) {
    $errors["password"] = "Password is required.";
  }

  // --- Validate Confirm Password ---
  if (empty($confirm)) {
    $errors["confirm"] = "Please confirm your password.";
  } elseif ($password !== $confirm) {
    $errors["confirm"] = "Passwords do not match.";
  }

  // --- Validate Major ---
  if (empty($major) || !in_array($major, $allowed_majors)) {
    $errors["major"] = "Please select a valid major.";
  }

  // --- Validate Level ---
  if (empty($level) || !in_array($level, $allowed_levels)) {
    $errors["level"] = "Please select a valid level.";
  }

  // --- Save to DB if no errors ---
  if (empty($errors)) {
    $hashed = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("
            INSERT INTO users (username, email, password, major, level)
            VALUES (?, ?, ?, ?, ?)
        ");
    $stmt->execute([$username, $email, $hashed, $major, $level]);

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
      <a href="/"><img class="back-image" src="../../assets/back.png" alt="" /></a>

      <div class="signup-card">
        <div class="signup-icon">
          <i class="fa-regular fa-user"></i>
        </div>

        <h2>Sign Up</h2>

        <form method="post" action="">

          <!-- Username -->
          <label><i class="fa-regular fa-user"></i>&nbsp;<b>Username:</b></label>
          <div class="input-box">
            <input type="text" name="username" placeholder="Username"
              value="<?= htmlspecialchars($username ?? '') ?>" />
          </div>
          <?php if (!empty($errors["username"])): ?>
            <span class="error"><?= $errors["username"] ?></span>
          <?php endif; ?>

          <!-- Email -->
          <label><i class="fa-solid fa-envelope"></i>&nbsp;<b>Email:</b></label>
          <div class="input-box">
            <input type="email" name="email" placeholder="Email"
              value="<?= htmlspecialchars($email ?? '') ?>" />
          </div>
          <?php if (!empty($errors["email"])): ?>
            <span class="error"><?= $errors["email"] ?></span>
          <?php endif; ?>

          <!-- Password -->
          <label><i class="fa-solid fa-lock"></i>&nbsp;<b>Password:</b></label>
          <div class="input-box">
            <input type="password" name="password" placeholder="Password" />
          </div>
          <?php if (!empty($errors["password"])): ?>
            <span class="error"><?= $errors["password"] ?></span>
          <?php endif; ?>

          <!-- Confirm Password -->
          <label><i class="fa-solid fa-lock"></i>&nbsp;<b>Confirm Password:</b></label>
          <div class="input-box">
            <input type="password" name="confirm_password" placeholder="Confirm Password" />
          </div>
          <?php if (!empty($errors["confirm"])): ?>
            <span class="error"><?= $errors["confirm"] ?></span>
          <?php endif; ?>

          <!-- Major & Level -->
          <div class="select-group">
            <div>
              <select name="major">
                <option value="">Major</option>
                <option value="physical therapy" <?= ($major ?? '') == 'physical therapy' ? 'selected' : '' ?>>Physical Therapy</option>
                <option value="Dentistry" <?= ($major ?? '') == 'Dentistry'        ? 'selected' : '' ?>>Dentistry</option>
                <option value="Pharmacy" <?= ($major ?? '') == 'Pharmacy'         ? 'selected' : '' ?>>Pharmacy</option>
              </select>
              <?php if (!empty($errors["major"])): ?>
                <span class="error"><?= $errors["major"] ?></span>
              <?php endif; ?>
            </div>

            <div>
              <select name="level">
                <option value="">Level</option>
                <?php foreach ($allowed_levels as $l): ?>
                  <option value="<?= $l ?>" <?= ($level ?? '') == $l ? 'selected' : '' ?>><?= $l ?></option>
                <?php endforeach; ?>
              </select>
              <?php if (!empty($errors["level"])): ?>
                <span class="error"><?= $errors["level"] ?></span>
              <?php endif; ?>
            </div>
          </div>

          <br>
          <button class="btn-signup" type="submit">Sign Up</button>

        </form>
      </div>
    </div>
  </div>
</body>

</html>