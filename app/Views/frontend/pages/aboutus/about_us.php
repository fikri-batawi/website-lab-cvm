<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('frontend/includes/head') ?>
  </head>
<body>
  <!-- Header -->
  <?= $this->include('frontend/includes/header') ?>
  <!-- About Lab -->
  <section class="section video" data-section="profile">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <h4> <em>Laboratorium</em> Computer Vision & Multimedia </h4>
            <p>Laboratorium Computer Vision & Multimedia Universitas Nasional merupakan laboratorium yang memfokuskan diri pada bidang pembelajaran komputer dan pengembangan sistem informasi di Universitas Nasional. Adapun kegiatan yang dapat dilakukan di lingkup laboratorium Komputer Universitas Nasional meliputi kegiatan praktikum, penggunaan ruang laboratorium, penggunaan laboratorium untuk penelitian dan kerjasama penelitian, pengabdian masyarakat, praktik pembelajaran, diskusi, simulasi, pengerjaan skripsi, sertifikasi atau sejenisnya.</p>
          </div>
        </div>
        
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Pengenalan Budaya Unas</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=mooM1fKoPOc" class="play"><img src="assets/images/pengenalan-unas.png"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Lab -->
  <!-- Structure Lab -->
  <section class="section why-us" data-section="structure-lab">
  <div class="tree-diagram">
    <div class="container">  
    <ul> 
        <li>
          <div class="section-heading">
            <h2>Structure Laboratorium Computer Vision & Multimedia </h2>
          </div>          
            <!-- Content -->
            <img src="<?= base_url('assets/images/structure/nurhayati.jpg') ?>" alt="">
            <!-- Sub items -->               
            <ul>
                <li>
                    <!-- Content -->
                    <img src="<?= base_url('assets/images/structure/dimas.jpg') ?>" alt="">
                    <!-- Sub items -->
                    <ul>
                        <li><img src="<?= base_url('assets/images/structure/safira.jpg') ?>" alt=""></li>
                        <li><img src="<?= base_url('assets/images/structure/yolanda.jpg') ?>" alt=""></li>
                        <li><img src="<?= base_url('assets/images/structure/fikri.jpg') ?>" alt=""></li>
                    </ul>
                </li>
            </ul>  
        </li>      
    </ul>
    </div>
  </div>
</section>
  <!-- End Structure Lab -->

 <!-- Footer -->
 <?= $this->include('frontend/includes/footer') ?>
</body>
</html>