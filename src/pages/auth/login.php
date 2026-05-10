<?php
$connection = new mysqli("localhost", "root", "", "diagnosis");

$error = "";

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $is_new = isset($_GET['registered']) ? 1 : 0;
        header("Location: ../dashboard/dashboard.php?is_new=" . $is_new);
        exit;
    } else {
        $error = "Invalid username or password.";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="left">
      <img class="logo" src="..\..\assets\Logo.png" alt="" />
    </div>

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
            <label><i style="font-size:17px;" class="fa-regular fa-user"></i>&nbsp;Username:</label>
            <div class="input-box">
              <input type="text" id="username" name="username" placeholder="Username" />
            </div>
          </div>

          <div class="field">
            <label><i style="font-size:17px;" class="fa-solid fa-lock"></i>&nbsp;Password:</label>
            <div class="input-box">
              <input type="password" id="password" name="password" placeholder="Password" />
              <i class="fa fa-eye-slash" onclick="togglePass('password', this)"></i>
            </div>
          </div>

          <p class="forgot"><a href="forget.php">Forgot password ?</a></p>

          <p class="create">
            Don't have an account ?
            <a style="text-decoration:underline;" href="sign_up.php">Create new Account</a>
          </p>

          <div class="error-wrapper">
            <div id="error-box"></div>
            <?php if ($error) { ?>
              <div class="php-error"><?= $error ?></div>
            <?php } ?>
          </div>

          <button class="login-btn" type="button" onclick="validateFormLogin()">Log in</button>
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