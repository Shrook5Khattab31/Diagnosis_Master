<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "diagnosis");

if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}

$isLoggedIn = isset($_SESSION['user_id']);
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
$userId = $_SESSION['user_id'];

/* حفظ البيانات */
if(isset($_POST['name'])){

    $name = $_POST['name'];
    $major = $_POST['major'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

   $stmt = $conn->prepare("UPDATE users SET username=?, major=?, phone=?, email=? WHERE id=?");
$stmt->bind_param("ssssi", $name, $major, $phone, $email, $userId);
$stmt->execute();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

/* جلب البيانات */
$sql = "SELECT * FROM users WHERE id='$userId'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result) ?? [
    "username"=>"",
    "major"=>"",
    "phone"=>"",
    "email"=>"",
    "created_at"=>""
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Profile Screen</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="screen">

  <div class="left">

    <div class="title">Recent Achievements</div>

   <div class="achievements">

<?php if($isLoggedIn): ?>

  <!-- كارت المكافأة -->
  <div class="ach">
    <img src="Achievement1.svg">
    <p>Welcome Reward 🎉</p>
  </div>

<?php else: ?>

  <!-- قبل اللوجين -->
  <div class="ach locked">
    <img src="locked.svg">
    <p>Login to unlock rewards</p>
  </div>

<?php endif; ?>

</div>

    <div class="score">
      <span>Score</span>
      <span>1000 <img src="Star 1.svg">
</span>
    </div>

    <div class="title" style="margin-top:20px;">Progress</div>

    <div class="progress">
      <div class="card">Anatomy <div class="progress-wrap">

  <div class="bar">
    <div class="fill"></div>
  </div>

  <span class="percent">0%</span>

</div></div>
      <div class="card">Test and Measurement <div class="progress-wrap">

  <div class="bar">
    <div class="fill"></div>
  </div>

  <span class="percent">0%</span>

</div></div>
      <div class="card">Terapeutic Exercises <div class="progress-wrap">

  <div class="bar">
    <div class="fill"></div>
  </div>

  <span class="percent">0%</span>

</div></div>
    </div>

<button type="button" class="btn edit">Edit</button>

<form class="info" method="POST">

  <div class="title">Student Information</div>

  <div class="grid">

    <div class="field">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $user['username']; ?>">
    </div>

    <div class="field">
      <label>Major</label>
      <select name="major">
        <option value="Physical Therapy" <?php if($user['major']=="Physical Therapy") echo "selected"; ?>>Physical Therapy</option>
        <option value="Dentistry" <?php if($user['major']=="Dentistry") echo "selected"; ?>>Dentistry</option>
        <option value="Pharmacy" <?php if($user['major']=="Pharmacy") echo "selected"; ?>>Pharmacy</option>
      </select>
    </div>

    <div class="field">
      <label>Phone</label>
      <input type="text" name="phone" value="<?php echo $user['phone']; ?>">
    </div>

    <div class="field">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $user['email']; ?>">
    </div>

  </div>

  <div class="buttons">
    <button type="submit" class="btn save">Save Changes</button>
    <button type="button" class="btn cancel">Cancel</button>
  </div>

</form>
  </div>
     
  

  <div class="right">
    <div class="divider"></div>
    <div class="back"><img src="Vector.svg">

</div>

    <div class="avatar">
      <img id="profileImage" src="avatar7.jpeg">
  <div class="edit-icon">
    <img src="edit.svg">
</div>
</div>
    <div class="name"><?php echo $user['username']; ?> </div>
    <div class="small">
  major : <span class="major">
  <?php echo $user['major']; ?>
</span>
    </div>

    <div class="details">

  <div class="row">
    <span class="label">E-mail :</span>
    <span class="value">
  <?php echo $user['email']; ?>
</span>
  </div>

  <div class="row">
    <span class="label">Phone :</span>
   <span class="value">
  <?php echo $user['phone']; ?>
</span>
  </div>

  <div class="row">
    <span class="label">Joined since :</span>
    <span class="value">
  <?php echo $user['created_at']; ?>
</span>
  </div>

</div>
  </div>

</div>

<div class="popup" id="popup">

    <div class="popup-content">

        <span class="close-btn" id="closeBtn">&times;</span>


<div class="avatar-section">

    <!-- Main Avatar -->
    <div class="main-avatar">

        <img id="mainImage" src="avatar7.jpeg">

</div>

    </div>

    <!-- Hidden Input -->
    <input type="file" id="fileInput" accept="image/*" hidden>

    <!-- Cards -->
    <div class="avatars-box">

        <!-- Upload -->
        <div class="avatar-card upload-card" id="uploadBtn">
            <div class="upload-icon"><svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M30 24V30H24V34H30V40H34V34H40V30H34V24H30ZM20.6 36H4C1.8 36 0 34.2 0 32V4C0 1.8 1.8 0 4 0H32C34.2 0 36 1.8 36 4V20.6C34.8 20.2 33.4 20 32 20C29.8 20 27.6 20.6 25.8 21.8L23 18L16 27L11 21L4 30H20.2C20 30.6 20 31.4 20 32C20 33.4 20.2 34.8 20.6 36Z" fill="white"/>
</svg>
</div>

            <p>
              Add Image<br>
              from your<br>
              device
            </p>
        </div>

        <!-- Avatar 1 -->
        <div class="avatar-card selected">
            <img src="avatar7.jpeg">

            <span>Selected</span>
        </div>

        <!-- Avatar 2 -->
        <div class="avatar-card">
         <img src="avatar1.jpeg">

        </div>

        <!-- Avatar 3 -->
        <div class="avatar-card">
          <img src="avatar2.jpeg">

        </div>

        <!-- Avatar 4 -->
        <div class="avatar-card">
            <img src="avatar3.jpeg">

        </div>

        <!-- Avatar 5 -->
        <div class="avatar-card">
           <img src="avatar4.jpeg">

        </div>

        <!-- Avatar 6 -->
        <div class="avatar-card">
          <img src="avatar5.jpeg">

        </div>

        <!-- Avatar 7 -->
        <div class="avatar-card">
           <img src="avatar6.jpeg">

        </div>

    </div>

</div>

    </div>

</div>
<script src="script.js"></script>
</body>
</html>