<!doctype html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diagnosis Master Dashboard</title>
    <link rel="stylesheet" href="cours.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>

  <body>
    <div class="card1">
      <nav class="navbar_dash">
        <img class="nav-logo" src="../../assets/LogoLa.png" />

        <input type="text" placeholder="Search here..." class="search-bar" />

        <img
          src="../../assets/search button.png"
          alt="Search"
          class="search-button"
        />

        <div class="score">
          <h2>Score : 1000 ✦</h2>
        </div>

        <button class="theme_btn">
          <img src="../../assets/Theme Button.png" />
        </button>
      </nav>

     <div class="tabs">
        <span class="active">All(5)</span>
        <span>Completed(1)</span>
    </div>

    <div class="courses-grid">
        <div class="card">
            <div class="card-image bg-anatomy">
                <h3>Anatomy</h3>
            </div>
            <div class="card-content">
                <div class="stats">
                    <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                    <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                </div>
                <p class="description"><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit... <a href="#">see more</a></p>
                <div class="progress-container">
                    <div class="progress-bar"><div class="progress" style="width: 0%;"></div></div>
                    <span class="percentage">0%</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-image bg-test">
                <h3>Test and Measurements</h3>
            </div>
            <div class="card-content">
                <div class="stats">
                    <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                    <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                </div>
                <p class="description"><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit... <a href="#">see more</a></p>
                <div class="progress-container">
                    <div class="progress-bar"><div class="progress" style="width: 0%;"></div></div>
                    <span class="percentage">0%</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-image bg-therapeutic">
                <h3>Therapeutic Exercises</h3>
            </div>
            <div class="card-content">
                <div class="stats">
                    <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                    <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                </div>
                <p class="description"><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit... <a href="#">see more</a></p>
                <div class="progress-container">
                    <div class="progress-bar"><div class="progress" style="width: 0%;"></div></div>
                    <span class="percentage">0%</span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-image bg-hydro">
                <h3>Hydro Therapy</h3>
            </div>
            <div class="card-content">
                <div class="stats">
                    <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                    <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                </div>
                <p class="description"><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit... <a href="#">see more</a></p>
                <div class="progress-container">
                    <div class="progress-bar"><div class="progress complete" style="width: 100%;"></div></div>
                    <span class="percentage">100%</span>
                </div>
            </div>
        </div>

        <div class="card locked">
            <div class="lock-overlay">
                <i class="fa-solid fa-lock"></i>
                <p>Need to reach 20000 score to unlock this Course</p>
            </div>
            <div class="card-image bg-manual">
                <h3>Manual Therapy</h3>
            </div>
            <div class="card-content">
                <div class="stats">
                    <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                    <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                </div>
                <p class="description"><strong>Description:</strong> Lorem ipsum dolor sit amet... <a href="#">see more</a></p>
                <div class="progress-container">
                    <div class="progress-bar"><div class="progress" style="width: 0%;"></div></div>
                    <span class="percentage">0%</span>
                </div>
            </div>
        </div>
    </div>

    
    </div>
  </body>
</html>
