<?php include 'configuration.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/responsive.css" />
  <title>Mathew Lapias</title>
</head>

<body>
  <!-- Header -->
  <header>
    <div class="main-container">
      <div class="nav">
        <div class="logo">
          <a href="/">MATE</a>
        </div>

        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#Gallery">Gallery</a></li>
            <li><a href="#Blogs">Blogs</a></li>
            <li><a href="#Contact">Contact</a></li>
          </ul>
        </nav>

        <div class="burger">
          <div class="line-1"></div>
          <div class="line-2"></div>
          <div class="line-3"></div>
        </div>
      </div>

      <section id="hero">
        <div class="hero-left">
          <h3 class="pre-title">My name is</h3>
          <h1 class="hero-name">Mathew <span>Lapias</span></h1>
          <p>
            Saya merupakan mahasiswa aktif Jurusan Teknik Informatika Unsrat Angkatan 2022. 
            Ini merupakan MidProject dengan menambahkan CSS, HTML dan JavaScript dalam website ini.
          </p>
        </div>

        <div class="hero-right">
          <img src="Foto/Profil.jpg" title="Foto dari Mathew Lapias" alt="Person Standing" />
        </div>
      </section>
    </div>
  </header>
  <!-- End Header -->

  <!-- Gallery -->
  <section id="Gallery">
    <div class="Gallery main-container">
      <h3 class="pre-title">Gallery</h3>
      <h1 class="section-title Gallery-title">Specialized In Photography</h1>

            <img src="Foto/Foto1.jpg" height="585" width="437" title="Foto diambil di Air Terjun Tunan">
            <img src="Foto/Foto2.jpg" height="585" width="437" title="Foto diambil di Air Terjun Tunan">
            <img src="Foto/Foto3.jpg" height="585" width="437" title="Foto diambil di Air Terjun Tunan">
            <img src="Foto/Foto4.jpg" height="740" width="1332" title="Foto diambil di Gn. Tumpa">
            <img src="Foto/Foto5.jpg" height="740" width="1332" title="Foto diambil di Pintu Rimba Gn. Ambang">
        
    </div>
  </section>
  <!-- End Gallery -->

  <!-- Blogs -->
  <section id="Blogs">
    <div class="Blogs main-container">
      <h3 class="pre-title">Blogs</h3>
      <h1 class="section-title">Featured Articles</h1>

      <div class="grid-3">
        <!-- Blog 1 -->
        <div class="Blog">
          <div class="Blog-cover">
            <img
              src="Foto/Blog/Blog-1.jpg"
              alt="Blog 1"
            />
          </div>
          <div class="Blog-info">
            <div class="Blog-title">
              <h4><?php echo $judul1; ?></h4>
              <a href="<?php echo $Url1; ?>" class="Blog-link">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>
            <div class="Blog-tags">
              <div>Definiton</div>
              <div>Tips & Tricks</div>
            </div>
            <p>
            <?php echo $desc1; ?>
            </p>
          </div>
        </div>

        <!-- Blog 2 -->
        <div class="Blog">
          <div class="Blog-cover">
            <img
              src="Foto/Blog/Blog-2.jpg"
              alt="Blog 2"
            />
          </div>
          <div class="Blog-info">
            <div class="Blog-title">
              <h4><?php echo $judul2; ?></h4>
              <a href="<?php echo $Url2; ?>">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>
            <div class="Blog-tags">
              <div>Inovation</div>
              <div>Technology</div>
            </div>
            <p>
            <?php echo $desc2; ?>
            </p>
          </div>
        </div>

        <!-- Blog 3 -->
        <div class="Blog">
          <div class="Blog-cover">
            <img
              src="Foto/Blog/Blog-3.jpg"
              alt="Blog 3"
            />
          </div>
          <div class="Blog-info">
            <div class="Blog-title">
              <h4><?php echo $judul3; ?></h4>
              <a href="<?php echo $Url3; ?>" class="Blog-link">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>
            <div class="Blog-tags">
              <div>Guide</div>
              <div>Tips & Tricks</div>
            </div>
            <p>
            <?php echo $desc3; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog -->

  <!-- Contact -->
  <section id="Contact">
    <div class="Contact main-container">
      <div class="Contact-left">
        <form
          action="https://formspree.io/f/myyrlnkp"
          method="POST"
          class="Contact-form"
        >
          <div>
            <input type="text" placeholder="Name" name="name" />
          </div>
          <div>
            <input type="email" placeholder="Email" name="email" />
          </div>
          <div>
            <textarea
              name="message"
              id="message"
              cols="30"
              rows="10"
              placeholder="Message"
            ></textarea>
          </div>
          <div>
            <button class="btn-submit">Send Message</button>
          </div>
        </form>
      </div>

      <div class="Contact-right">
        <div class="Contact-item">
          <div class="Contact-item-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="22"
              height="22"
              viewBox="0 0 24 24"
            >
              <path
                d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z"
              />
            </svg>
          </div>
          <div class="Contact-item-detail">
            <h4>Address</h4>
            <p>Kel. Singkil Dua, Kec. Singkil, Kota Manado, Sulawesi Utara 95234, Indonesia</p>
          </div>
        </div>

        <div class="Contact-item">
          <div class="Contact-item-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="22"
              height="22"
              viewBox="0 0 24 24"
            >
              <path
                d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"
              />
            </svg>
          </div>
          <div class="Contact-item-detail">
            <h4>Phone</h4>
            <p>(+62)82346565008</p>
          </div>
        </div>

        <div class="Contact-item">
          <div class="Contact-item-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="22"
              height="22"
              viewBox="0 0 24 24"
            >
              <path
                d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"
              />
            </svg>
          </div>
          <div class="Contact-item-detail">
            <h4>Email</h4>
            <p>mathewlapias@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact -->

  <!-- Footer -->
  <footer>
    <!-- Instagram -->
    <div class="footer-icons">
      <a href="https://www.instagram.com/mathewlapias?igsh=MXJkcDNyeGpsYmE4cg==">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewBox="0 0 24 24"
        >
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
          />
        </svg>
      </a>

    <!-- Linkedin -->
      <a href="https://www.linkedin.com/in/mathew-lapias-519213265/">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewBox="0 0 24 24"
        >
          <path
            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"
          />
        </svg>
      </a>

      <!-- X -->
      <a href="#">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewBox="0 0 24 24"
        >
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
          />
        </svg>
      </a>

      <!-- GitHub -->
      <a href="https://github.com/MathewLapias">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewBox="0 0 24 24"
        >
          <path
            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
          />
        </svg>
      </a>
    </div>
    <p>
      &#169; 2024 - Created by Mathew
    </p>
  </footer>
  <!-- End Footer -->

  <script src="js/main.js"></script>
</body>
</html>