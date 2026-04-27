<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style2.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar">
      <img class="nav-logo" src="../../assets/LogoLa.png" class="logo" />
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact us</a></li>
      </ul>

      <div class="nav-btns">
        <a class="btn1" href="../auth/sign_up.php">Sign up</a>
        <a class="btn2" href="../auth/login.php">Login</a>
      </div>
    </nav>
    <div class="bg">
      <!-- HERO -->
      <section class="hero">
        <div class="details">
          <h1>
            Diagnosis Master:<br />Bridge the gap between<br />Lectures &amp;
            Clinics
          </h1>
          <p>
            A complete learning ecosystem for medical students.<br> Interactive
            visualization meet evidence-based case <br>studies to turn theory into
            practice.
          </p>
          <button class="btn-show-more">Show More</button>
        </div>
        <div class="preview">
          <img src="../../assets/Anatomy.png" class="image" />
        </div>
      </section>

      <!-- ABOUT -->
      <section class="about" id="about">
        <div class="about-image">
          <img src="../../assets/Illustration.png" />
        </div>
        <div class="about-text">
          <h2>About Us</h2>
          <p>
            Diagnosis Master is a comprehensive medical learning platform
            designed to bridge the gap between theoretical knowledge and
            clinical practice. We combine interactive anatomical visualizations,
            evidence-based case studies, and adaptive quizzes to create a
            complete learning ecosystem for medical students at every stage of
            their education.
            Our mission is to empower the next generation of healthcare
            professionals with tools that make complex diagnostic reasoning
            intuitive, engaging, and effective.
          </p>
        </div>
      </section>
      <!-- features -->
      <section class="features">
        <h1 >Features</h1>

        <div class="feat-grid">
          <div class="feat-card has-content">
            
             
              <h2>🔎Powerful Search</h2>
          
            <p>
              Quickly search for diseases, symptoms, and diagnoses in a
              well-organized medical database.
            </p>
          </div>

          <div class="feat-card has-content">
           
             
              <h2>🧠Interactive Quizzes</h2>
           
            <p>
              Test your medical knowledge with quizzes and review important
              concepts easily.
            </p>
          </div>

          <div class="feat-card has-content">
           
             
             <h2> 📚Organized Medical Database</h2>
           
            <p>
              Access reliable medical information presented in a structured and
              easy-to-understand way.
            </p>
          </div>
          <div class="feat-card has-content">
             <h2> 📚Symptom Checker </h2>
            <p>
              Enter symptoms and receive possible disease suggestions to help
              practice diagnostic thinking.
            </p>
          </div>

          <div class="feat-card has-content">
         
             
            <h2> 📋 Medical Case Studies</h2>
           
            <p>
              Analyze real-like medical cases and try to determine the correct
              diagnosis to improve clinical reasoning.
            </p>
          </div>

          <div class="feat-card has-content">
         
              
              <h2>💻User-Friendly Interface</h2>
          
            <p>
              Simple and clean design that helps students from Pharmacy,
              Dentistry, and Physical Therapy navigate easily.
            </p>
          </div>
        </div>
      </section>
    </div>
    <!-- CONTACT -->
    <section class="contact" id="contact">
      <div class="contact-form">
        <h2>Contact Us</h2>
        <p class="sub">
          If you have any questions, suggestions, or need help using Diagnosis
          Master, feel free to contact us. Our team is here to help you.
        </p>

        <div class="form-field">
          <input type="text" placeholder="Name" />
        </div>
        <div class="form-field">
          <input type="email" placeholder="Email" />
        </div>
        <div class="form-field">
          <textarea rows="3" placeholder="Message"></textarea>
        </div>

        <button class="btn-send">Send</button>
      </div>

      <div class="info-panel">
        <h7>Info</h7>
        <div class="info-row">
          <div class="info-icon">
            <img src="../../assets/mark_email_unread.png" />
          </div>
          <div class="info-text">support@diagnosismaster.com</div>
        </div>
        <div class="info-row">
          <div class="info-icon"><img src="../../assets/Phone.png" /></div>
          <div class="info-text">+20100 000 0000</div>
        </div>
        <div class="info-row">
          <div class="info-icon">
            <img src="../../assets/location_on.png" />
          </div>
          <div class="info-text">Cairo, Egypt</div>
        </div>
        <div class="info-row">
          <div class="info-icon"><img src="../../assets/Clock.png" /></div>
          <div class="info-text">Mon – Fri, 9am – 6pm</div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>copyrights reserved by diagnoses @2026</footer>
  </body>
</html>
