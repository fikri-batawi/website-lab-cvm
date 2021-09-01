<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->include('frontend/includes/head') ?>
  </head>

<body>
  <!-- Header -->
  <?= $this->include('frontend/includes/header') ?>

  <!-- Hero -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Laboratorium</h6>
        <h2>Computer Vision & Multimedia</h2>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- Feature -->
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>All Courses</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Real Meeting</h4>
              </div>
              <div class="content-hide">
                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature -->

  <!-- Visi Misi -->
  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Visi & Misi</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="zigzag-timeline__item">
            <!-- Milestone -->
            <div className="zigzag-timeline__milestone">
              <h2 class="text-light">Visi</h2>
            </div>
            <!-- Content -->
            <h6 class="text-light font-weight-normal">Menjadi laboratorium komputer yang unggul dalam Pengembangan Ilmu Pengetahuan di bidang Computer Vision & Multimedia, serta menjadi unit pendukung kegiatan yang handal bagi unit kerja lain di lingkungan Universitas Nasional khususnya Fakultas Teknologi Komunikasi & Informatika.</h6>
          </div>
          <div class="zigzag-timeline__item">
            <!-- Milestone -->
            <div className="zigzag-timeline__milestone">
              <h2 class="text-light"> Misi </h2>
            </div>
            <!-- Content -->
            <ol>
              <li class="text-light">Meningkatkan kualitas sumber daya insani yang berpengetahuan, berkeahlian, dan berbudaya di bidang Computer Vision & Multimedia.</li>
              <li class="text-light">Meningkatkan sinergi keahlian bidang komputer dengan bidang keahlian lainnya.</li>
              <li class="text-light">Meningkatkan kegiatan layanan bidang komputer yang bermanfaat bagi mahasiswa.</li>
              <li class="text-light">Meningkatkan kualitas dan produktivitas riset bidang Computer Vision & Multimedia yang inovatif.</li>
              <li class="text-light">Meningkatkan kualitas dan produktivitas teknologi terapan bidang komputer yang bernilai ekonomis.</li>
              <li class="text-light">Menghasilkan produk penelitian di bidang Computer Vision & Multimedia</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Visi Misi -->

  <!-- Footer -->
  <?= $this->include('frontend/includes/footer') ?>

  <!-- Scripts -->
  <?= $this->include('frontend/includes/js') ?>
</body>
</html>