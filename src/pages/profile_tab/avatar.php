<?php
$conn = mysqli_connect("localhost", "root", "", "diagnosis");

$user_id     = isset($_GET['user_id']) ? (int)$_GET['user_id'] : 0;
$is_new_user = isset($_GET['is_new']) && $_GET['is_new'] === '1';

$fetch = $conn->prepare("SELECT profile_pic, username FROM users WHERE id = ?");
$fetch->bind_param("i", $user_id);
$fetch->execute();
$u = $fetch->get_result()->fetch_assoc();

$avatar   = !empty($u['profile_pic']) ? '../../assets/' . $u['profile_pic'] : '../../assets/avatar7.jpeg';
$username = $u['username'] ?? '';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Avatar Picker</title>

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="avatar-section">
    <!-- Main Avatar -->
    <div class="main-avatar">
      <img id="mainImage" src="<?= $avatar ?>" />

      <div class="edit-icon">
        <svg
          width="30"
          height="30"
          viewBox="0 0 30 30"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M13.5 4.32843H4.16667C3.45942 4.32843 2.78115 4.60938 2.28105 5.10948C1.78095 5.60957 1.5 6.28785 1.5 6.99509V25.6618C1.5 26.369 1.78095 27.0473 2.28105 27.5474C2.78115 28.0475 3.45942 28.3284 4.16667 28.3284H22.8333C23.5406 28.3284 24.2189 28.0475 24.719 27.5474C25.219 27.0473 25.5 26.369 25.5 25.6618V16.3284M23.5 2.32843C24.0304 1.79799 24.7499 1.5 25.5 1.5C26.2501 1.5 26.9696 1.79799 27.5 2.32843C28.0304 2.85886 28.3284 3.57828 28.3284 4.32843C28.3284 5.07857 28.0304 5.79799 27.5 6.32843L14.8333 18.9951L9.5 20.3284L10.8333 14.9951L23.5 2.32843Z"
            stroke="#A15958"
            stroke-width="3"
            stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </div>
    </div>

    <!-- Hidden Input -->
    <input type="file" id="fileInput" accept="image/*" hidden />

    <!-- Cards -->
    <div class="avatars-box">
      <!-- Upload -->
      <div class="avatar-card upload-card" id="uploadBtn">
        <div class="upload-icon">
          <svg
            width="30"
            height="30"
            viewBox="0 0 40 40"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M30 24V30H24V34H30V40H34V34H40V30H34V24H30ZM20.6 36H4C1.8 36 0 34.2 0 32V4C0 1.8 1.8 0 4 0H32C34.2 0 36 1.8 36 4V20.6C34.8 20.2 33.4 20 32 20C29.8 20 27.6 20.6 25.8 21.8L23 18L16 27L11 21L4 30H20.2C20 30.6 20 31.4 20 32C20 33.4 20.2 34.8 20.6 36Z"
              fill="white" />
          </svg>
        </div>

        <p>
          Add Image<br />
          from your<br />
          device
        </p>
      </div>

      <!-- Avatar 1 -->
      <div class="avatar-card selected">
        <img src="../../assets/avatar7.jpeg" />

        <span>Selected</span>
      </div>

      <!-- Avatar 2 -->
      <div class="avatar-card">
        <img src="../../assets/avatar1.jpeg" />
      </div>

      <!-- Avatar 3 -->
      <div class="avatar-card">
        <img src="../../assets/avatar2.jpeg" />
      </div>

      <!-- Avatar 4 -->
      <div class="avatar-card">
        <img src="../../assets/avatar3.jpeg" />
      </div>

      <!-- Avatar 5 -->
      <div class="avatar-card">
        <img src="../../assets/avatar4.jpeg" />
      </div>

      <!-- Avatar 6 -->
      <div class="avatar-card">
        <img src="../../assets/avatar5.jpeg" />
      </div>

      <!-- Avatar 7 -->
      <div class="avatar-card">
        <img src="../../assets/avatar6.jpeg" />
      </div>
    </div>
  </div>

  <script src="avatar.js"></script>
</body>

</html>