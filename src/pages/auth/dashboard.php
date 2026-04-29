<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_dashboard.css">
    <title>Document</title>
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="card">
        <nav class="navbar_dash">
            <img class="nav-logo" src="../../assets/LogoLa.png" class="logo" />
            <input type="text" placeholder="Search here..." class="search-bar">
            <img src="..\..\assets\search button.png" alt="Search" class="search-button">
           <div class="score">
            <h2> Score : 1000 ✦</h2>
           </div>
         <button class="theme_btn" >
            <img src="../../assets/Theme Button.png" />
        </button>
            </nav>

          <div class="main-dashboard"> 
        <div class="container">
    <div class="todo-app">
        <h1>To Do List</h1>
    </div>
    
    <div class="row">
        <input type="text" id="input-box" class="input" placeholder="Add a new task...">
        <button class="add-btn" onclick="addTask()"><i class="fas fa-plus"></i></button>
    </div>

    <ul id="task-list">
        <li>
            <div class="task-content">
                <span class="text">Finish Quiz 1</span>
                <span class="date">[23/3/2026] <small class="auto">Auto</small></span>
                
            </div>
            <i class="fa-solid fa-trash-can delete-icon"></i>
        </li>
         <li>
            <div class="task-content">
                <span class="text">Finish Quiz 1</span>
                <span class="date">[23/3/2026] <small class="auto">Auto</small></span>
                
            </div>
            <i class="fa-solid fa-trash-can delete-icon"></i>
        </li>
         <li>
            <div class="task-content">
                <span class="text">Finish Quiz 1</span>
                <span class="date">[23/3/2026] <small class="auto">Auto</small></span>
                
            </div>
            <i class="fa-solid fa-trash-can delete-icon"></i>
        </li>

    </ul>

    <div class="footer-action">
        <i class="fa-solid fa-chevron-down"></i>
    </div>
</div>

    <div class="container2">
     <div class="calendar-card">
        <h1>Calendar</h1>
        </div>

        <div class="calendar-container">
            <div class="calendar-header">
                <button class="nav-btn"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="date-selectors">
                    <div class="selector">April <i class="fa-solid fa-caret-down"></i></div>
                    <div class="selector">2021 <i class="fa-solid fa-caret-down"></i></div>
                </div>
                <button class="nav-btn"><i class="fa-solid fa-chevron-right"></i></button>
            </div>

            <div class="weekdays">
                <span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span><span>Su</span>
            </div>

            <div class="days-grid">
                <span class="prev-month">29</span>
                <span class="prev-month">30</span>
                <span class="prev-month">31</span>
                <span>1</span><span>2</span><span>3</span><span>4</span>
                <span>5</span><span>6</span><span class="active">7</span><span>8</span><span>9</span><span>10</span><span>11</span>
                <span>12</span><span>13</span><span>14</span><span>15</span><span>0</span><span>17</span><span>18</span>
                <span>19</span><span>20</span><span>21</span><span>22</span><span>23</span><span>24</span><span>25</span>
                <span>26</span><span>27</span><span>28</span><span>29</span><span>30</span>
                <span class="next-month">1</span>
                <span class="next-month">2</span>
            </div>
        </div>
    </div>
    </div>

   
<div class="saved-cards-container"> 
    <h1 class="section-title">Saved Cards</h1> 
    <div class="carousel-layout"> 
        <div class="cards-list"> 
            <div class="paper-wrapper">
                 <img src="Diagnosis_Master/src/assets/paper.png" alt="paper background" class="paper-bg"> <div class="card-content"> 
                    <i class="fa-solid fa-bookmark bookmark-icon"></i>
                     <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
                     </div> 
                    </div>
                     <div class="paper-wrapper">
                         <img src="Diagnosis_Master/src/assets/paper.png" alt="paper background" class="paper-bg">
                          <div class="card-content"> 
                            <i class="fa-solid fa-bookmark bookmark-icon"></i>
                             <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
                             </div> 
                            </div>
                             <div class="paper-wrapper">
                                 <img src="Diagnosis_Master/src/assets/paper.png" alt="paper background" class="paper-bg">
                                  <div class="card-content"> 
                                    <i class="fa-solid fa-bookmark bookmark-icon">

                                    </i> 
                                    <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="carousel-arrow"> 
                            <i class="fa-solid fa-chevron-right"></i>
                         </div> 
                        </div> 
                    </div>
 
</div>
    </div>

   

</body>
</html>