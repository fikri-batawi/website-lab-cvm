<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->include('frontend/includes/head') ?>
  </head>

<body>
  <!-- Header -->
  <?= $this->include('frontend/includes/header') ?>

  <!-- Profile -->
  <section class="section video" data-section="profile">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <h4> APLIKASI PERSONALITY TEST </h4>
            <p>Aplikasi yang akan membantu mengetahui kepribadian kamu yang sebenarnya.Dengan mengetahui siapa diri kamu sebenarnya, kamu bisa menjadi orang yang lebih baik. Disediakan beberapa pertanyaan yang harus kamu jawab untuk mengetahui apa tipe kepribadian dirimu.</p>
            <p>Diakhir tes, aplikasi ini akan menunjukkan jenis kepribadian kamu lengkap dengan penjelasan mengenai referensi pekerjaan yang cocok dengan tipe kepribadian, kelebihan dan kekurangannya serta chart grafik dengan nilai presentasi dari masing-masing tipe kepribadian.</p>
          </div>
          <div class="main-button mt-5">
            <div class="scroll-to-section"><a class="external" href="https://drive.google.com/drive/folders/1COTvKoc16RfvgOedI0MKBqZCqVdubIU_?usp=sharing">Download Aplikasi</a></div>
          </div>
        </div>
        
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Personality Test</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=qV9gmsHWxZ4" class="play"><img src="<?= base_url('assets/images/product/personality/1.jpeg') ?>"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- End Profile -->

   <!-- Footer -->
   <?= $this->include('frontend/includes/footer') ?>

<!-- Scripts -->
<?= $this->include('frontend/includes/js') ?>
</body>
</html>