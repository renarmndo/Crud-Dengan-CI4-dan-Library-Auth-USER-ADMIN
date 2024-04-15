<style>
  /* styles.css */
  body {
    padding-top: 0px;
    /* Height of the fixed navbar */
  }

  .sidebar {
    height: 100vh;
    position: sticky;
    top: 0;
    left: 0;
  }

  /* Adjust this value according to your layout */
  .content {
    padding-top: 5px;
  }
</style>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="<?= base_url('assets/image/logo.png'); ?>" width="65px">
    </div>
    <div class="sidebar-brand-text mx-3">Universitas Pamulang <sup></sup></div>
  </a>
  <?php if (in_groups('admin')): ?>
    <!-- Divider -->
    <hr class="sidebar-divider my">
    <!-- Heading -->
    <div class="sidebar-heading">
      Daftar Mahasiswa Unpam
    </div>
    <!-- Nav Item - My Profile -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin'); ?>">
        <i class="fas fa-user"></i>
        <span>Daftar Mahasiswa</span></a>
    </li>
  <?php endif; ?>
  <!-- Divider -->
  <hr class="sidebar-divider my">
  <!-- Heading -->
  <div class="sidebar-heading">
    Profil Mahasiswa
  </div>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('user'); ?>">
      <i class="fas fa-home"></i>
      <span>Dashboard</span></a>
  </li>
  <!-- Nav Item - My Profile -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('profil'); ?>">
      <i class="fas fa-user"></i>
      <span>My Profile</span></a>
  </li>
  <!-- Nav Item - MataKuliah -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('matakuliah'); ?>">
      <i class="fas fa-book"></i>
      <span>MataKuliah</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('matakuliah'); ?>">
      <i class="fas fa-book-open"></i>
      <span>Rangkuman Nilai</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('logout'); ?>">
      <i class="fas fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>