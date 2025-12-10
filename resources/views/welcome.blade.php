<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SiPemuda</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  

  <!-- Favicons -->
  <link href="assetss/img/favicon.png" rel="icon">
  <link href="assetss/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetss/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetss/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetss/vendor/aos/aos.css" rel="stylesheet">
  <link href="assetss/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assetss/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">SiPemuda</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="/kegiatan">Kegiatan</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Ayo Mulai</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">

          <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="200">
            <div class="hero-content text-center">
              <h1 class="hero-title" data-aos="fade-up" data-aos-delay="400">Selamat Datang di Portal Kegiatan Kami!</h1>
              <p class="hero-description" data-aos="fade-up" data-aos-delay="500">"Yuk, temukan kegiatan bermanfaat yang sudah kami siapkan khusus untukmu. Tinggal pilih, daftar, dan ikuti keseruannya!"</p>

              <div class="hero-actions" data-aos="fade-up" data-aos-delay="600">
                <a href="#about" class="btn-primary">Kunjungi</a>
              </div>

              <div class="hero-metrics" data-aos="fade-up" data-aos-delay="700">
                {{-- <div class="metric-item">
                  <div class="metric-icon">
                    <i class="bi bi-trophy"></i>
                  </div>
                  <div class="metric-content">
                    <span class="metric-number">85+</span>
                    <span class="metric-label">Awards Won</span>
                  </div>
                </div>
                <div class="metric-item">
                  <div class="metric-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="metric-content">
                    <span class="metric-number">500+</span>
                    <span class="metric-label">Happy Clients</span>
                  </div>
                </div>
                <div class="metric-item">
                  <div class="metric-icon">
                    <i class="bi bi-globe"></i>
                  </div>
                  <div class="metric-content">
                    <span class="metric-number">25+</span>
                    <span class="metric-label">Countries</span>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-5">

          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="image-section">
              <div class="primary-image">
                <img src="assetss/img/about/about-14.webp" alt="Corporate office environment" class="img-fluid">
          
              </div>
              <div class="image-grid">
                <img src="assetss/img/about/about-3.webp" alt="Professional workspace" class="img-fluid grid-img">
                <img src="assetss/img/about/about-7.webp" alt="Team collaboration" class="img-fluid grid-img">
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="content-section">
              <div class="section-intro">
                <h2>Kami percaya bahwa setiap orang berhak mendapatkan kesempatan untuk belajar, berkembang, dan berjejaring.</h2>
                <p class="intro-text">Melalui platform ini, kamu bisa dengan mudah menemukan berbagai kegiatan menarik dan langsung mendaftar secara online. Tidak perlu repot — cukup pilih kegiatan, isi data, dan kamu siap bergabung!</p>
              </div>

              <div class="achievement-list">
                <div class="achievement-item">
                
                </div>
                <div class="achievement-item">
                  
              </div>

              
            </div>
          </div>

        </div>

        {{-- <div class="metrics-section" data-aos="fade-up" data-aos-delay="400">
          <div class="row text-center">
            <div class="col-lg-3 col-md-6">
              <div class="metric-card">
                <div class="metric-value">480+</div>
                <div class="metric-label">Successful Projects</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="metric-card">
                <div class="metric-value">99.8%</div>
                <div class="metric-label">Customer Satisfaction</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="metric-card">
                <div class="metric-value">65+</div>
                <div class="metric-label">Team Members</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="metric-card">
                <div class="metric-value">24/7</div>
                <div class="metric-label">Customer Support</div>
              </div>
            </div>
          </div>
        </div> --}}

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kegiatan</h2>
        <p>Temukan berbagai program dan kegiatan inspiratif yang dirancang untuk membentuk generasi muda Surabaya yang tangguh, kreatif, dan berdaya saing.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="services-grid">
          <div class="row g-4">

            

            <div class="flex-gap-6">
              <div class="row g-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <div class="service-card">
                    <div class="service-icon">
                      <i class="bi bi-shield-check"></i>
                    </div>
                    <h4>Kewirausahaan</h4>
                    <h6>“Membangun Jiwa Usaha, Meraih Kesuksesan.”</h6>
                    <p>Ikuti pelatihan dan seminar kewirausahaan yang akan membuka wawasanmu tentang dunia bisnis. Peserta akan belajar mulai dari pengelolaan usaha, pemasaran digital, hingga strategi pengembangan bisnis kreatif.</p>
                    <a href="/kegiatan" class="service-link">
                      <span>Cek Selengkapnya</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                  <div class="service-card">
                    <div class="service-icon">
                      <i class="bi bi-graph-up"></i>
                    </div>
                    <h4>Kaderisasi</h4>
                    <h6>“Mencetak Generasi Penerus yang Berkarakter.”</h6>
                    <p>Program kaderisasi ini bertujuan untuk membentuk generasi muda yang memiliki jiwa kepemimpinan, tanggung jawab, serta semangat pengabdian kepada masyarakat.</p>
                    <a href="/kegiatan" class="service-link">
                      <span>Cek Selengkapnya</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="service-card">
                    <div class="service-icon">
                      <i class="bi bi-people"></i>
                    </div>
                    <h4>Pemuda Pelopor</h4>
                    <h6>“Menginspirasi, Menggerakkan, dan Memberdayakan.” </h6>
                    <p>Kegiatan ini mendorong pemuda untuk menjadi pelopor perubahan di lingkungannya. Peserta akan diajak untuk mengembangkan ide-ide inovatif dan program sosial yang berdampak langsung bagi masyarakat.</p>
                    <a href="/kegiatan" class="service-link">
                      <span>Cek Selengkapnya</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="350">
                  <div class="service-card">
                    <div class="service-icon">
                      <i class="bi bi-cloud-arrow-up"></i>
                    </div>
                    <h4>Kepemimpinan</h4>
                    <h6>“Melahirkan Pemimpin Visioner dan Berintegritas.”</h6>
                    <p>Program ini memberikan pembekalan tentang keterampilan memimpin, komunikasi efektif, serta pengambilan keputusan. Peserta akan mendapatkan pengalaman simulasi kepemimpinan dalam berbagai situasi.</p>
                    <a href="/kegiatan" class="service-link">
                      <span>Cek Selengkapnya</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        

          {{-- <div class="tab-content" id="services-tabs-content">

            <div class="tab-pane fade show active" id="services-development" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-laptop"></i>
                    </div>
                    <h5>Web Development</h5>
                    <p>Modern, responsive websites built with cutting-edge technologies for optimal performance.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-phone"></i>
                    </div>
                    <h5>Mobile Apps</h5>
                    <p>Native and cross-platform mobile applications that deliver exceptional user experiences.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-server"></i>
                    </div>
                    <h5>API Development</h5>
                    <p>Robust and scalable APIs that power your applications and enable seamless integrations.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="services-marketing" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-megaphone"></i>
                    </div>
                    <h5>Digital Campaigns</h5>
                    <p>Strategic digital marketing campaigns that reach your target audience effectively.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-search"></i>
                    </div>
                    <h5>SEO Optimization</h5>
                    <p>Comprehensive SEO strategies to improve your search engine rankings and visibility.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-share"></i>
                    </div>
                    <h5>Social Media</h5>
                    <p>Engaging social media strategies that build brand awareness and drive customer engagement.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="services-support" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-headset"></i>
                    </div>
                    <h5>24/7 Support</h5>
                    <p>Round-the-clock technical support to ensure your systems run smoothly at all times.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-tools"></i>
                    </div>
                    <h5>System Maintenance</h5>
                    <p>Regular maintenance and updates to keep your systems secure and performing optimally.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="tab-service-card">
                    <div class="service-icon">
                      <i class="bi bi-person-check"></i>
                    </div>
                    <h5>Training</h5>
                    <p>Comprehensive training programs to help your team master our tools and platforms.</p>
                    <a href="service-details.html" class="tab-service-link">View Details</a>
                  </div>
                </div>
              </div>
            </div> --}}

          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      {{-- <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">

          <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
            <div class="features-content">
              <h2>Voluptatum deleniti atque corrupti quos dolores</h2>
              <p class="lead">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="features-image">
              <img src="assetss/img/features/features-4.webp" alt="" class="img-fluid">
            </div>
          </div>

        </div>

        <div class="features-grid" data-aos="fade-up" data-aos-delay="400">

          <div class="feature-item" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-icon">
              <i class="bi bi-lightning-charge"></i>
            </div>
            <div class="feature-content">
              <h4>Expedita Voluptas</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            </div>
          </div><!-- End Feature Item -->

          <div class="feature-item" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-icon">
              <i class="bi bi-shield-check"></i>
            </div>
            <div class="feature-content">
              <h4>Nemo Quisquam</h4>
              <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>
            </div>
          </div><!-- End Feature Item -->

          <div class="feature-item" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-icon">
              <i class="bi bi-gem"></i>
            </div>
            <div class="feature-content">
              <h4>Beatae Vitae</h4>
              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit</p>
            </div>
          </div><!-- End Feature Item -->

          <div class="feature-item" data-aos="zoom-in" data-aos-delay="400">
            <div class="feature-icon">
              <i class="bi bi-rocket-takeoff"></i>
            </div>
            <div class="feature-content">
              <h4>Dicta Sunt</h4>
              <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
            </div>
          </div><!-- End Feature Item -->

        </div>

      </div> --}}

    {{-- </section><!-- /Features Section --> --}}

    {{-- <!-- Features 2 Section -->
    <section id="features-2" class="features-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="features-list row gy-4">
          <div class="col-md-6">
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-icon">
                <i class="bi bi-cpu"></i>
              </div>
              <div class="feature-content">
                <h4>AI-Powered Automation</h4>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <div class="feature-tags">
                  <span>Smart</span>
                  <span>Automated</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-icon">
                <i class="bi bi-cloud-check"></i>
              </div>
              <div class="feature-content">
                <h4>Cloud Integration</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus.</p>
                <div class="feature-tags">
                  <span>Scalable</span>
                  <span>Reliable</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-icon">
                <i class="bi bi-people"></i>
              </div>
              <div class="feature-content">
                <h4>Team Collaboration</h4>
                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                <div class="feature-tags">
                  <span>Collaborative</span>
                  <span>Efficient</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
              <div class="feature-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div class="feature-content">
                <h4>Advanced Analytics</h4>
                <p>Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                <div class="feature-tags">
                  <span>Insights</span>
                  <span>Data-driven</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="cta-section" data-aos="fade-up" data-aos-delay="500">
          <a href="#" class="btn-primary">Get Started Today</a>
          <a href="#" class="btn-secondary">View Demo</a>
        </div>
      </div>

    </section><!-- /Features 2 Section --> --}}

    

     

    {{-- <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <!-- Basic Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-card">
              <div class="plan-header">
                <div class="plan-icon">
                  <i class="bi bi-box"></i>
                </div>
                <h3>Starter</h3>
                <p>For individuals just getting started</p>
              </div>
              <div class="plan-pricing">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">12</span>
                  <span class="period">/month</span>
                </div>
              </div>
              <div class="plan-features">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Nullam accumsan lorem</li>
                  <li><i class="bi bi-check-circle-fill"></i> Vestibulum auctor dapibus</li>
                  <li><i class="bi bi-check-circle-fill"></i> Nulla consequat massa</li>
                  <li class="disabled"><i class="bi bi-x-circle-fill"></i> In enim justo rhoncus ut</li>
                  <li class="disabled"><i class="bi bi-x-circle-fill"></i> Curabitur ullamcorper ultricies</li>
                </ul>
              </div>
              <div class="plan-cta">
                <a href="#" class="btn-plan">Choose Plan</a>
              </div>
            </div>
          </div><!-- End Basic Plan -->

          <!-- Professional Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-card popular">
              <div class="popular-tag">Most Popular</div>
              <div class="plan-header">
                <div class="plan-icon">
                  <i class="bi bi-briefcase"></i>
                </div>
                <h3>Professional</h3>
                <p>For small teams and growing businesses</p>
              </div>
              <div class="plan-pricing">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">39</span>
                  <span class="period">/month</span>
                </div>
              </div>
              <div class="plan-features">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Donec quam felis ultricies</li>
                  <li><i class="bi bi-check-circle-fill"></i> Nam eget dui etiam rhoncus</li>
                  <li><i class="bi bi-check-circle-fill"></i> Maecenas tempus tellus</li>
                  <li><i class="bi bi-check-circle-fill"></i> Donec pede justo fringilla</li>
                  <li class="disabled"><i class="bi bi-x-circle-fill"></i> Cras dapibus vivamus</li>
                </ul>
              </div>
              <div class="plan-cta">
                <a href="#" class="btn-plan">Choose Plan</a>
              </div>
            </div>
          </div><!-- End Professional Plan -->

          <!-- Enterprise Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="pricing-card">
              <div class="plan-header">
                <div class="plan-icon">
                  <i class="bi bi-building"></i>
                </div>
                <h3>Enterprise</h3>
                <p>For large organizations and corporations</p>
              </div>
              <div class="plan-pricing">
                <div class="price">
                  <span class="currency">$</span>
                  <span class="amount">79</span>
                  <span class="period">/month</span>
                </div>
              </div>
              <div class="plan-features">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Etiam sit amet orci eget</li>
                  <li><i class="bi bi-check-circle-fill"></i> Pellentesque posuere vulputate</li>
                  <li><i class="bi bi-check-circle-fill"></i> Quisque rutrum aenean</li>
                  <li><i class="bi bi-check-circle-fill"></i> Fusce vulputate eleifend</li>
                  <li><i class="bi bi-check-circle-fill"></i> Phasellus viverra nulla</li>
                </ul>
              </div>
              <div class="plan-cta">
                <a href="#" class="btn-plan">Choose Plan</a>
              </div>
            </div>
          </div><!-- End Enterprise Plan -->
        </div>

      </div>

    </section><!-- /Pricing Section --> --}}

    <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>FAQ</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="question-wrapper">
                  <div class="icon-wrapper">
                    <i class="bi bi-patch-question"></i>
                  </div>
                  <div class="content-wrapper">
                    <h3 class="question">Bagaimana cara mendaftar kegiatan?</h3>
                    <div class="answer">
                      <p>Cukup pilih kegiatan yang tersedia pada halaman Kegiatan, klik tombol Daftar, lalu isi formulir pendaftaran dengan data diri yang benar. Setelah itu, data Anda akan otomatis tersimpan di sistem.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                <div class="question-wrapper">
                  <div class="icon-wrapper">
                    <i class="bi bi-patch-question"></i>
                  </div>
                  <div class="content-wrapper">
                    <h3 class="question">Bagaimana cara mengetahui bahwa pendaftaran saya berhasil?</h3>
                    <div class="answer">
                      <p>Setelah berhasil mendaftar, Anda akan diarahkan ke halaman konfirmasi dan juga menerima notifikasi melalui email/nomor pendaftaran sebagai bukti.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <div class="question-wrapper">
                  <div class="icon-wrapper">
                    <i class="bi bi-patch-question"></i>
                  </div>
                  <div class="content-wrapper">
                    <h3 class="question">Apakah kuota peserta terbatas?</h3>
                    <div class="answer">
                      <p>Ya, setiap kegiatan memiliki kuota peserta yang berbeda. Jika kuota sudah penuh, pendaftaran akan otomatis ditutup.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
                <div class="question-wrapper">
                  <div class="icon-wrapper">
                    <i class="bi bi-patch-question"></i>
                  </div>
                  <div class="content-wrapper">
                    <h3 class="question">Apakah saya bisa membatalkan pendaftaran?</h3>
                    <div class="answer">
                      <p>Bisa. Silakan hubungi admin melalui halaman Contact dengan menyertakan nama dan nomor pendaftaran Anda.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="contact-info-panel">
              <div class="panel-content">
                <div class="info-header">
                  <h2>Kontak Kami</h2>
                  <p>Punya pertanyaan atau butuh bantuan terkait pendaftaran kegiatan? Silakan hubungi kami melalui informasi di bawah ini</p>
                </div>

                <div class="info-grid">
                  <div class="info-card" data-aos="slide-up" data-aos-delay="250">
                    <div class="card-icon">
                      <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="card-content">
                      <h4>Alamat Kantor</h4>
                      <p>Jalan Tunjungan No. 1-3 Gedung Siola Lt.2 Surabaya – 60275</p>
                    </div>
                  </div>

                  <div class="info-card" data-aos="slide-up" data-aos-delay="300">
                    <div class="card-icon">
                      <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="card-content">
                      <h4>Alamat Email</h4>
                      <p>besmart@surabaya.go.id</p>
                    </div>
                  </div>

                  <div class="info-card" data-aos="slide-up" data-aos-delay="350">
                    <div class="card-icon">
                      <i class="bi bi-headset"></i>
                    </div>
                    <div class="card-content">
                      <h4>Telepon</h4>
                      <p>082132870798</p>
                    </div>
                  </div>

                </div>

                <div class="social-section" data-aos="fade-in" data-aos-delay="450">
                  <h5>Follow Our Journey</h5>
                  <div class="social-icons">
                    <a href="#" class="social-icon">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="slide-left" data-aos-delay="300">
            <div class="contact-form-wrapper">
              <div class="form-header">
                <h3>Hubungi Kami</h3>
                <div class="header-line"></div>
              </div>

              <form action="forms/contact.php" method="post" class="php-email-form modern-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="fullName" placeholder="Nama Lengkap" required="">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="emailAddress" placeholder="Alamat Email" required="">
                </div>

                <div class="form-group">
                  <input type="tel" class="form-control" name="phone" id="phoneNumber" placeholder="No Telepon">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="emailSubject" placeholder="Subjek" required="">
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" id="messageContent" rows="6" placeholder="Pesan Anda ada disini..." required=""></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <button type="submit" class="submit-btn">
                  <span class="btn-text">Kirim Pesan</span>
                  <span class="btn-icon">
                    <i class="bi bi-arrow-right"></i>
                  </span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">

      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-start">

          <div class="col-lg-5">
            <div class="brand-section">
              <a href="index.html" class="logo d-flex align-items-center mb-4">
                <span class="sitename">SiPemuda</span>
              </a>
              <p class="brand-description">Crafting exceptional digital experiences through thoughtful design and innovative solutions that elevate your brand presence.</p>

              <div class="contact-info mt-5">
                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>Jalan Tunjungan No. 1-3 Gedung Siola Lt.2 Surabaya – 60275</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-telephone"></i>
                  <span>082132870798</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <span>besmart@surabaya.go.id</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="footer-nav-wrapper">
              <div class="row">

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6 style="font-size: 18px; font-weight: bold;">SiPemuda</h6>
                    <nav class="footer-nav" style="font-size: 16px; font-weight: bold;">
                      <a href="/">Beranda</a>
                      <a href="#about">Tentang</a>
                      <a href="/kegiatan">Kegiatan</a>
                      <a href="#contact">Kontak</a>
                    </nav>
                  </div>
                </div>

                {{-- <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Services</h6>
                    <nav class="footer-nav">
                      <a href="#">Brand Identity</a>
                      <a href="#">Web Design</a>
                      <a href="#">Mobile Apps</a>
                      <a href="#">Digital Strategy</a>
                      <a href="#">Consultation</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Resources</h6>
                    <nav class="footer-nav">
                      <a href="#">Design Blog</a>
                      <a href="#">Style Guide</a>
                      <a href="#">Free Assets</a>
                      <a href="#">Tutorials</a>
                      <a href="#">Inspiration</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-lg-3">
                  <div class="nav-column">
                    <h6>Connect</h6>
                    <nav class="footer-nav">
                      <a href="#">Start Project</a>
                      <a href="#">Schedule Call</a>
                      <a href="#">Join Newsletter</a>
                      <a href="#">Follow Updates</a>
                      <a href="#">Partnership</a>
                    </nav>
                  </div>
                </div> --}}

              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="footer-social" data-aos="fade-up" data-aos-delay="200">
        <div class="row align-items-center">

        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="bottom-content" data-aos="fade-up" data-aos-delay="300">
          <div class="row align-items-center">

      

          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetss/vendor/php-email-form/validate.js"></script>
  <script src="assetss/vendor/aos/aos.js"></script>
  <script src="assetss/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assetss/js/main.js"></script>

</body>

</html>