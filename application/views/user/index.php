<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Noted Web App</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Noted, the web based note app" />

    <!-- Fontawesome -->
    <link
      type="text/css"
      href="<?=base_url();?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url();?>assets/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>assets/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url();?>assets/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=base_url();?>assets/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Notyf -->
    <link
      type="text/css"
      href="<?=base_url();?>assets/vendor/notyf/notyf.min.css"
      rel="stylesheet"
    />

    <!-- Volt CSS -->
    <link type="text/css" href="<?=base_url();?>assets/css/volt.css" rel="stylesheet" />
  </head>

  <body>
    <header class="header-global">
        
      <nav
        id="navbar-main"
        aria-label="Primary navigation"
        class="navbar navbar-main navbar-expand-lg navbar-theme-primary pt-4 navbar-dark"
      >
        <div class="container position-relative">
          <div class="navbar-collapse collapse mr-auto" id="navbar_global">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="<?=base_url();?>assets/index.html">
                    <img src="<?=base_url();?>assets/assets/img/brand/note.svg" alt="Logo" />
                  </a>
                </div>
                <!--Burger menu-->
                <div class="col-6 collapse-close">
                  <a
                    href="#navbar_global"
                    class="fas fa-times"
                    data-toggle="collapse"
                    data-target="#navbar_global"
                    aria-controls="navbar_global"
                    aria-expanded="false"
                    title="Close"
                    aria-label="Toggle navigation"
                  ></a>
                </div>
                <!--end burger menu-->
              </div>
            </div>
          </div>
          <!--item di pojokan kanan atas-->
          <div class="d-flex align-items-center ml-auto">
            <!--tombol login di pojokan kanan atas-->
            <a
              href="<?php echo base_url('Note/login'); ?>"
              class="btn btn-secondary text-dark mr-md-3"
              >
              <!--Tombol login + iconnya-->
              <span class="fas fa-sign-in-alt mr-2"></span> Login</a
            >
            <!--tombol burger pas screenya kecil-->
            <button
              class="navbar-toggler ml-2"
              type="button"
              data-toggle="collapse"
              data-target="#navbar_global"
              aria-controls="navbar_global"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <!--icon garis 3 tombol di kanan atas-->
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          
        </div>
      </nav>
      
    </header>

    <main>
        
      <div
        class="preloader bg-soft flex-column justify-content-center align-items-center"
      >
        <img
          class="loader-element animate__animated animate__jackInTheBox"
          src="<?=base_url();?>assets/assets/img/brand/note.svg"
          height="60"
          alt="Volt logo"
        />
      </div>
      

      <!-- Hero -->
      <section class="section-header pb-9 pb-lg-5 bg-primary text-white">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <img
                class="navbar-brand-dark mb-4"
                src="<?=base_url();?>assets/assets/img/brand/note.svg"
                height="120"
                alt="Logo light"
              />
              <h1 class="display-1">Noted™</h1>
              <div class="mb-5">
                <h2 class="h3 text-muted mr-3">Best Web Based Note App</h2>
              </div>
              <!-- Button Modal -->
              <div
                class="d-flex justify-content-center align-items-end flex-wrap mb-6"
              >
                <a
                  href="<?php echo base_url('Note/register'); ?>"
                  class="btn btn-secondary text-dark mr-4 mb-3 mb-lg-0"
                  ><span
                    class="fas fa-rocket mr-2 d-none d-sm-inline"
                  ></span>
                  Create Account. Its Free!</a
                >
                
              </div>
              <div class="d-flex justify-content-center flex-column mb-6">
                <a target="_blank">
                  <img
                    src="<?=base_url();?>assets/assets/img/poros.svg"
                    class="d-block mx-auto mb-3"
                    height="25"
                    width="25"
                    alt="Themesberg Logo"
                  />
                  <span class="text-muted font-small"
                    >POROS 2020</span
                  >
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <br/>
      <br/>

      <!--Section di bagian putih-->
      <section class="section section-sm pt-0">
        <div class="container">

            <!--Simple Description-->
          <div class="row justify-content-center mb-5 mb-lg-6">
            <div class="col-12 text-center">
              <h2 class="h1 px-lg-5">Noted, best note app for student</h2>
              <p class="lead px-lg-10">
                It is simple, and very easy to use. That even "you" can do it
              </p>
            </div>
          </div>
          <!---->

          <!--Deskripsi 2-->
          <div class="row justify-content-center">
            <div class="col-6 col-md-3 text-center mb-4">
              <div
                class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4"
              >
                <span class="fas fa-money-bill-wave"></span>
              </div>
              <h3 class="font-weight-bolder">Free!</h3>
              <p class="text-gray">We'll do anything for free stuff!</p>
            </div>
            <div class="col-6 col-md-3 text-center mb-4">
              <div
                class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-4"
              >
                <span class="fas fa-save"></span>
              </div>
              <h3 class="font-weight-bolder">Aman</h3>
              <p class="text-gray">It means You can't forgot your password!</p>
            </div>
          </div>
          <!--End description-->
        </div>
      </section>
    </main>

    <footer class="footer py-6 bg-primary text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img
              class="navbar-brand-dark mb-4"
              height="35"
              src="<?=base_url();?>assets/assets/img/brand/note.svg"
              alt="Logo light"
            />
            <p>
              Noted adalah website yang dibuat untuk keperluan seleksi tahap kedua POROS.
            </p>
            <ul class="social-buttons mb-5 mb-lg-0">
              <li>
                <a
                  href="https://github.com/tridims"
                  aria-label="github social link"
                  class="icon-white mr-2"
                >
                  <span class="fab fa-github"></span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="icon-white"
                  aria-label="dribbble social link"
                >
                  <span class="fab fa-dribbble"></span>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-md-2 mb-5 mb-lg-0">
            <span class="h5">POROS</span>
            <ul class="links-vertical mt-2">
              <li>
                <a target="_blank" href="#">Website</a>
              </li>
              <li>
                <a target="_blank" href="#"
                  >About Us</a
                >
              </li>
              <li>
                <a target="_blank" href="#"
                  >Contact Us</a
                >
              </li>
            </ul>
          </div>
          <div class="col-6 col-md-2 mb-5 mb-lg-0">
            <span class="h5">Other</span>
            <ul class="links-vertical mt-2">
              <li>
                <a
                  href="#"
                  target="_blank"
                  >Docs
                  <span class="badge badge-sm bg-secondary text-dark ml-2"
                    >v1.0</span
                  ></a
                >
              </li>
              <li>
                <a
                  href="#"
                  target="_blank"
                  >Changelog</a
                >
              </li>
              <li>
                <a target="_blank" href="#"
                  >License</a
                >
              </li>
              <li>
                <a
                  target="_blank"
                  href="#"
                  >Support</a
                >
              </li>
            </ul>
          </div>
          
          <div class="col-12 col-md-4 mb-5 mb-lg-0">
            <span class="h5 mb-3 d-block">Feedback</span>
            <?php if ($this->session->flashdata('pesan')!=null): ?>
			        <div class="alert" style="background:#F8BD7A;color:white;"><?= $this->session->flashdata('pesan');?></div>
			      <?php endif?>
            <form action="<?=base_url();?>Note/addPengajuan" method="post">

                <div class="form-row mb-2">
                    <div class="mb-4">
                      <label for="feedbackName">Your Name</label>
                      <input type="text" class="form-control" placeholder="your name" id="nama" name="nama" required>              
                    </div>

                    <div class="col-12">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email" id="email" aria-label="Subscribe form" required>
                    </div>

                    <div class="my-4">
                      <label for="textarea">Your Feedback</label>
                      <textarea class="form-control" placeholder="Enter your feedback" id="saran" name="saran" rows="4"></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-secondary text-dark shadow-soft btn-block" data-loading-text="Sending">
                            <span>Submit</span>
                        </button>
                    </div>
                </div>
            </form>
            <p class="text-muted font-small m-0">We’ll never share your details. See our <a class="text-white" href="#">Privacy Policy</a></p>
          </div>

        </div>
        <hr class="bg-gray my-5" />
        <div class="row">
          <div class="col mb-md-0">
            <a class="d-flex justify-content-center">
              <img
                src="<?=base_url();?>assets/assets/img/brand/note.svg"
                height="25"
                class="mb-3"
                alt="Themesberg Logo"
              />
            </a>
            <div
              class="d-flex text-center justify-content-center align-items-center"
              role="contentinfo"
            >
              <p class="font-weight-normal font-small mb-0">
                Kelompok 3 Seleksi Masuk POROS <span class="current-year"
                  >2021</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Core -->
    <script src="<?=base_url();?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?=base_url();?>assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="<?=base_url();?>assets/vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Jarallax -->
    <script src="<?=base_url();?>assets/vendor/jarallax/dist/jarallax.min.js"></script>

    <!-- Smooth scroll -->
    <script src="<?=base_url();?>assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Count up -->
    <script src="<?=base_url();?>assets/vendor/countup.js/dist/countUp.umd.js"></script>

    <!-- Notyf -->
    <script src="<?=base_url();?>assets/vendor/notyf/notyf.min.js"></script>

    <!-- Charts -->
    <script src="<?=base_url();?>assets/vendor/chartist/dist/chartist.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="<?=base_url();?>assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Simplebar -->
    <script src="<?=base_url();?>assets/vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="<?=base_url();?>assets/assets/js/volt.js"></script>
  </body>
</html>
