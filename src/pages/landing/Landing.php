<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav>
      <div class="nav-logo">
        <svg
          width="130"
          height="44"
          viewBox="0 0 130 44"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="20"
            cy="22"
            r="17"
            stroke="#e8b4bc"
            stroke-width="1.4"
            fill="none"
            opacity="0.65"
          />
          <polyline
            points="5,22 10,22 13,15 16,29 19,18 22,26 25,22 36,22"
            stroke="#b05060"
            stroke-width="1.7"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            opacity="0.9"
          />
          <text
            x="44"
            y="19"
            font-family="Georgia, serif"
            font-size="14"
            fill="#b05060"
            font-style="italic"
            letter-spacing="0.2"
          >
            Diagnosis
          </text>
          <text
            x="50"
            y="34"
            font-family="Georgia, serif"
            font-size="12"
            fill="#b05060"
            font-style="italic"
            letter-spacing="0.5"
          >
            Master
          </text>
        </svg>
      </div>

      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact us</a></li>
      </ul>

      <div class="nav-btns">
        <button class="btn-outline"><a href="..\auth\sign_up.php">Sign up</a></button>
        <button class="btn-solid"><a href="..\auth\login.php">Login</a></button>
      </div>
    </nav>

    <!-- HERO -->
    <section class="hero" id="home">
      <div class="hero-text">
        <h1>
          Diagnosis Master:<br />Bridge the gap between<br />Lectures &amp;
          Clinics
        </h1>
        <p>
          A complete learning ecosystem for medical students. Interactive
          visualization meet evidence-based case studies to turn theory into
          practice.
        </p>
        <button class="btn-show-more">Show More</button>
      </div>
      <div class="container">
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
          Diagnosis Master is a comprehensive medical learning platform designed
          to bridge the gap between theoretical knowledge and clinical practice.
          We combine interactive anatomical visualizations, evidence-based case
          studies, and adaptive quizzes to create a complete learning ecosystem
          for medical students at every stage of their education.
        </p>
        <br />
        <p>
          Our mission is to empower the next generation of healthcare
          professionals with tools that make complex diagnostic reasoning
          intuitive, engaging, and effective.
        </p>
      </div>
    </section>
    <!-- features -->
    <section class="features">
      <h2>Features</h2>

      <div class="feat-grid">
        <div class="feat-card has-content">
          <div class="feat-icon-label">
            <span class="icon">🔎</span>
            Powerful Search
          </div>
          <p>
            Quickly search for diseases, symptoms, and diagnoses in a
            well-organized medical database.
          </p>
        </div>

        <div class="feat-card has-content">
          <div class="feat-icon-label">
            <span class="icon">🧠</span>
            Interactive Quizzes
          </div>
          <p>
            Test your medical knowledge with quizzes and review important
            concepts easily.
          </p>
        </div>

        <div class="feat-card has-content">
          <div class="feat-icon-label">
            <span class="icon">📚</span>
            Organized Medical Database
          </div>
          <p>
            Access reliable medical information presented in a structured and
            easy-to-understand way.
          </p>
        </div>

        <div class="feat-card has-content">
          <div class="feat-icon-label">
            <span class="icon">🩺</span>
            Symptom Checker
          </div>
          <p>
            Enter symptoms and receive possible disease suggestions to help
            practice diagnostic thinking.
          </p>
        </div>

        <div class="feat-card has-content">
          <div class="feat-icon-label">
            <span class="icon">📋</span>
            Medical Case Studies
          </div>
          <p>
            Analyze real-like medical cases and try to determine the correct
            diagnosis to improve clinical reasoning.
          </p>
        </div>

        <div class="feat-card has-content">
          <div class="feat-icon-label">
            <span class="icon">💻</span>
            User-Friendly Interface
          </div>
          <p>
            Simple and clean design that helps students from Pharmacy,
            Dentistry, and Physical Therapy navigate easily.
          </p>
        </div>
      </div>
    </section>

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
          <div class="info-icon"><img src="../../assets/location_on.png" /></div>
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
