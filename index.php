<?php 
  if (isset($_POST['btnKirimPesan'])) 
  {
    $to = "andrifirmansaputra1@gmail.com";
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    mail($to, $nama, $email.'-'.$pesan);
    echo "
    <script>
      alert('Terima Kasih atas tanggapan Anda!');
    </script>
    ";
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SandZen | Busana Premium</title>
  <meta content="SandZen" name="description">
  <meta content="SandZen" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a target="_blank" href="mailto:andrifirmansaputra1@gmail.com">andrifirmansaputra1@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="http://wa.me/6287808675313" target="_blank" target="_blank">+62 878 0867 5313</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/HausCoding" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/hako975/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/andri_firman_975" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php"><img width="175" class="rounded" src="assets/img/navbar-logo.png" alt="SandZen"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Produk</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div id="hero" class="container-fluid"></div>

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Produk</h2>
          <h3>Produk Baru di bulan Januari</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-kaos">Kaos</li>
              <li data-filter=".filter-sandal">Sandal</li>
              <li data-filter=".filter-sepatu">Sepatu</li>
              <li data-filter=".filter-dompet">Dompet</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-kaos">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="Kaos Polos">
            <div class="portfolio-info">
              <h4>Kaos Polos</h4>
              <p>Rp. 45.000,-</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" data-title="Kaos Polos" data-description="Rp. 45.000,-<br><br><a class='btn btn-primary' target='_blank' href='https://www.facebook.com/marketplace/item/296878875799647/'><i class='bi bi-cart4'></i> Beli</a>"><i class="bx bx-search"></i></a>
              <a target="_blank" href="https://www.facebook.com/marketplace/item/296878875799647/" class="details-link" title="Kunjungi"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-kaos">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="Kaos Seventeen">
            <div class="portfolio-info">
              <h4>Kaos Seventeen</h4>
              <p>Rp. 35.000,-</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" data-title="Kaos Seventeen" data-description="Rp. 35.000,- <br><br><a class='btn btn-primary' target='_blank' href='https://www.facebook.com/marketplace/item/618243246067769/'><i class='bi bi-cart4'></i> Beli</a>"><i class="bx bx-search"></i></a>
              <a target="_blank" href="https://www.facebook.com/marketplace/item/618243246067769/" class="details-link" title="Kunjungi"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-sandal">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="Slop Kicker">
            <div class="portfolio-info">
              <h4>Slop Kicker</h4>
              <p>Rp. 25.000,-</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" data-title="Slop Kicker" data-description="Rp. 25.000,- <br><br><a class='btn btn-primary' target='_blank' href='https://www.facebook.com/marketplace/item/519711819578632/'><i class='bi bi-cart4'></i> Beli</a>"><i class="bx bx-search"></i></a>
              <a target="_blank" href="https://www.facebook.com/marketplace/item/519711819578632/" class="details-link" title="Kunjungi"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-sandal">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="Joemen Sandal Pria Kulit">
            <div class="portfolio-info">
              <h4>Joemen Sandal Pria Kulit</h4>
              <p>Rp. 42.750,-</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" data-title="Joemen Sandal Pria Kulit" data-description="Rp. 42.750,- <br><br><a class='btn btn-primary' target='_blank' href='https://www.facebook.com/marketplace/item/4475802169209070/'><i class='bi bi-cart4'></i> Beli</a>"><i class="bx bx-search"></i></a>
              <a target="_blank" href="https://www.facebook.com/marketplace/item/4475802169209070/" class="details-link" title="Kunjungi"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-sepatu">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="Sepatu Badminton">
            <div class="portfolio-info">
              <h4>Sepatu Badminton</h4>
              <p>Rp. 71.250,-</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" data-title="Sepatu Badminton" data-description="Rp. 71.250,- <br><br><a class='btn btn-primary' target='_blank' href='https://www.facebook.com/marketplace/item/335990454905392/'><i class='bi bi-cart4'></i> Beli</a>"><i class="bx bx-search"></i></a>
              <a target="_blank" href="https://www.facebook.com/marketplace/item/335990454905392/" class="details-link" title="Kunjungi"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-dompet">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="Bostanten Dompet Pria Kulit">
            <div class="portfolio-info">
              <h4>Bostanten Dompet Pria Kulit</h4>
              <p>Rp. 65.000,-</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" data-title="Bostanten Dompet Pria Kulit" data-description="Rp. 65.000,- <br><br><a class='btn btn-primary' target='_blank' href='https://www.facebook.com/marketplace/item/904972293554283/'><i class='bi bi-cart4'></i> Beli</a>"><i class="bx bx-search"></i></a>
              <a target="_blank" href="https://www.facebook.com/marketplace/item/904972293554283/" class="details-link" title="Kunjungi"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 text-center">
            <img class="rounded img-fluid" src="assets/img/gratis-ongkir.png" alt="gratis ongkir">
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Influencer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Dompet yang sangat cocok untuk pria seperti saya, terlihat Profesional!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya suka kaosnya! Sangat nyaman dan memiliki lapisan lembut yang membuat Anda tetap hangat
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sepatu Badminton yang saya beli, hasilnya memuaskan sangat pas dan nyaman. Terima Kasih!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sandal Slop yang Bagus! Cocok untuk berjalan jauh
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>pertanyaan yang sering diajukan.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apakah saya dapat menukar produk saya? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Semua produk yang telah dibeli tidak bisa ditukar.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Apakah seluruh produk tersedia? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Ya, seluruh produk tersedia dan siap dikirim.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Bagaimana jika barang yang dikirim rusak? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Anda dapat meminta pengembalian barang/dana untuk barang yang rusak. Hubungi E-mail atau WhatsApp kami.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Kapan pesanan saya akan dikirim? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Kami akan mengirimkan pesananmu secepatnya. Pesanan yang masuk hingga pukul 12:00 WIB akan dikirimkan pada hari yang sama, tetapi pesanan yang masuk setelah jam tersebut akan dikirimkan keesokan harinya.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Kontak Kami</span></h3>
          <p>Kami dengan senang hati melayani tanggapan Anda, baik saran ataupun kritik.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p>Jl. AMD Babakan Pocis No. 100. RT04/02, Bakti Jaya, Setu, Tangerang Selatan, Banten. Kode Pos 15315.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Kami</h3>
              <p>andrifirmansaputra1@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bi-whatsapp"></i>
              <h3>WhatsApp Kami</h3>
              <p>+62 878 0867 5313</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3184040241!2d106.69976491431157!3d-6.352809863917948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5984644c4c7%3A0x0!2zNsKwMjEnMTAuMSJTIDEwNsKwNDInMDcuMCJF!5e0!3m2!1sid!2sid!4v1642966730200!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form method="post">
              <h3>Kirim Saran Anda</h3>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Isi Pesan</label>
                <textarea class="form-control" name="pesan" id="pesan" rows="3" placeholder="Masukkan Isi Pesan"></textarea>
              </div>
              <div class="mb-3">
                <button type="submit" name="btnKirimPesan" class="btn btn-danger">Kirim Pesan!</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Gabung Buletin Kami</h4>
            <p>Kami akan mengirim info produk terbaru setiap bulannya ke email Anda.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Langganan">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SandZen</h3>
            <p>
              Jl. AMD Babakan Pocis No. 100. RT04/02, Bakti Jaya, Setu, Tangerang Selatan, Banten. Kode Pos 15315.
              <strong>Phone:</strong> +62 878 0867 5313<br>
              <strong>Email:</strong> andrifirmansaputra1@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Produk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 offset-lg-3 col-md-6 footer-links">
            <h4>Jejaring Sosial</h4>
            <p>Follow Jejaring Sosial kami untuk menerima info terbaru setiap harinya.</p>
            <div class="social-links mt-3">
              <a target="_blank" href="https://twitter.com/HausCoding" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a target="_blank" href="https://www.facebook.com/hako975/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a target="_blank" href="https://www.instagram.com/andri_firman_975" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a target="_blank" href="https://wa.me/6287808675313" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>SandZen</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>