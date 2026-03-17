<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Diagnosis Master</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index_style.css">
</head>
<body>

<div class="layout">

  <!-- LEFT: main board with fixed nav-->
  <div class="board-shell">
    <div class="board">
      <div class="frame-inner">

        <!-- MAIN PANEL -->
        <div class="main-panel">
            <!-- nav -->
            <div class="navbar">
                <img class="Web-Logo" src="..\assets\Logo.png" alt="Web Logo">
                <form action="">
                    <input class="searchBar" type="text" placeholder="Search here ...">
                </form>
                <button><img src="..\assets\Search Button.png" alt="Search"></button>
                <div class="score"></div>
                <button><img src="..\assets\Theme Button.png" alt="Theme"></button>
            </div>

            <div class="board-content"></div>
        </div> <!-- /main-panel -->

        <!-- RIGHT SIDEBAR-->
        <aside class="side-panel">
            <div class="profile-block"></div>
            <!--
            <nav class="side-menu">
                <a class="side-link active" href="#"><span class="icon">🏠</span>Dashboard</a>
                <a class="side-link" href="#"><span class="icon">📚</span>Courses</a>
                <a class="side-link" href="#"><span class="icon">📝</span>Quizzes</a>
                <a class="side-link" href="#"><span class="icon">⚙️</span>Settings</a>
            </nav>
            -->
        </aside>

      </div> <!-- /frame-inner -->
    </div>   <!-- /board -->
  </div>     <!-- /board-shell -->

</div>

</body>
</html>