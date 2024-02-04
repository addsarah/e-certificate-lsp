<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bello Weboo -Bello Group</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("/frontend/assets/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("/frontend/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("/frontend/assets/vendor/aos/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <link href="{{ asset("/frontend/assets/vendor/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("/frontend/assets/css/style.css") }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="{{ url("index.html") }}" class="logo "><img src="frontend/assets/img/logo.png" alt=""></a>
      <h1 class="logo me-auto"><a href="{{ url("index.html") }}">Bello<span>Weboo</span></a></h1>
   
    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url("#hero") }}">Home</a></li>
          <li><a class="nav-link scrollto " href="{{ url("#about") }}">About Us</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#service") }}">Service</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#product") }}">Produk</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#testimonials") }}">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#team") }}">Team</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#contact") }}">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ route("login") }}">Login</a></li>
          <li><a class="get-started-btn" href="{{ route("register") }}" >Register</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Pengalaman berbelanja perwibuan dengan Bello Weboo</h1>
          <h2>Kami adalah toko pernak pernik anime serta toko perawatan kostum anime terbaik di Indonesia</h2>
          <a href="{{ url("about") }}" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset("/frontend/assets/img/clients/client-1.png") }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset("/frontend/assets/img/clients/client-2.png") }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset("/frontend/assets/img/clients/client-3.png") }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset("/frontend/assets/img/clients/client-4.png") }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset("/frontend/assets/img/clients/client-5.png") }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset("/frontend/assets/img/clients/client-6.png") }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset("/frontend/assets/img/clients/client-7.png") }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset("/frontend/assets/img/clients/client-8.png") }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Bello Weboo - Bello Group</h3>
              <p>
Bello Weboo adalah salah satu anak perusahaan dari Bello Group yang telah berdiri sejak tahun 2023
              </p>
              <a href="{{ url("") }}" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Transaksi Aman</h4>
                  <p>Transkasi anda di web ini akan sangat aman karena dan terjamin kerahasiaan</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Pengiriman Cepat</h4>
                  <p>Barang anda akan sampai ketujuan kurang dari 14 hari</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4> Sesuai Gambar</h4>
                  <p>Semua produk yang dijual sesuai dengan gambar yang ada</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Akun Terlindungi </h4>
                  <p>Akun anda akan terhindar dari scam yang bertebaran di internet</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Tabs Section ======= -->
   <!-- End Tabs Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Kami memiliki beberapa layanan yaitu sebagai berikut</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-briefcase"></i>
              <h4><a href="{{ url("") }}">Reparasi</a></h4>
              <p>Kami memiliki layanan reparasi kostum yang ditangani oleh ahli nya sehingga dapat meemperbaiki kostum hingga terlihat seperti baru dan juga dijamin kualitas nya</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="{{ url("") }}">Rental</a></h4>
              <p>Disini kami menyediakan layanan penyewaan kostum anime yang bervariasi dan unik</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="{{ url("") }}">Info Event</a></h4>
              <p>website ini juga menyediakan info event jejepangan baik cosplay maupun konser yang ada di sekitar daerah jabodetabek serta menjual tiket masuk untuk event dan konser tersebut</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-binoculars"></i>
              <h4><a href="{{ url("") }}">Cosplay Shop</a></h4>
              <p>Selain menyewakan dan memperbaiki kostum website ini juga menjual segala kebutuhan cosplay seperti kostum dan aksesoris nya</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="{{ url("") }}">Wibu Shop</a></h4>
              <p>Kami juga menjual pernak pernik anime seperti gantungan kunci, boneka dan lainnya dari berbagai anime yang ada serta buku komik yang cukup lengkap</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="{{ url("") }}">Update Anime</a></h4>
              <p>Kami memberikan informasi terbaik dan terupdate terkait anime</p>
            </div>
          </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="product" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Produk</h2>
          <p>Dibawah ini adalah beberapa contoh portfolio dari pesanan reparasi kostum yang telah kami selesaikan dan produk yang kami jual</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Reparasi</li>
              <li data-filter=".filter-card">Rental</li>
              <li data-filter=".filter-web">Jual</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reparasi 1</h4>
                <p>Reparasi</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-2.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Jual 3</h4>
                <p>Jual</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-2.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-3.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reparasi 2</h4>
                <p>Reparasi</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-3.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-4.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rental 2</h4>
                <p>Rental</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-4.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-5.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Jual 2</h4>
                <p>Jual</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-5.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-6.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reparasi 3</h4>
                <p>Reparasi</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-6.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-7.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rental 1</h4>
                <p>Rental</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-7.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-8.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rental 3</h4>
                <p>Rental</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-8.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset("/frontend/assets/img/portfolio/portfolio-9.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Jual 3</h4>
                <p>Jual</p>
                <div class="portfolio-links">
                  <a href="{{ url("assets/img/portfolio/portfolio-9.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ url("portfolio-details.html") }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
<p>Ini adalah kumpulan testimoni dari pelanggan</p>       
 </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset("/frontend/assets/img/testimonials/testimonials-1.jpg") }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Pelanggan</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Sangat rekomen buat beli kebutuhan cosplay disini karena sangat lengkap dan juga sanga bagus kualitasnya
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset("/frontend/assets/img/testimonials/testimonials-2.jpg") }}" class="testimonial-img" alt="">
                  <h3>James Wilsson</h3>
                  <h4>Pelanggan</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Saya selalu membeli merchandise anime disini akrena produk nya original 
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset("/frontend/assets/img/testimonials/testimonials-3.jpg") }}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Pelanggan</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Saya sangat suka menyewa kostum di web ini karena fast respone juga menyediakan kostum yang lengkap
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset("/frontend/assets/img/testimonials/testimonials-4.jpg") }}" class="testimonial-img" alt="">
                  <h3>Nana Nuna</h3>
                  <h4>Pelanggan</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Saya sangat senang karena barang yang saya beli sampa dengan aman dan kualiatas nya sangat bagus
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset("/frontend/assets/img/testimonials/testimonials-5.jpg") }}" class="testimonial-img" alt="">
                  <h3>Lara Larson</h3>
                  <h4>Pelanggan</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Saya sangat puas dengan pelayanan toko ini dikarenakan hasil reparasi kostum yang sangat bagus dan juga customer servicenya yang ramah
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
<p>Website ini dibuat oleh seorang programmer yang memiliki spesialisasi di bidang web e-commerce</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset("/frontend/assets/img/team/team-1.jpg") }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="{{ url("") }}"><i class="bi bi-twitter"></i></a>
                  <a href="{{ url("") }}"><i class="bi bi-facebook"></i></a>
                  <a href="{{ url("") }}"><i class="bi bi-instagram"></i></a>
                  <a href="{{ url("") }}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Muhammad Reza</h4>
                <span>Creator</span>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Hubungi kami lewat contact dibawah ini kami sangat mengharapkan segala kritik dan saran yang membangun untuk kemajuan perusahaan kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>West Jatinegara Street, East  Jakarta, 13320</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>Belloweboo@bg.co.id<br>muhammadreza2311@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>(021) 0987 6543<br>(+62)87837865018</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Bello<span>Weboo</span></h3>
            <p>
              West Jatinegara Street <br>
              East Jakarta, Dki Jakarta<br>
              Indonesian <br><br>
              <strong>Phone:</strong> (021) 0987 6543<br>
              <strong>Email:</strong> Belloweboo@bg.co.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Reparasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Rental</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Info Event</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Cosplay Shop</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Weboo Shop</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Porduct</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Costume Anime</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Comics</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Merchandise Anime</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url("") }}">Action Figure</a></li>
            </ul>
          </div>

          {{--  <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>  --}}

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Bello Group</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">Muhammad Reza</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="{{ url("") }}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{ url("") }}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ url("") }}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{ url("") }}" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="{{ url("") }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="{{ url("") }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("/frontend/assets/vendor/purecounter/purecounter_vanilla.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("/frontend/assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("/frontend/assets/js/main.js") }}"></script>

</body>

</html>