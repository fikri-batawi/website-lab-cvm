<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->include('frontend/includes/head') ?>
  </head>

<body>
  <!-- Header -->
  <?= $this->include('frontend/includes/header') ?>

  <!-- Section -->
  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Personality Test</h2>
            <div class="main-button"><a href="<?= base_url('/personality/question') ?>">Mulai</a></div>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <section class='tabs-content'>
              <article id='Sanguinis'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?= base_url("assets/images/choose-us-image-01.png") ?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Kepribadian Sanguinis</h4>
                    <p>Merupakan individu yang optimis serta selalu bersemangat. Orang Sanguinis juga selalu kreatif dan ramah dengan orang lain</p>
                  </div>
                </div>
              </article>
              <article id='Melankolis'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?= base_url("assets/images/choose-us-image-02.png") ?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Kepribadian Melankolis</h4>
                    <p>Seorang yang perfeksionis. Memiliki kepekaan yang tinggi terhadap orang lain. Dianggap sangat sensitif dan mudah berempati terhadap orang di sekitarnya.</p>
                  </div>
                </div>
              </article>
              <article id='Korelis'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?= base_url("assets/images/choose-us-image-03.png") ?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Kepribadian Korelis</h4>
                    <p>Orang yang memiliki kemauan keras dan juga sangat tegas. Mereka cenderung melakukan pekerjaan dengan target yang mereka miliki dan akan sangat menyukai tantangan.</p>
                  </div>
                </div>
              </article>
              <article id='Plegmatis'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?= base_url("assets/images/choose-us-image-03.png") ?>" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Kepribadian Plegmatis</h4>
                    <p>Orang yang sangat cinta damai. Mereka cenderung menghindari konflik dan selalu berusaha untuk menengahi orang lain. Mereka suka mencari keharmonis dengan orang lain.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section -->

   <!-- Footer -->
   <?= $this->include('frontend/includes/footer') ?>

<!-- Scripts -->
<?= $this->include('frontend/includes/js') ?>
</body>
</html>