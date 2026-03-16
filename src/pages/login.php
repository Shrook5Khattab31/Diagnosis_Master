<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Diagnosis Master Login</title>

    <link rel="stylesheet" href="common.css" />
    <link rel="stylesheet" href="style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>

  <body>
    <div class="container">
      <!-- LEFT SIDE (الصورة) -->
      <div class="left">
        <img class="logo" src="..\assets\Logo.png" alt="" />
      </div>

      <!-- RIGHT SIDE -->
      <div class="right">
        <a href="/">
          <img class="back-image" src="..\assets\back.png" alt="" />
        </a>

        <div class="login-box">
          <div class="user-icon">
            <i class="fa-regular fa-user"></i>
          </div>

          <h2>Log in</h2>

          <label
            ><i class="fa-regular fa-user"></i>&nbsp;<b>Username:</b></label
          >

          <div class="input-box">
            <input type="text" placeholder="Username" />
          </div>

          <label><i class="fa-solid fa-lock"></i>&nbsp;<b>Password:</b></label>

          <div class="input-box">
            <input type="password" placeholder="Password" />
          </div>

          <p class="forgot">Forgot password ?</p>

          <p class="create">
            Don't have an account ?
            <a href="register.html">Create new Account</a>
          </p>

          <button class="login-btn">Log in</button>

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
  </body>
</html>