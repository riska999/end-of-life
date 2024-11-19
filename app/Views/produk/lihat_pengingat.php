<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengingat untuk <?= htmlspecialchars($produk['nama_produk']) ?></title>
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
                <h1>Pengingat untuk <?= htmlspecialchars($produk['nama_produk']) ?></h1>
            </div>
            <div class="container">
                <h4>Notifikasi akan dikirimkan pada:</h4>
                <ul>
                    <?php foreach ($notificationDates as $notification): ?>
                        <li><?= htmlspecialchars($notification['days']) ?> hari sebelum kadaluarsa, yaitu: <?= htmlspecialchars($notification['date']) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('/produk') ?>" class="btn btn-secondary">Kembali</a>                
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                AdminLTE
            </div>
            <strong>&copy; 2024 <a href="#">Your Company</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="<?= base_url('assets/adminlte/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/js/adminlte.min.js') ?>"></script>
</body>
</html>
