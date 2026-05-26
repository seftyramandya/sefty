<?php
session_start();
include 'koneksi.php';

// KODE PELINDUNG: Jika belum login, paksa user balik ke halaman login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// KODE AMBIL DATA: Mengambil data diri user yang sedang login dari database
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Website Wanara</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>



  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                        <img src="assets/images/wanara logo.jpeg" alt="Logo Wanara">
                         <span>WANARA</span>
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#apply">Visi&Misi</a></li>
                          </li>
                          <li class="scroll-to-section"><a href="#gallery">Our Gallery</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <img src="assets/images/background-1.jpeg" id="bg-video">

      
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Welcome to Basket</h2>
              <p>Basket adalah olahraga tim yang dimainkan oleh dua tim yang masing-masing beranggotakan lima orang. Nah eskul basket wanara ini didirikan sejak tahun 2020, tujuannya untuk memupuk tali persaudaraan, menjalin silaturahmi, meningkatkan skill individual skill masing masing dll.</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
            <!-- PEMBINA -->
             <div class="foto-logo">
            <img src="assets/images/pembina 1.jpeg" alt="Pembina Basket">
            </div>
              <div class="down-content">
                <h4>Pembina Basket</h4>
                <p>Nendy Rustandi</p>
              </div>
            </div>
            
            <div class="item">
            <!-- PELATIH -->
            <div class="foto-logo">
              <img src="assets/images/pelatih.jpeg" alt="Pelatih Basket">
              </div>
              <div class="down-content">
                <h4>Pelatih Basket</h4>
                <p>Yan Sofyan</p>
              </div>
            </div>
            
            <div class="item">
              <!-- KETUA -->
             <div class="foto-logo">
              <img src="assets/images/ketua.jpeg" alt="Ketua Basket">
              </div>
              <div class="down-content">
                <h4>Ketua Basket</h4>
                <p>Fredy Irfansyah</p>
              </div>
            </div>
            
            <div class="item">
              <!-- SEKRETARIS -->
             <div class="foto-logo">
              <img src="assets/images/SEKRETARIS.jpeg" alt="Sekretaris Basket">
              </div>
              <div class="down-content">
                <h4>Sekretaris Basket</h4>
                <p>Lavliya Zahra Asthasyah</p>
              </div>
            </div>
            
            <div class="item">
              <!-- BENDAHARA -->
             <div class="foto-logo">
              <img src="assets/images/BENDAHARA.jpeg" alt="Bendahara Basket">
              </div>
              <div class="down-content">
                <h4>Bendahara Basket</h4>
                <p>Wafa Regina Salsabila</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  col-md-6 col-sm-12">
              <div class="item">
                <h3>VISI</h3>
                <ol>
                <li>1. Menjadikan Ekskul Basket sebagai wadah bagi setiap murid SMKN 2 Baleendah untuk menyalurkan dan mengembangkan minat, bakat, dan prestasi pada cabang olahraga basket</li>                                                                                                                            
                <li>2. Menjadikan semua anggota dan pemain basket SMKN 2 Baleendah memiliki kepribadian yang baik, sportif, dan unggul.</li>
                </ol>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="item">
                <h3>MISI</h3>
                <ol>
                <li>1. Menyelenggarakan program latihan berkualitas yang terstruktur dan berkesinambungan.</li>
                <li>2. Membentuk tim yang solid, kompetitif, dan menjunjung tinggi sportivitas.</li>
                <li>3. Mengembangkan keterampilan individu dan kerja sama tim.</li>
                <li>4. Membina karakter pemain dengan menanamkan nilai-nilai seperti disiplin, tanggung jawab, dan kerjasama.</li>
                <li>5. Menciptakan suasana kekeluargaan dan kebersamaan di dalam tim.</li>
                <li>6. Memberikan peluang bagi setiap anggota tim untuk berkembang secara pribadi, baik dalam hal kepemimpinan, etika kerja, atau keterampilan komunikasi.</li>
                </ol>
                  <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section id="achievements" class="gallery-wanara">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
      <h2>Wanara's Achievements</h2>
    </div>
    </div>
    </div>
      <div class="row justify-content-center">
        <div class="col-md-4 text-center">
          <img src="assets/images/foto juara 2.jpeg" class="img-fluid foto-wanara">
          <p class="text-gallery">Juara 1 Putra O2SN 2020</p>
        </div>
  
        <div class="col-md-4 text-center">
          <img src="assets/images/foto juara 1.jpeg" class="img-fluid foto-wanara">
          <p class="text-gallery">Juara 3 Putra O2SN 2024</p>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="our-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Gallery</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/images/FOTO-1.png" alt="Course One">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-2.jpeg" alt="Course Two">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-3.jpeg" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-4.png" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-5.jpeg" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-6.jpeg" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-7.jpeg" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/background-1.png" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-1.png" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-2.jpeg" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-3.jpeg" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/FOTO-4.png" alt="">
              <div class="down-content">
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>Our Programs</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-title">Fundamental Drill</div>
                    <div class="count-title">Latihan Dasar</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-title">Dribling</div>
                    <div class="count-title">Menggiring Bola</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-title">Phyical Exercise</div>
                    <div class="count-title">Latihan Fisik</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-title">Extramular Compepetion</div>
                    <div class="count-title">Pertandingan Luar Sekolah</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Join Us</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>+62 831-6857-1386</span>
              </li>
              <li>
                <h6>Email</h6>
                <span> officialbasketbe<br>@gmail.com</span>
              </li>
              <li>
                <h6>School Address</h6>
                <span>Jl. R.A.A Wiranata Kusumah No.11<br>Baleendah Kec. Baleendah<br>Kab. Bandung Jawa Barat 40375</span>
              </li>
              <li>
                <h6>Website</h6>
                <div class="social"></div>
                <span>@officialbasket2be</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2025 WANARA. 
          <br>
          Design: <a>Sefty Ramandya Azzuhra</a>
          <br>
          Template By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
        </p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>