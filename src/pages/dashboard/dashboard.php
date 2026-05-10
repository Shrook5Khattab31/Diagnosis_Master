<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_dashboard.css" />
    <link rel="stylesheet" href="style3.css" />
    <link rel="stylesheet" href="owl.css" />
    <title>Diagnosis Master</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <!-- jQuery (required for Owl Carousel) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  </head>

  <body>
    <div class="dashboard">
      <div class="big_card">
        <nav class="navbar_dash">
          <img class="nav-logo" src="../../assets/LogoLa.png" class="logo" />
          <input type="text" placeholder="Search here..." class="search-bar" />
          <img
            src="..\..\assets\search button.png"
            alt="Search"
            class="search-button"
          />
          <div class="score">
            <h2>Score: 1000 ✦</h2>
          </div>
          <button class="theme_btn">
            <img src="../../assets/Theme Button.png" />
          </button>
        </nav>

        <!-- =========================
            BANNER
  ========================== -->

        <div class="headline-banner">
          <img src="../../assets/Headline Banner.png" />
        </div>

        <!-- =========================
              RECENTLY VISITED
        ========================== -->
        <section class="recently">
          <h2>Recently visited</h2>
          <div class="cards-wrapper">
            <div class="cards owl-carousel owl-theme" id="cards">
              <!-- CARD 1 -->
              <div class="card">
                <img src="../../assets/dashboard/chapter1.svg" alt="ch1" />

                <div class="overlay">
                  <div class="bottom-bar">
                    <span class="chapter">Chapter 1</span>

                    <span class="divider"></span>

                    <span class="section">Upper Limbs</span>
                  </div>
                </div>
              </div>

              <!-- CARD 2 -->
              <div class="card">
                <!-- svg icon here -->
                <img src="../../assets/dashboard/chapter2.svg" alt="ch2" />

                <div class="overlay">
                  <div class="bottom-bar">
                    <span class="chapter">Chapter 2</span>

                    <span class="divider"></span>

                    <span class="section">Upper Limbs</span>
                  </div>
                </div>
              </div>

              <!-- CARD 3 -->
              <div class="card">
                <img src="../../assets/dashboard/chapter3.svg" alt="ch3" />

                <div class="overlay">
                  <div class="bottom-bar">
                    <span class="chapter">Chapter 3</span>

                    <span class="divider"></span>

                    <span class="section">Upper Limbs</span>
                  </div>
                </div>
              </div>

              <!-- CARD 4 -->
              <div class="card">
                <img src="../../assets/dashboard/chapter3.svg" alt="ch3" />

                <div class="overlay">
                  <div class="bottom-bar">
                    <span class="chapter">Chapter 4</span>

                    <span class="divider"></span>

                    <span class="section">Upper Limbs</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="saved-cards-container">
          <h1 class="section-title">Saved Cards</h1>

          <div class="carousel-layout">
            <div class="cards-list owl-carousel owl-theme">
              <div class="paper-wrapper">
                <img
                  src="../../assets/card.png"
                  alt="paper background"
                  class="paper-bg"
                />

                <div class="card-content">
                  <i class="fa-solid fa-bookmark bookmark-icon"></i>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>

              <div class="paper-wrapper">
                <img
                  src="../../assets/card.png"
                  alt="paper background"
                  class="paper-bg"
                />

                <div class="card-content">
                  <i class="fa-solid fa-bookmark bookmark-icon"></i>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>

              <div class="paper-wrapper">
                <img
                  src="../../assets/card.png"
                  alt="paper background"
                  class="paper-bg"
                />

                <div class="card-content">
                  <i class="fa-solid fa-bookmark bookmark-icon"></i>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>

              <div class="paper-wrapper">
                <img
                  src="../../assets/card.png"
                  alt="paper background"
                  class="paper-bg"
                />

                <div class="card-content">
                  <i class="fa-solid fa-bookmark bookmark-icon"></i>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>
              <div class="paper-wrapper">
                <img
                  src="../../assets/card.png"
                  alt="paper background"
                  class="paper-bg"
                />

                <div class="card-content">
                  <i class="fa-solid fa-bookmark bookmark-icon"></i>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>
              <div class="paper-wrapper">
                <img
                  src="../../assets/card.png"
                  alt="paper background"
                  class="paper-bg"
                />

                <div class="card-content">
                  <i class="fa-solid fa-bookmark bookmark-icon"></i>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section class="quizzes-section">
          <h2>Quizzes</h2>
          <div class="carousel-wrapper">
            <div class="cards-track">
              <div class="quiz-card">
                <div class="quiz-card-title">Quiz chapter 1</div>
                <div class="quiz-card-sub">10 Questions</div>
                <div class="progress-row">
                  <div class="progress-bar-bg">
                    <div class="progress-bar-fill" style="width: 100%"></div>
                  </div>
                  <span class="progress-label">100%</span>
                </div>
              </div>

              <div class="quiz-card">
                <div class="quiz-card-title">Quiz chapter 2</div>
                <div class="quiz-card-sub">10 Questions</div>
                <div class="progress-row">
                  <div class="progress-bar-bg">
                    <div class="progress-bar-fill" style="width: 45%"></div>
                  </div>
                  <span class="progress-label">45%</span>
                </div>
              </div>

              <div class="quiz-card">
                <div class="quiz-card-title">Quiz chapter 3</div>
                <div class="quiz-card-sub">10 Questions</div>
                <div class="progress-row">
                  <div class="progress-bar-bg">
                    <div class="progress-bar-fill" style="width: 0%"></div>
                  </div>
                  <span class="progress-label">0%</span>
                </div>
              </div>
            </div>

            <button class="nav-btn" aria-label="Next">&#8250;</button>
          </div>
        </section>
        <!-- weekly quests -->
        <div class="title_weekly-quests">
          <h2>
            Weekly Quests
            <span>[1 of 4 completed]</span>
          </h2>
        </div>
        <div class="container_weekly-quests">
          <!-- Card -->
          <div class="card_weekly-quests">
            <div>
              <svg
                width="92"
                height="89"
                viewBox="0 0 92 89"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M39.5918 18.2744C41.2733 12.1308 49.9865 12.1308 51.668 18.2744C52.441 21.0979 55.7662 22.3186 58.1826 20.666L58.5342 20.4258C63.7254 16.8752 70.2668 22.4893 67.5449 28.1592C66.2937 30.7658 68.0708 33.8445 70.9766 34.0889C77.1883 34.6111 78.8873 43.127 73.0928 45.752C70.4546 46.9469 69.8473 50.4228 71.9238 52.4414C76.4263 56.818 72.1888 64.3247 66.1152 62.7314L65.7539 62.6367C62.933 61.8967 60.2327 64.1825 60.4971 67.0869C61.07 73.3854 52.9572 76.4051 49.2725 71.2646L49.1104 71.0381C47.4021 68.6553 43.8576 68.6552 42.1494 71.0381L41.9873 71.2646C38.3025 76.4051 30.1898 73.3854 30.7627 67.0869C31.027 64.1826 28.3277 61.8969 25.5068 62.6367L25.1445 62.7314C19.071 64.3245 14.8345 56.818 19.3369 52.4414C21.4129 50.4229 20.8057 46.9469 18.168 45.752C12.3731 43.1272 14.0715 34.6113 20.2832 34.0889C23.1891 33.8445 24.9662 30.7659 23.7148 28.1592C20.9929 22.4893 27.5353 16.8751 32.7266 20.4258L33.0771 20.666C35.4935 22.3188 38.8187 21.0979 39.5918 18.2744Z"
                  fill="#384C65"
                  stroke="white"
                  stroke-width="2"
                />
                <path
                  d="M45.6301 31.3301V36.1076M39.2601 31.3301V40.8851M52.0001 31.3301V40.8851M45.6301 54.4213L40.8526 56.8101L41.6489 51.2363L38.4639 48.0513L43.2414 47.2551L45.6301 42.4776L48.0189 47.2551L52.7964 48.0513L49.6114 51.2363L50.4076 56.8101L45.6301 54.4213Z"
                  stroke="white"
                  stroke-width="4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>

            <h3>Finish<br />chapter 1</h3>

            <div class="progress-row">
              <div class="progress">
                <div class="bar" style="width: 45%"></div>
              </div>

              <span class="percent">45%</span>
            </div>

            <div class="bottom_weekly-quests">
              <span
                >300
                <svg
                  width="22"
                  height="20"
                  viewBox="0 0 26 29"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.5571 0L13.1146 10.1847C13.1936 11.6265 14.7275 12.5121 16.0155 11.8595L25.1145 7.25L16.573 12.8252C15.3639 13.6144 15.3639 15.3856 16.573 16.1748L25.1145 21.75L16.0155 17.1405C14.7275 16.4879 13.1936 17.3735 13.1146 18.8153L12.5571 29L11.9996 18.8153C11.9207 17.3735 10.3868 16.4879 9.09877 17.1405L-0.000239372 21.75L8.54125 16.1748C9.75035 15.3856 9.75034 13.6144 8.54125 12.8252L-0.000239372 7.25L9.09877 11.8595C10.3868 12.5121 11.9207 11.6265 11.9996 10.1847L12.5571 0Z"
                    fill="white"
                  />
                </svg>
              </span>
            </div>
          </div>

          <!-- Card -->
          <div class="card_weekly-quests">
            <div>
              <svg
                width="92"
                height="89"
                viewBox="0 0 92 89"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M39.5918 18.2744C41.2733 12.1308 49.9865 12.1308 51.668 18.2744C52.441 21.0979 55.7662 22.3186 58.1826 20.666L58.5342 20.4258C63.7254 16.8752 70.2668 22.4893 67.5449 28.1592C66.2937 30.7658 68.0708 33.8445 70.9766 34.0889C77.1883 34.6111 78.8873 43.127 73.0928 45.752C70.4546 46.9469 69.8473 50.4228 71.9238 52.4414C76.4263 56.818 72.1888 64.3247 66.1152 62.7314L65.7539 62.6367C62.933 61.8967 60.2327 64.1825 60.4971 67.0869C61.07 73.3854 52.9572 76.4051 49.2725 71.2646L49.1104 71.0381C47.4021 68.6553 43.8576 68.6552 42.1494 71.0381L41.9873 71.2646C38.3025 76.4051 30.1898 73.3854 30.7627 67.0869C31.027 64.1826 28.3277 61.8969 25.5068 62.6367L25.1445 62.7314C19.071 64.3245 14.8345 56.818 19.3369 52.4414C21.4129 50.4229 20.8057 46.9469 18.168 45.752C12.3731 43.1272 14.0715 34.6113 20.2832 34.0889C23.1891 33.8445 24.9662 30.7659 23.7148 28.1592C20.9929 22.4893 27.5353 16.8751 32.7266 20.4258L33.0771 20.666C35.4935 22.3188 38.8187 21.0979 39.5918 18.2744Z"
                  fill="#384C65"
                  stroke="white"
                  stroke-width="2"
                />
                <path
                  d="M35.0381 31.5596C34.0933 31.5596 33.1871 31.9349 32.519 32.603C31.8509 33.2711 31.4756 34.1772 31.4756 35.1221V37.9554C31.4756 39.1904 32.1168 40.3352 33.1642 40.9836L42.346 46.6598C40.9494 47.4123 39.8439 48.6093 39.2046 50.0612C38.5654 51.5131 38.429 53.1368 38.817 54.675C39.205 56.2132 40.0953 57.5779 41.3467 58.5529C42.5982 59.5279 44.1392 60.0573 45.7256 60.0573C47.312 60.0573 48.853 59.5279 50.1044 58.5529C51.3559 57.5779 52.2461 56.2132 52.6342 54.675C53.0222 53.1368 52.8858 51.5131 52.2465 50.0612C51.6073 48.6093 50.5018 47.4123 49.1052 46.6598L58.287 40.9836C58.803 40.6644 59.229 40.2187 59.5245 39.6888C59.82 39.1589 59.9753 38.5622 59.9756 37.9554V35.1221C59.9756 34.1772 59.6003 33.2711 58.9322 32.603C58.2641 31.9349 57.3579 31.5596 56.4131 31.5596H35.0381ZM40.9756 43.0213V33.9346H50.4756V43.0213L46.3502 45.5721C46.1625 45.6881 45.9462 45.7496 45.7256 45.7496C45.5049 45.7496 45.2886 45.6881 45.101 45.5721L40.9756 43.0213ZM45.7256 48.1846C46.9854 48.1846 48.1935 48.685 49.0843 49.5758C49.9751 50.4666 50.4756 51.6748 50.4756 52.9346C50.4756 54.1943 49.9751 55.4025 49.0843 56.2933C48.1935 57.1841 46.9854 57.6846 45.7256 57.6846C44.4658 57.6846 43.2576 57.1841 42.3668 56.2933C41.476 55.4025 40.9756 54.1943 40.9756 52.9346C40.9756 51.6748 41.476 50.4666 42.3668 49.5758C43.2576 48.685 44.4658 48.1846 45.7256 48.1846Z"
                  fill="white"
                />
              </svg>
            </div>
            <h3>Finish 3<br />Cases</h3>

            <div class="progress-row">
              <div class="progress">
                <div class="bar" style="width: 75%"></div>
              </div>

              <span class="percent">75%</span>
            </div>

            <div class="bottom_weekly-quests">
              <span
                >300
                <svg
                  width="22"
                  height="20"
                  viewBox="0 0 26 29"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.5571 0L13.1146 10.1847C13.1936 11.6265 14.7275 12.5121 16.0155 11.8595L25.1145 7.25L16.573 12.8252C15.3639 13.6144 15.3639 15.3856 16.573 16.1748L25.1145 21.75L16.0155 17.1405C14.7275 16.4879 13.1936 17.3735 13.1146 18.8153L12.5571 29L11.9996 18.8153C11.9207 17.3735 10.3868 16.4879 9.09877 17.1405L-0.000239372 21.75L8.54125 16.1748C9.75035 15.3856 9.75034 13.6144 8.54125 12.8252L-0.000239372 7.25L9.09877 11.8595C10.3868 12.5121 11.9207 11.6265 11.9996 10.1847L12.5571 0Z"
                    fill="white"
                  /></svg
              ></span>
            </div>
          </div>

          <!-- Card -->
          <div class="card_weekly-quests">
            <div>
              <svg
                width="92"
                height="89"
                viewBox="0 0 92 89"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M39.5918 18.2744C41.2733 12.1308 49.9865 12.1308 51.668 18.2744C52.441 21.0979 55.7662 22.3186 58.1826 20.666L58.5342 20.4258C63.7254 16.8752 70.2668 22.4893 67.5449 28.1592C66.2937 30.7658 68.0708 33.8445 70.9766 34.0889C77.1883 34.6111 78.8873 43.127 73.0928 45.752C70.4546 46.9469 69.8473 50.4228 71.9238 52.4414C76.4263 56.818 72.1888 64.3247 66.1152 62.7314L65.7539 62.6367C62.933 61.8967 60.2327 64.1825 60.4971 67.0869C61.07 73.3854 52.9572 76.4051 49.2725 71.2646L49.1104 71.0381C47.4021 68.6553 43.8576 68.6552 42.1494 71.0381L41.9873 71.2646C38.3025 76.4051 30.1898 73.3854 30.7627 67.0869C31.027 64.1826 28.3277 61.8969 25.5068 62.6367L25.1445 62.7314C19.071 64.3245 14.8345 56.818 19.3369 52.4414C21.4129 50.4229 20.8057 46.9469 18.168 45.752C12.3731 43.1272 14.0715 34.6113 20.2832 34.0889C23.1891 33.8445 24.9662 30.7659 23.7148 28.1592C20.9929 22.4893 27.5353 16.8751 32.7266 20.4258L33.0771 20.666C35.4935 22.3188 38.8187 21.0979 39.5918 18.2744Z"
                  fill="#384C65"
                  stroke="white"
                  stroke-width="2"
                />
                <path
                  d="M45.6301 31.3301V36.1076M39.2601 31.3301V40.8851M52.0001 31.3301V40.8851M45.6301 54.4213L40.8526 56.8101L41.6489 51.2363L38.4639 48.0513L43.2414 47.2551L45.6301 42.4776L48.0189 47.2551L52.7964 48.0513L49.6114 51.2363L50.4076 56.8101L45.6301 54.4213Z"
                  stroke="white"
                  stroke-width="4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>

            <h3>Finish<br />chapter 1</h3>

            <div class="progress-row">
              <div class="progress">
                <div class="bar" style="width: 90%"></div>
              </div>

              <span class="percent">90%</span>
            </div>

            <div class="bottom_weekly-quests">
              <span
                >300
                <svg
                  width="22"
                  height="20"
                  viewBox="0 0 26 29"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.5571 0L13.1146 10.1847C13.1936 11.6265 14.7275 12.5121 16.0155 11.8595L25.1145 7.25L16.573 12.8252C15.3639 13.6144 15.3639 15.3856 16.573 16.1748L25.1145 21.75L16.0155 17.1405C14.7275 16.4879 13.1936 17.3735 13.1146 18.8153L12.5571 29L11.9996 18.8153C11.9207 17.3735 10.3868 16.4879 9.09877 17.1405L-0.000239372 21.75L8.54125 16.1748C9.75035 15.3856 9.75034 13.6144 8.54125 12.8252L-0.000239372 7.25L9.09877 11.8595C10.3868 12.5121 11.9207 11.6265 11.9996 10.1847L12.5571 0Z"
                    fill="white"
                  /></svg
              ></span>
            </div>
          </div>

          <!-- Disabled -->
          <div class="card_disabled">
            <div>
              <svg
                width="92"
                height="89"
                viewBox="0 0 92 89"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M39.5918 18.2744C41.2733 12.1308 49.9865 12.1308 51.668 18.2744C52.441 21.0979 55.7662 22.3186 58.1826 20.666L58.5342 20.4258C63.7254 16.8752 70.2668 22.4893 67.5449 28.1592C66.2937 30.7658 68.0708 33.8445 70.9766 34.0889C77.1883 34.6111 78.8873 43.127 73.0928 45.752C70.4546 46.9469 69.8473 50.4228 71.9238 52.4414C76.4263 56.818 72.1888 64.3247 66.1152 62.7314L65.7539 62.6367C62.933 61.8967 60.2327 64.1825 60.4971 67.0869C61.07 73.3854 52.9572 76.4051 49.2725 71.2646L49.1104 71.0381C47.4021 68.6553 43.8576 68.6552 42.1494 71.0381L41.9873 71.2646C38.3025 76.4051 30.1898 73.3854 30.7627 67.0869C31.027 64.1826 28.3277 61.8969 25.5068 62.6367L25.1445 62.7314C19.071 64.3245 14.8345 56.818 19.3369 52.4414C21.4129 50.4229 20.8057 46.9469 18.168 45.752C12.3731 43.1272 14.0715 34.6113 20.2832 34.0889C23.1891 33.8445 24.9662 30.7659 23.7148 28.1592C20.9929 22.4893 27.5353 16.8751 32.7266 20.4258L33.0771 20.666C35.4935 22.3188 38.8187 21.0979 39.5918 18.2744Z"
                  fill="#C0C9D8"
                  stroke="white"
                  stroke-width="2"
                />
                <path
                  d="M45.6301 31.3301V36.1076M39.2601 31.3301V40.8851M52.0001 31.3301V40.8851M45.6301 54.4213L40.8526 56.8101L41.6489 51.2363L38.4639 48.0513L43.2414 47.2551L45.6301 42.4776L48.0189 47.2551L52.7964 48.0513L49.6114 51.2363L50.4076 56.8101L45.6301 54.4213Z"
                  stroke="white"
                  stroke-width="4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>

            <h3>Finish<br />chapter 1</h3>

            <div class="progress-row">
              <div class="progress">
                <div class="bar" style="width: 100%"></div>
              </div>

              <span class="percent">100%</span>
            </div>

            <div class="bottom_quests">
              <span
                >300
                <svg
                  width="22"
                  height="20"
                  viewBox="0 0 26 29"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.5571 0L13.1146 10.1847C13.1936 11.6265 14.7275 12.5121 16.0155 11.8595L25.1145 7.25L16.573 12.8252C15.3639 13.6144 15.3639 15.3856 16.573 16.1748L25.1145 21.75L16.0155 17.1405C14.7275 16.4879 13.1936 17.3735 13.1146 18.8153L12.5571 29L11.9996 18.8153C11.9207 17.3735 10.3868 16.4879 9.09877 17.1405L-0.000239372 21.75L8.54125 16.1748C9.75035 15.3856 9.75034 13.6144 8.54125 12.8252L-0.000239372 7.25L9.09877 11.8595C10.3868 12.5121 11.9207 11.6265 11.9996 10.1847L12.5571 0Z"
                    fill="white"
                  /></svg
              ></span>
            </div>
          </div>
        </div>
        <div class="main-dashboard">
          <div class="container">
            <div class="app">
              <h1>To Do List</h1>

              <div class="input-row">
                <input
                  class="task-input"
                  id="taskInput"
                  type="text"
                  placeholder="Add a new task..."
                  maxlength="80"
                />
                <input class="date-input" id="dateInput" type="date" />
                <button class="add-btn" id="addBtn" title="Add task">+</button>
              </div>

              <div class="stats" id="stats"></div>

              <div class="task-list" id="taskList">
                <div class="empty" id="emptyMsg">
                  No tasks yet. Add one above!
                </div>
              </div>

              <button class="toggle-btn" id="toggleBtn" style="display: none">
                <span class="arrow">&#8964;</span>
              </button>
            </div>
          </div>

          <div class="calendar">
            <div class="cal-header">
              <button class="nav-btn" id="prevBtn">&#8249;</button>
              <div class="header-center">
                <select class="select-pill" id="monthSelect"></select>
                <input
                  type="number"
                  class="select-pill"
                  id="yearInput"
                  min="1"
                />
              </div>
              <button class="nav-btn" id="nextBtn">&#8250;</button>
            </div>

            <div class="weekdays" id="weekdays"></div>
            <div class="days-grid" id="daysGrid"></div>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <div class="profile">
          <button onclick="location.href = '../profile_tab/profile.html'">
            <img src="../../assets/profile.png" alt="Profile" />
            <p><b>Profile Name</b></p>
          </button>
        </div>

        <div class="Menu">
          <p class="MM">MAIN MENU</p>
          <div class="menu-items">
            <p>
              <img src="../../assets/dashboard icon.png" alt="icon" />
              Dashboard
            </p>

            <p
              class="course"
              onclick="location.href = '../Course_Tab/courstap1.php'"
            >
              <img src="../../assets/courses icon.png" alt="icon" /> Courses
            </p>

            <p><img src="../../assets/quizes icon.png" alt="icon" /> Quizes</p>
            <span
              ><img src="../../assets/setting icon.png" alt="icon" />
              Settings</span
            >
          </div>

          <p class="RA">RECENT ACHIEVEMENTS</p>
          <div class="img-achievements">
            <img src="../../assets/Achievement.png" alt="Achievement 2" />
            <img src="../../assets/Achievement (1).png" alt="Achievement 1" />
          </div>
          <p class="discover">DISCOVER MODE</p>
          <p class="full-body">
            <img src="../../assets/full-body-icon.png" alt="icon" />Full Body
            <img src="../../assets/arrow_drop_down.png" alt="icon" />
          </p>
          <p class="Account">ACCOUNT</p>

          <button
            class="Log-Out"
            onclick="location.href = '../landing/landing.php'"
          >
            <p class="Log-Out">
              <img src="../../assets/Log Out.png" alt="icon" />Log Out
            </p>
          </button>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function () {
        $("#cards").owlCarousel({
          items: 3, // Number of items to display
          loop: false, // Disable infinite loop
          margin: 10, // Space between items
          nav: true, // Show next/prev buttons
          dots: false, // Show pagination dots
          navText: ["‹", "›"], // Custom arrow text
          responsive: {
            0: {
              items: 1, // 1 item on small screens
            },
            768: {
              items: 2, // 2 items on tablets
            },
            1024: {
              items: 3, // 3 items on desktop
            },
          },
          autoplay: false, // Disable autoplay
          smartSpeed: 450, // Animation speed
          navSpeed: 450, // Navigation speed
        });
      });

      $(".cards-list").owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,

        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          1200: {
            items: 3,
          },
          1500: {
            items: 4,
          },
        },
      });

      const MONTHS = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];
      const DAYS = ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"];

      const now = new Date();
      let viewYear = now.getFullYear();
      let viewMonth = now.getMonth();
      let selectedDate = {
        year: now.getFullYear(),
        month: now.getMonth(),
        day: now.getDate(),
      };

      const monthSelect = document.getElementById("monthSelect");
      const yearInput = document.getElementById("yearInput");
      const weekdaysEl = document.getElementById("weekdays");
      const daysGridEl = document.getElementById("daysGrid");

      // Populate month select
      MONTHS.forEach((m, i) => {
        const opt = document.createElement("option");
        opt.value = i;
        opt.textContent = m;
        monthSelect.appendChild(opt);
      });

      monthSelect.addEventListener("change", () => {
        viewMonth = parseInt(monthSelect.value);
        buildGrid();
      });

      yearInput.addEventListener("change", () => {
        const val = parseInt(yearInput.value);
        if (!isNaN(val) && val > 0) {
          viewYear = val;
          buildGrid();
        }
      });

      yearInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter") {
          yearInput.blur();
        }
      });

      function isToday(y, m, d) {
        return (
          y === now.getFullYear() && m === now.getMonth() && d === now.getDate()
        );
      }

      function isSelected(y, m, d) {
        return (
          selectedDate &&
          selectedDate.year === y &&
          selectedDate.month === m &&
          selectedDate.day === d
        );
      }

      function buildWeekdays() {
        weekdaysEl.innerHTML = "";
        DAYS.forEach((d) => {
          const el = document.createElement("div");
          el.className = "weekday";
          el.textContent = d;
          weekdaysEl.appendChild(el);
        });
      }

      function buildGrid() {
        daysGridEl.innerHTML = "";
        monthSelect.value = viewMonth;
        yearInput.value = viewYear;

        // Monday-based week: Mon=0 ... Sun=6
        const firstDow = new Date(viewYear, viewMonth, 1).getDay(); // 0=Sun
        const offset = (firstDow + 6) % 7;
        const daysInMonth = new Date(viewYear, viewMonth + 1, 0).getDate();
        const prevDays = new Date(viewYear, viewMonth, 0).getDate();

        for (let i = offset - 1; i >= 0; i--) {
          daysGridEl.appendChild(
            makeCell(prevDays - i, viewMonth - 1, viewYear, true),
          );
        }
        for (let d = 1; d <= daysInMonth; d++) {
          daysGridEl.appendChild(makeCell(d, viewMonth, viewYear, false));
        }
        const total = offset + daysInMonth;
        const remaining = total % 7 === 0 ? 0 : 7 - (total % 7);
        for (let d = 1; d <= remaining; d++) {
          daysGridEl.appendChild(makeCell(d, viewMonth + 1, viewYear, true));
        }
      }

      function makeCell(day, month, year, isOther) {
        let y = year,
          m = month;
        if (m < 0) {
          m = 11;
          y--;
        }
        if (m > 11) {
          m = 0;
          y++;
        }

        const cell = document.createElement("div");
        cell.className = "day-cell";
        cell.textContent = day;

        if (isOther) cell.classList.add("other-month");
        if (isToday(y, m, day)) cell.classList.add("today");
        if (isSelected(y, m, day)) cell.classList.add("selected");

        cell.addEventListener("click", () => {
          selectedDate = { year: y, month: m, day };
          if (isOther) {
            viewYear = y;
            viewMonth = m;
          }
          buildGrid();
        });

        return cell;
      }

      document.getElementById("prevBtn").addEventListener("click", () => {
        viewMonth--;
        if (viewMonth < 0) {
          viewMonth = 11;
          viewYear--;
        }
        buildGrid();
      });

      document.getElementById("nextBtn").addEventListener("click", () => {
        viewMonth++;
        if (viewMonth > 11) {
          viewMonth = 0;
          viewYear++;
        }
        buildGrid();
      });

      buildWeekdays();
      monthSelect.value = viewMonth;
      yearInput.value = viewYear;
      buildGrid();

      //todo_list

      const taskInput = document.getElementById("taskInput");
      const dateInput = document.getElementById("dateInput");
      const addBtn = document.getElementById("addBtn");
      const taskList = document.getElementById("taskList");
      const emptyMsg = document.getElementById("emptyMsg");
      const toggleBtn = document.getElementById("toggleBtn");
      const statsEl = document.getElementById("stats");

      // Set today's date as default
      const today = new Date();
      const yyyy = today.getFullYear();
      const mm = String(today.getMonth() + 1).padStart(2, "0");
      const dd = String(today.getDate()).padStart(2, "0");
      dateInput.value = `${yyyy}-${mm}-${dd}`;

      const VISIBLE_COUNT = 3;
      let tasks = JSON.parse(localStorage.getItem("todos") || "[]");
      let expanded = false;
      let dragSrc = null;

      function saveTasks() {
        localStorage.setItem("todos", JSON.stringify(tasks));
      }

      function formatDate(val) {
        if (!val) return "";
        const [y, m, d] = val.split("-");
        return `${d}/${m}/${y}`;
      }

      function renderStats() {
        if (!tasks.length) {
          statsEl.textContent = "";
          return;
        }
        const done = tasks.filter((t) => t.done).length;
        statsEl.innerHTML = `<span>${tasks.length}</span> tasks &nbsp;·&nbsp; <span>${done}</span> completed`;
      }

      function render() {
        taskList.querySelectorAll(".task-card").forEach((el) => el.remove());

        if (!tasks.length) {
          emptyMsg.style.display = "";
          toggleBtn.style.display = "none";
          renderStats();
          return;
        }
        emptyMsg.style.display = "none";

        const visible = expanded ? tasks : tasks.slice(0, VISIBLE_COUNT);

        visible.forEach((task, idx) => {
          const card = document.createElement("div");
          card.className = "task-card" + (task.done ? " completed" : "");
          card.draggable = true;
          card.dataset.idx = tasks.indexOf(task);

          card.innerHTML = `
        <div class="drag-handle" title="Drag to reorder">&#8942;&#8942;</div>
        <button class="check-btn${task.done ? " checked" : ""}" title="Mark complete"></button>
        <div class="task-info">
          <div class="task-title">${escHtml(task.title)}</div>
          <div class="task-meta">
            ${task.date ? `[${formatDate(task.date)}]` : ""}
            <span class="task-tag">Auto</span>
          </div>
        </div>
        <button class="del-btn" title="Delete task">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4h6v2"/>
          </svg>
        </button>
      `;

          // Toggle done
          card.querySelector(".check-btn").addEventListener("click", () => {
            tasks[card.dataset.idx].done = !tasks[card.dataset.idx].done;
            saveTasks();
            render();
          });

          // Delete
          card.querySelector(".del-btn").addEventListener("click", () => {
            tasks.splice(card.dataset.idx, 1);
            saveTasks();
            render();
          });

          // Drag events
          card.addEventListener("dragstart", (e) => {
            dragSrc = card;
            card.classList.add("dragging");
            e.dataTransfer.effectAllowed = "move";
          });
          card.addEventListener("dragend", () => {
            card.classList.remove("dragging");
            taskList
              .querySelectorAll(".task-card")
              .forEach((c) => c.classList.remove("drag-over"));
          });
          card.addEventListener("dragover", (e) => {
            e.preventDefault();
            e.dataTransfer.dropEffect = "move";
            taskList
              .querySelectorAll(".task-card")
              .forEach((c) => c.classList.remove("drag-over"));
            if (card !== dragSrc) card.classList.add("drag-over");
          });
          card.addEventListener("drop", (e) => {
            e.preventDefault();
            if (!dragSrc || dragSrc === card) return;
            const from = parseInt(dragSrc.dataset.idx);
            const to = parseInt(card.dataset.idx);
            const [moved] = tasks.splice(from, 1);
            tasks.splice(to, 0, moved);
            saveTasks();
            render();
          });

          taskList.appendChild(card);
        });

        // Toggle button
        if (tasks.length > VISIBLE_COUNT) {
          toggleBtn.style.display = "flex";
          toggleBtn.classList.toggle("expanded", expanded);
          toggleBtn.innerHTML = expanded
            ? `<span class="arrow" style="transform:rotate(180deg)">&#8964;</span>`
            : `<span class="arrow">&#8964;</span>`;
        } else {
          toggleBtn.style.display = "none";
        }

        renderStats();
      }

      function addTask() {
        const title = taskInput.value.trim();
        if (!title) {
          taskInput.focus();
          return;
        }
        tasks.unshift({ title, date: dateInput.value, done: false });
        saveTasks();
        taskInput.value = "";
        taskInput.focus();
        expanded = false;
        render();
      }

      function escHtml(str) {
        return str.replace(
          /[&<>"']/g,
          (c) =>
            ({
              "&": "&amp;",
              "<": "&lt;",
              ">": "&gt;",
              '"': "&quot;",
              "'": "&#39;",
            })[c],
        );
      }

      addBtn.addEventListener("click", addTask);
      taskInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter") addTask();
      });
      toggleBtn.addEventListener("click", () => {
        expanded = !expanded;
        render();
      });

      render();
      const searchBar = document.querySelector(".search-bar");
      const items = document.querySelectorAll("#cards .card, .quiz-card");

      searchBar.addEventListener("input", function () {
        const value = this.value.toLowerCase();

        items.forEach((card) => {
          const text = card.textContent.toLowerCase();

          card.style.display = text.includes(value) ? "block" : "none";
        });
      });
    </script>
  </body>
</html>
