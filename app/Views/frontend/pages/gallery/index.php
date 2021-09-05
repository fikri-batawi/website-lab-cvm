<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->include('frontend/includes/head') ?>
  </head>

<body>
  <!-- Header -->
  <?= $this->include('frontend/includes/header') ?>

<!-- Page Content -->
<div class="container">

  <h1 class="fw-light text-center text-lg-start mt-4 mb-0"></h1>

  <hr class="mt-5 mb-5 ">

  <div class="row text-center text-lg-start">
    <!-- Maintenance -->
    <?php for($i=1; $i<=2; $i++) : ?>
      <div class="col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="<?= base_url('assets/images/kegiatan/maintenance/'.$i.'.jpg') ?>" alt="maintenance">
        </a>
      </div>
    <?php endfor; ?>
    <!-- End Maintenance -->

    <!-- PLTI -->
    <?php for($i=1; $i<=3; $i++) : ?>
      <div class="col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="<?= base_url('assets/images/kegiatan/PLTI/'.$i.'.jpg') ?>" alt="PLTI">
        </a>
      </div>
    <?php endfor; ?>
    <!-- End PLTI -->

    <!-- test-aslab-19 -->
    <?php for($i=1; $i<=3; $i++) : ?>
      <div class="col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="<?= base_url('assets/images/kegiatan/test-aslab-19/'.$i.'.jpg') ?>" alt="test-aslab-19">
        </a>
      </div>
    <?php endfor; ?>
    <!-- End test-aslab-19 -->
  </div>

</div>
<!-- End Page Content -->

  <!-- Footer -->
  <?= $this->include('frontend/includes/footer') ?>


<!-- Scripts -->
<?= $this->include('frontend/includes/js') ?>
</body>
</html>