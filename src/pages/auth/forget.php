<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Diagnosis Master</title>

  <link rel="stylesheet" href="style1.css" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">

  <!-- LEFT -->
  <div class="left">

        <img class="logo" src="..\..\assets\Logo.png" alt="" />
      </div>

  <!-- RIGHT -->
  <div class="right">

    <!-- back -->
    <a href="..\landing\Landing.php">
      <img class="back-image" src="..\..\assets\back.png" />
    </a>

    <div class="box">

      <!-- icon -->
      <div class="user-icon">
        <i class="fa-solid fa-lock"></i>
      </div>

      <h2>Forget Password</h2>

      <!-- password -->
      <label><i class="fa-solid fa-lock"></i> New Password</label>
      <div class="input-box">
        <input type="password" id="password">
        
      </div>

      <!-- confirm -->
      <label><i class="fa-solid fa-lock"></i> Re-enter Password</label>
      <div class="input-box">
        <input type="password" id="confirmPassword">
    
      </div>

      <button onclick="updatePassword()">Update</button>

      <p id="message"></p>

    </div>

  </div>

</div>

<script src="script.js"></script>
<div id="successPopup" class="overlay">
  <div class="popup-card">

    <div class="popup-circle">
      <i class="fa-solid fa-bell"></i>
    </div>

    <h2>Password Changed</h2>

    <p>
      Your Password has been changed successfully<br>
      Please login with the new Password
    </p>

    <button onclick="goToLogin()">Log in</button>

  </div>
</div>
</div>



</body>
</html>