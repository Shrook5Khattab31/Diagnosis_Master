<?php

$connection = new mysqli("localhost", "root", "", "diagnosis");

$user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : 0;
$is_new  = isset($_GET['is_new'])  && $_GET['is_new'] == 1;

// ── Handle Save (POST) ──
if (isset($_POST['name'])) {

    $name  = $_POST['name'];
    $major = $_POST['major'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $stmt = $connection->prepare("
        UPDATE users
        SET    name  = ?,
               major = ?,
               phone = ?,
               email = ?
        WHERE  id    = ?
    ");
    $stmt->bind_param("ssssi", $name, $major, $phone, $email, $user_id);
    $stmt->execute();
    $stmt->close();

    // Redirect to avoid re-submit on refresh
    header("Location: profile.php?user_id=" . $user_id . "&is_new=" . ($is_new ? 1 : 0));
    exit;
}

// ── Fetch user data ─
$stmt = $connection->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

// Safe output helper
function e($val) {
    return htmlspecialchars($val ?? '', ENT_QUOTES);
}

$profile_pic = !empty($user['profile_pic'])
    ? "uploads/" . e($user['profile_pic'])
    : "avatar7.jpeg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile — Diagnosis Master</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="screen">

  <!-- ══════════════════════════════
       LEFT — Stats + Edit form
  ══════════════════════════════ -->
  <div class="left">

    <!-- Achievements: hidden for new users -->
    <div class="title">Recent Achievements</div>
    <div class="achievements">
      <?php if (!$is_new): ?>
        <div class="ach">
          <img src="../../assets/Achievement1.svg" alt="Achievement">
        </div>
      <?php else: ?>
        <div class="ach locked">
          <img src="../../assets/locked.svg" alt="Locked">
          <p>Welcome Badge</p>
        </div>
      <?php endif; ?>
    </div>

    <!-- Score -->
    <div class="score">
      <span>Score</span>
      <span>1000 <img src="../../assets/Star 1.svg" alt="★"></span>
    </div>

    <!-- Progress cards -->
    <div class="title" style="margin-top:20px;">Progress</div>
    <div class="progress">
      <div class="card">
        Anatomy
        <div class="progress-wrap">
          <div class="bar"><div class="fill" data-pct="0"></div></div>
          <span class="percent">0%</span>
        </div>
      </div>
      <div class="card">
        Test &amp; Measurement
        <div class="progress-wrap">
          <div class="bar"><div class="fill" data-pct="0"></div></div>
          <span class="percent">0%</span>
        </div>
      </div>
      <div class="card">
        Therapeutic Exercises
        <div class="progress-wrap">
          <div class="bar"><div class="fill" data-pct="0"></div></div>
          <span class="percent">0%</span>
        </div>
      </div>
    </div>

    <!-- Edit button -->
    <button type="button" class="btn edit" id="editBtn">Edit</button>

    <!-- Edit form — hidden by default, shown on Edit click -->
    <form class="info" id="editForm" method="POST">

      <div class="title">Student Information</div>

      <div class="grid">

        <div class="field">
          <label>Name</label>
          <input type="text" name="name"
                 value="<?= e($user['name'] ?? $user['username']) ?>">
        </div>

        <div class="field">
          <label>Major</label>
          <select name="major">
            <option value="Physical Therapy"
              <?= ($user['major'] === 'Physical Therapy') ? 'selected' : '' ?>>
              Physical Therapy
            </option>
            <option value="Dentistry"
              <?= ($user['major'] === 'Dentistry') ? 'selected' : '' ?>>
              Dentistry
            </option>
            <option value="Pharmacy"
              <?= ($user['major'] === 'Pharmacy') ? 'selected' : '' ?>>
              Pharmacy
            </option>
          </select>
        </div>

        <div class="field">
          <label>Phone</label>
          <input type="text" name="phone" value="<?= e($user['phone']) ?>">
        </div>

        <div class="field">
          <label>Email</label>
          <input type="email" name="email" value="<?= e($user['email']) ?>">
        </div>

      </div>

      <div class="buttons">
        <button type="submit" class="btn save">Save Changes</button>
        <button type="button" class="btn cancel" id="cancelBtn">Cancel</button>
      </div>

    </form>

  </div><!-- end .left -->


  <!-- RIGHT — Avatar + details -->
  <div class="right">

    <div class="divider"></div>

    <!-- Back to dashboard — keeps user_id and is_new in URL -->
    <div class="back">
      <a href="../dashboard/dashboard copy.php?is_new=<?= $is_new ? 1 : 0 ?>">
        <img src="../../assets/Vector.svg" alt="Back">
      </a>
    </div>

    <!-- Avatar with edit icon -->
    <div class="avatar">
      <img id="profileImage" src="<?= $profile_pic ?? "../../assets/avatar1.jpeg" ?>">
      <div class="edit-icon" id="openPopup">
        <img src="../../assets/edit.svg" alt="Change avatar">
      </div>
    </div>

    <!-- Name -->
    <div class="name"><?= e($user['name'] ?? $user['username']) ?></div>

    <!-- Major -->
    <div class="small">
      major : <span class="major"><?= e($user['major']) ?></span>
    </div>

    <!-- Info rows — all pulled from DB -->
    <div class="details">
      <div class="row">
        <span class="label">E-mail :</span>
        <span class="value"><?= e($user['email']) ?></span>
      </div>
      <div class="row">
        <span class="label">Phone :</span>
        <span class="value"><?= e($user['phone']) ?></span>
      </div>
      <div class="row">
        <span class="label">Level :</span>
        <span class="value"><?= e($user['level']) ?></span>
      </div>
      <div class="row">
        <span class="label">Joined :</span>
        <span class="value">
          <?= e(date('M Y', strtotime($user['created_at']))) ?>
        </span>
      </div>
    </div>

  </div><!-- end .right -->

</div><!-- end .screen -->


<!-- ══════════════════════════════
     AVATAR PICKER POPUP
══════════════════════════════ -->
<div class="popup" id="popup">
  <div class="popup-content">

    <span class="close-btn" id="closeBtn">&times;</span>

    <div class="avatar-section">
      <div class="main-avatar">
        <img id="mainImage" src="<?= $profile_pic ?>" alt="Selected">
      </div>
    </div>

    <input type="file" id="fileInput" accept="image/*" hidden>

    <div class="avatars-box">

      <!-- Upload from device -->
      <div class="avatar-card upload-card" id="uploadBtn">
        <div class="upload-icon">
          <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
               xmlns="http://www.w3.org/2000/svg">
            <path d="M30 24V30H24V34H30V40H34V34H40V30H34V24H30ZM20.6 36H4C1.8
                     36 0 34.2 0 32V4C0 1.8 1.8 0 4 0H32C34.2 0 36 1.8 36
                     4V20.6C34.8 20.2 33.4 20 32 20C29.8 20 27.6 20.6 25.8
                     21.8L23 18L16 27L11 21L4 30H20.2C20 30.6 20 31.4 20 32C20
                     33.4 20.2 34.8 20.6 36Z" fill="white"/>
          </svg>
        </div>
        <p>Add Image<br>from your<br>device</p>
      </div>

      <!-- Preset avatars -->
      <?php
      $avatars = [
          '../../assets/avatar7.jpeg', '../../assets/avatar1.jpeg', '../../assets/avatar2.jpeg',
          '../../assets/avatar3.jpeg', '../../assets/avatar4.jpeg', '../../assets/avatar5.jpeg', '../../assets/avatar6.jpeg'
      ];
      foreach ($avatars as $i => $av):
          $is_selected = ($user['profile_pic'] === $av)
                      || ($i === 0 && empty($user['profile_pic']));
      ?>
        <div class="avatar-card <?= $is_selected ? 'selected' : '' ?>"
             data-src="<?= e($av) ?>">
          <img src="<?= e($av) ?>" alt="Avatar">
          <?php if ($is_selected): ?><span>Selected</span><?php endif; ?>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>


<script src="script.js">

</script>

</body>
</html>