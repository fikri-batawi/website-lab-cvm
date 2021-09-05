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
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <h4 class="text-light"><em>Sanguinis</em></h4>
            <p class="text-light">Orang dengan tipe kepribadian sanguin cenderung tampak hidup, optimistis, memiliki emosi yang meluap-luap, dan sikap acuh tak acuh. Orang sanguinis dikenal mempunyai karakter yang menarik, emosional, suka bicara, menghidupkan suasana, antusias, ekspresif, periang, dan penuh semangat. Pada dasarnya, orang dengan tipe kepribadian sanguinis akan menjadi individu yang sangat terbuka kepada orang lain dan lingkungan.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4 class="text-light"><em>Plegmatis</em></h4>
            <p class="text-light">Kepribadian seorang plegmatis tercermin dari sikapnya yang tidak suka berasumsi dan selalu mendahulukan kepentingan orang lain. Para plegmatis memiliki kecenderungan untuk menyenangkan hati orang lain, maka itu mereka tidak pernah mendahulukan keinginannya sendiri.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4 class="text-light"><em>Korelis</em></h4>
            <p class="text-light">Pada dasarnya tipe kepribadian koleris adalah sebuah kepribadian yang dinamis, aktif, berkemauan kuat, mempunyai sifat keras dan tegas. Orang dengan tipe kepribadian koleris adalah pribadi yang berfokus pada tujuan, dan dalam hubungan sosial mereka umumnya berpikir praktis dan sangat blak-blakan.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4 class="text-light"><em>Melankolis</em></h4>
            <p class="text-light">Kepribadian melankolis bisa digambarkan sebagai orang yang serius, tenang, dan tertutup, namun cerdas dan kritis dalam berpikir. Orang dengan tipe kepribadian melankolis adalah ahli di dalam perencanaan dan analisis. Hidup mereka sangat teratur, suka kerapian, dan secara akademis umumnya tergolong orang yang pandai.</p>
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