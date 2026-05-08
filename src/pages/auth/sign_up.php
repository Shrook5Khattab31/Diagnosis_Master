<?php
$connection = new mysqli("localhost", "root", "", "diagnosis");

$error = "";

if (isset($_POST['username'])) {
  $username   = $_POST['username'];
  $email      = $_POST['email'];
  $password   = $_POST['password'];
  $major      = $_POST['major'];
  $level      = $_POST['level'];
  $created_at = $_POST['created_at'] ?? date("Y-m-d H:i:s");

  // Check username
  $check = $connection->prepare("SELECT id FROM users WHERE username = ?");
  $check->bind_param("s", $username);
  $check->execute();
  $result = $check->get_result();
  if ($result->fetch_assoc()) {
    $error = "Username already exists.";
  }

  // Check email
  if (!$error) {
    $check2 = $connection->prepare("SELECT id FROM users WHERE email = ?");
    $check2->bind_param("s", $email);
    $check2->execute();
    $result2 = $check2->get_result();
    if ($result2->fetch_assoc()) {
      $error = "Email already registered.";
    }
  }

  if (!$error) {
    $hashed = password_hash($password, PASSWORD_BCRYPT);
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
  <link rel="stylesheet" href="style_sign_up.css" />
  <link rel="stylesheet" href="styles/common.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <div class="container">
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

        <form method="post" action="sign_up.php" id="signupForm">
          <input type="hidden" id="created_at" name="created_at" />

          <!-- Username -->
          <label><i class="fa-regular fa-user"></i>&nbsp;<b>Username</b></label>
          <div class="input-box">
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Username"
              value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" />
          </div>

          <!-- Email -->
          <label><i class="fa-solid fa-envelope"></i>&nbsp;<b>Email</b></label>
          <div class="input-box">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Email"
              value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
          </div>

          <!-- Password -->
          <label><i class="fa-solid fa-lock"></i>&nbsp;<b>Password</b></label>
          <div class="input-box">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Password" />
          </div>

          <!-- Confirm Password -->
          <label><i class="fa-solid fa-lock"></i>&nbsp;<b>Confirm Password</b></label>
          <div class="input-box">
            <input
              type="password"
              id="confirm_password"
              name="confirm_password"
              placeholder="Confirm Password" />
          </div>

          <!-- Major & Level -->
          <div class="select-group">
            <div>
              <select id="major" name="major">
                <option value="">Major</option>
                <option value="physical therapy">Physical Therapy</option>
                <option value="Dentistry">Dentistry</option>
                <option value="Pharmacy">Pharmacy</option>
              </select>
            </div>
            <div>
              <select id="level" name="level">
                <option value="">Level</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Expert">Expert</option>
              </select>
            </div>
          </div>

          <!-- error + button wrapper -->
          <div class="error-wrapper">
            <div id="error-box"></div>
            <?php if ($error) { ?>
              <div class="php-error"><?= $error ?></div>
            <?php } ?>
            <button class="btn-signup" type="button" onclick="validateForm()">
              Sign Up
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>