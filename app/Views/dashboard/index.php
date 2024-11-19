<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= base_url('/dashboard') ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= base_url('/logout') ?>" class="nav-link">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="<?= base_url('/dashboard') ?>" class="brand-link">
            <span class="brand-text font-weight-light">Dashboard</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="<?= base_url('/produk') ?>" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Kelola Produk</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content-header">
            <h1>Selamat datang, <?= session()->get('nama_pengguna') ?></h1>
            <p>Role Anda: <?= session()->get('role') ?></p>
        </div>
        <div class="content">
            <div class="container-fluid">
                <!-- Konten Dashboard -->
                <div class="row">
                    <div class="col-12">
                        <h2>Informasi Lainnya</h2>
                        <!-- Tambahkan konten lainnya sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <strong>&copy; <?= date('Y') ?> Dashboard.</strong> All rights reserved.
    </footer>
</div>

<script src="<?= base_url('path/to/jquery.min.js') ?>"></script>
<script src="<?= base_url('path/to/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('path/to/adminlte.min.js') ?>"></script>
</body>
</html>
