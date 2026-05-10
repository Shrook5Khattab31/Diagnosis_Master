<!doctype html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diagnosis Master Dashboard</title>
    <link rel="stylesheet" href="cours.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
    <div class="dashboard">
        <div class="card1">
            <nav class="navbar_dash">
                <img class="nav-logo" src="../../assets/LogoLa.png" />

                <input type="text" placeholder="Search here..." class="search-bar" />

                <img
                    src="../../assets/search button.png"
                    alt="Search"
                    class="search-button" />

                <div class="score">
                    <h2>Score : 20 </h2><img src="../../assets/Star.svg">
                </div>

                <button class="theme_btn">
                    <img src="../../assets/Theme Button.png" />
                </button>
            </nav>

            <div class="tabs">
                <span id="allTab" class="active">
                    All (<span id="allCount">5</span>)
                </span>

                <span id="completedTab">
                    Completed (<span id="completedCount">0</span>)
                </span>
            </div>
            <p id="emptyMessage" style="display:none; text-align:center; margin-top:20px; font-weight:bold;">
                No completed courses yet
            </p>

            <div class="courses-grid">
                <div class="card anatomy-card">
                    <div class="card-image bg-anatomy">

                        <h3>Anatomy</h3>
                    </div>
                    <div class="card-content">
                        <div class="stats">
                            <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                            <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                        </div>
                        <strong>Description:</strong>

                        <div class="desc-wrapper">
                            <div class="short-text">
                                Anatomy focuses on understanding the structure of the human body.
                            </div>

                            <div class="more-text">
                                It covers bones, muscles, organs, and body systems. This course helps you understand how the body is built and how each part works together.
                            </div>

                            <a href="#" class="see-more" onclick="toggleDesc(event, this)">see more</a>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress" style="width: 0%;"></div>
                            </div>
                            <span class="percentage">0%</span>
                        </div>
                    </div>
                </div>

                <div class="card test-card locked-card">
                    <div class="lock-message">
                        Complete previous course first
                    </div>
                    <div class="card-image bg-test">
                        <h3>Test and Measurements</h3>
                    </div>
                    <div class="card-content">
                        <div class="stats">
                            <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                            <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                        </div>
                        <strong>Description:</strong>

                        <div class="desc-wrapper">
                            <div class="short-text">
                                This course explains how to assess and measure human performance and health.
                            </div>

                            <div class="more-text">
                                It includes physical tests, clinical measurements, and evaluation techniques used in physiotherapy to track patient progress accurately.
                            </div>

                            <a href="#" class="see-more" onclick="toggleDesc(event, this)">see more</a>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress" style="width: 0%;"></div>
                            </div>
                            <span class="percentage">0%</span>
                        </div>
                    </div>
                </div>

                <div class="card therapeutic-card locked-card">
                    <div class="lock-message"> Complete previous course first </div>
                    <div class="card-image bg-therapeutic">
                        <h3>Therapeutic Exercises</h3>
                    </div>
                    <div class="card-content">
                        <div class="stats">
                            <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                            <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                        </div>
                        <strong>Description:</strong>

                        <div class="desc-wrapper">
                            <div class="short-text">
                                Therapeutic exercises are designed to improve strength, flexibility, and mobility.
                            </div>

                            <div class="more-text">
                                They are used in rehabilitation programs to help patients recover from injuries and improve physical function safely and effectively.
                            </div>

                            <a href="#" class="see-more" onclick="toggleDesc(event, this)">see more</a>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress" style="width: 0%;"></div>
                            </div>
                            <span class="percentage">0%</span>
                        </div>
                    </div>
                </div>

                <div class="card hydro-card locked-card">
                    <div class="lock-message">
                        Complete previous course first
                    </div>
                    <div class="card-image bg-hydro">
                        <h3>Hydro Therapy</h3>
                    </div>
                    <div class="card-content">
                        <div class="stats">
                            <span><i class="fa-solid fa-square-poll-vertical"></i> 3 Quizzes</span>
                            <span><i class="fa-solid fa-book-bookmark"></i> 32 Cases</span>
                        </div>
                        <strong>Description:</strong>

                        <div class="desc-wrapper">
                            <div class="short-text">
                                Hydrotherapy uses water-based treatments for healing and rehabilitation.
                            </div>

                            <div class="more-text">
                                It helps reduce pain, improve circulation, and relax muscles using warm or cold water techniques under controlled conditions.
                            </div>

                            <a href="#" class="see-more" onclick="toggleDesc(event, this)">see more</a>
                        </div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress complete" style="width: 0%;"></div>
                            </div>
                            <span class="percentage">0%</span>
                        </div>
                    </div>
                </div>

                <div class="card manual-card locked">
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
                            <div class="progress-bar">
                                <div class="progress" style="width: 0%;"></div>
                            </div>
                            <span class="percentage">0%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="profile">
                <button onclick="location.href='../profile_tab/profile.html'">
                    <img src="../../assets/profile.png" alt="Profile">
                    <p><b>Profile Name</b></p>
                </button>
            </div>

            <div class="Menu">
                <p class="MM">MAIN MENU</p>
                <div class="menu-items">
                    <p class="course"
                        onclick="location.href = '../dashboard/dashboard.php'"><img src="../../assets/dashboard icon.png" alt="icon"> Dashboard</p>
                    <p><img src="../../assets/courses icon.png" alt="icon"> Courses</p>
                    <p><img src="../../assets/quizes icon.png" alt="icon"> Quizes</p>
                    <p><img src="../../assets/setting icon.png" alt="icon"> Settings</p>
                </div>

                <p class="RA">RECENT ACHIEVEMENTS</p>
                <div class="img-achievements">
                    <img src="../../assets/Achievement.png" alt="Achievement 2">
                    <img src="../../assets/Achievement (1).png" alt="Achievement 1">
                </div>
                <p class="discover"> DISCOVER MODE</p>
                <p class="full-body"><img src="../../assets/full-body-icon.png" alt="icon">Full Body
                    <img src="../../assets/arrow_drop_down.png" alt="icon">
                </p>
                <p class="Account">ACCOUNT </p>
                <button class="Log-Out" onclick="location.href = '../landing/landing.php'">
                    <p class="Log-Out"><img src="../../assets/Log Out.png" alt="icon">Log Out</p>
                </button>
            </div>
        </div>
    </div>

    <div id="codeModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>

            <iframe
                src="../chapter_select/chapter.select.html"
                class="frame">
            </iframe>

        </div>
    </div>


    <script src="cours.js"></script>
</body>

</html>