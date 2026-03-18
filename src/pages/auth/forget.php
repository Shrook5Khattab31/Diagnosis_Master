<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Diagnosis Master</title>

    <link rel="stylesheet" href="style1.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>

  <body>
    <div class="container">
      <img src="../../assets/bg2.png" class="wave" />

      <div class="forget-box">
        <div class="top-icons">
          <a href="..\landing\Landing.php">
          <img class="back-image" src="..\..\assets\back.png" alt="" />
          </a>
        </div>

        <div class="icon">
          <img src="../../assets/Account.png" />
        </div>

        <h1>Forget Password</h1>

        <label> <i class="fa-solid fa-lock"></i> New Password </label>

        <div class="input-box">
          <input type="password" id="password" />
          <i
            class="fa-solid fa-eye-slash"
            onclick="togglePass('password', this)"
          ></i>
        </div>

        <label> <i class="fa-solid fa-lock"></i> Re-enter Password </label>

        <div class="input-box">
          <input type="password" id="confirmPassword" />
          <i
            class="fa-solid fa-eye-slash"
            onclick="togglePass('confirmPassword', this)"
          ></i>
        </div>

        <button onclick="updatePassword()">Update</button>

        <p id="message"></p>
      </div>
    </div>

    <script src="script.js"></script>

    <!-- صورة الرسالة -->
    <div id="successPopup" class="popup">
      <img src="../../assets/Pass Changed.png" class="popup-img" />
    </div>
  </body>
</html>
