<?php
require_once 'db.php'; // include the connection

$errors = [];
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
    $errors["username"] = "Username is required.";
  }
  if (empty($_POST["password"])) {
    $errors["password"] = "Password is required.";
  }

  if (empty($errors)) {
    $inputUsername = trim($_POST["username"]);
    $inputPassword = $_POST["password"];

    // Query the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$inputUsername]);
    $user = $stmt->fetch();

    if ($user && password_verify($inputPassword, $user["password"])) {
      // Login success
      session_start();
      $_SESSION["user_id"] = $user["id"];
      $_SESSION["username"] = $user["username"];
      header("Location: dashboard.php");
      exit;
    } else {
      $errors["general"] = "Invalid username or password.";
    }
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Diagnosis Master Login</title>

  <link rel="stylesheet" href="common.css" />
  <link rel="stylesheet" href="style.css" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="left">

      <img class="logo" src="..\..\assets\Logo.png" alt="" />
    </div>

    <!-- RIGHT SIDE -->
    <div class="right">
      <a href="..\landing\Landing.php">
        <img class="back-image" src="..\..\assets\back.png" alt="" />
      </a>

      <div class="login-box">
        <div class="user-icon">
          <i class="fa-regular fa-user"></i>
        </div>

        <h2 style="font-size: 30px;">Log in</h2>

        <form id="loginForm" method="post" action="">
          <div class="field">
            <label><i style="font-size: 17px;" class="fa-regular fa-user"></i>&nbsp;Username:</label>
            <div class="input-box">
              <input type="text" id="username" name="username" placeholder="Username" />
            </div>
            <?php if (!empty($errors["username"])): ?>
              <span style="color:red"><?= $errors["username"] ?></span>
            <?php endif; ?>
          </div>

          <div class="field">
            <label><i style="font-size: 17px;" class="fa-solid fa-lock"></i>&nbsp;Password:</label>
            <div class="input-box">
              <input type="password" id="password" name="password" placeholder="Password" />
            </div>
            <?php if (!empty($errors["password"])): ?>
              <span style="color:red"><?= $errors["password"] ?></span>
            <?php endif; ?>
          </div>

          <p class="forgot"><a href="forget.php">Forgot password ?</a></p>

          <p class="create">
            Don't have an account ?
            <a style="text-decoration: underline;" href="sign_up.php">Create new Account</a>
          </p>

          <?php if (!empty($errors["general"])): ?>
            <p style="color:red; text-align:center;"><?= $errors["general"] ?></p>
          <?php endif; ?>

          <button class="login-btn" type="submit">Log in</button>
        </form>

        <div class="or">
          <hr />
          <span>OR</span>
          <hr />
        </div>

        <div class="social">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-apple"></i>
          <i class="fa-brands fa-google"></i>
          <i class="fa-brands fa-linkedin-in"></i>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>