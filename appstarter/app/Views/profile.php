<!-- app/Views/profile.php -->
<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<div class="d-flex flex-column align-items-center">
  <h2>Profile</h2>
  <img src="<?= base_url('assets/images/profile.png') ?>" alt="Profile Picture" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
  <p class="text-center">Nama: David Dimas Santana</p>
  <p class="text-center">NIM : 32602200053</p>
  <p class="text-center">Mahasiswa Malas</p>
  <div class="social-icons mt-3">
    <a href="https://www.instagram.com/" target="_blank" class="text-dark mx-2">
      <i class="fab fa-instagram fa-2x"></i>
    </a>
    <a href="https://github.com/" target="_blank" class="text-dark mx-2">
      <i class="fab fa-github fa-2x"></i>
    </a>
    <a href="https://www.facebook.com/" target="_blank" class="text-dark mx-2">
      <i class="fab fa-facebook fa-2x"></i>
    </a>
  </div>
</div>
<?= $this->endSection() ?>